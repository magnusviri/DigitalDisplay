<?php

/*
 * DigitalDisplay
 * github.com/magnsusviri/DigitalDisplay
 * James Reynolds
 *
 * Copyright 2020, The University of Utah
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

$rows = 8;
$calendar1 = array();
if ( have_posts() ) {
	$now = time();
	while ( have_posts() ) {
		the_post();
		$show_footer_messages = get_field('show_footer_messages');
		$event_begins_at = strtotime(get_field('event_begins_at'));
		$event_ends_at = strtotime(get_field('event_ends_at'));
		if ( $event_ends_at ) {
			$end_date = $event_ends_at;
		} else {
			$end_date = $event_begins_at;
		}
		if ( $now-86400 < $end_date and $now > $end_date-604800 ) {
			$events_calendar_location = get_field('events_calendar_location');
			if ( $events_calendar_location == "Leave Blank" ) {
				$events_calendar_location = "";
			}
			$display_event_time = get_field('display_event_time');
			$mon1 = date('M',$event_begins_at); #D = Mon-Fri
			$day1 = date('j',$event_begins_at); #D = Mon-Fri
			$hour1 = date('g',$event_begins_at);
			$min1 = date(':i',$event_begins_at);
			$ampm1 = date(' a',$event_begins_at);
			$time = "";
			if ( $event_ends_at ) {
				$mon2 = date('M',$event_ends_at); #D = Mon-Fri
				$day2 = date('j',$event_ends_at); #D = Mon-Fri
				$hour2 = date('g',$event_ends_at);
				$min2 = date(':i',$event_ends_at);
				$ampm2 = date(' a',$event_ends_at);
				if ( "$mon1 $day1" == "$mon2 $day2" ) {
					$date = "$mon1 $day1";
				} elseif ( $mon1 == $mon2 ) {
					$date = "$mon1 $day1-$day2";
				} else {
					$date = "$mon1 $day1-$mon2 $day2";
				}
				if ( $display_event_time == "Yes" ) {
					if ( $ampm1 == $ampm2 ) {
						$ampm1 = '';
					}
					if ( $min1 == ":00" and $min2 == ":00" ) {
						$min1 = '';
						$min2 = '';
					}
					if ( "$hour1$min1$ampm1" == "$hour2$min2$ampm2" ) {
						$time = "$hour1$min1$ampm1";
					} else {
						$time = "$hour1$min1$ampm1-$hour2$min2$ampm2";
					}
				}
			} else {
				$date = "$mon1 $day1";
				if ( $display_event_time == "Yes" ) {
					$time = "$hour1$min1$ampm1";
				}
			}
			array_push($calendar1,
				[
					'date' => $date,
					'time' => $time,
					'end_date' => $end_date,
					'title' => get_field('events_calendar_title'),
					'name' => get_field('events_calendar_name'),
					'location' => $events_calendar_location,
				],
			);
		}
	}
	usort($calendar1, 'sort_calendar');
	$count = 0;
	$calendar2 = array();
	foreach ($calendar1 as $post_hash) {
		$count++;
		if ( $count < $rows ) {
			array_push($calendar2, $post_hash);
		}
	}
}
function sort_calendar($a, $b)
{
    return $a['end_date'] - $b['end_date'];
}
?><html>
<head>
	<?php echo head_text('This Week\'s Events')?>
</head>
<body>
	<div id="slide_content">
		<main>
			<table>
				<tr>
					<th colspan="3">This Week's Events</th>
				</tr>
<?php foreach ($calendar2 as $post_hash) {?>
				<tr>
					<td class="center" style="width: 160px;">
						<div class="red"><?php echo $post_hash['date'];?></div>
						<div class="grey"><?php echo $post_hash['time'];?></div>
					</td>
					<td class="center">
						<div class="grey"><?php echo $post_hash['location'];?></div>
					</td>
					<td>
						<div class="red"><?php echo $post_hash['name'];?></div>
						<div style="font-size: .9em"><?php echo $post_hash['title'];?></div>
					</td>
				</tr>
<?php }?>
			</table>
		</main>
<?php echo footer($show_footer_messages)?>
	</div>
</body>
</html>
