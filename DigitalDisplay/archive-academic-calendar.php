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

$rows = 10;
$calendar1 = array();
if ( have_posts() ) {
	$now = time();
	while ( have_posts() ) {
		the_post();
		$show_footer_messages = "Yes"; //get_field('show_footer_messages');
		$start_date = strtotime(get_field('start_date'));
		$end_date = strtotime(get_field('end_date'));
		if ( $now-86400 < $end_date ) {
			if ( $start_date ) {
				$date_text = date('M j',$start_date)." - ".date('M j',$end_date);
			} else {
				$date_text = date('D, M j',$end_date);
			}
			array_push($calendar1,
				[
					'end_date' => $end_date,
					'date_text' => $date_text,
					'title' => get_the_content(),
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
	<?php echo head_text('Academic Calendar')?>
</head>
<body>
	<div id="slide_content">
		<main>
			<table>
				<tr>
					<th colspan="2">Academic Calendar</th>
				</tr>
<?php foreach ($calendar2 as $post_hash) {?>
				<tr>
					<td class="red right"><?php echo $post_hash['date_text']?></td>
					<td><?php echo $post_hash['title'];?></td>
				</tr>
<?php }?>
			</table>
		</main>
<?php echo footer($show_footer_messages)?>
	</div>
</body>
</html>
