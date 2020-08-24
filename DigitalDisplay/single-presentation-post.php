<?php
/*
 * Template Name: Presentation
 * Template Post Type: post
 */

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

if( have_posts() ):
	while( have_posts() ):
		the_post();
		$show_footer_messages = get_field('show_footer_messages');
		$events_calendar_location = get_field('events_calendar_location');
		if ( $events_calendar_location == "Leave Blank" ) {
			$events_calendar_location = "";
		}
		$event_begins_at = strtotime(get_field('event_begins_at'));
		$event_ends_at = strtotime(get_field('event_ends_at'));
		$display_event_time = get_field('display_event_time');
		$type = get_field('type');
		if ( $type == "Leave Blank" ) {
			$type = "";
		}
		$cropped_image = get_field('cropped_image');
		$text_at_bottom = get_field('text_at_bottom');
		$title_1 = get_field('title_1');
		$name_1 = get_field('name_1');
		$credentials_1 = get_field('credentials_1');
		$title_2 = get_field('title_2');
		$name_2 = get_field('name_2');
		$credentials_2 = get_field('credentials_2');
		$title_3 = get_field('title_3');
		$name_3 = get_field('name_3');
		$credentials_3 = get_field('credentials_3');
		if ( $cropped_image['url'] ) {
			$content_width = 820;
		} else {
			$content_width = 1140;
		}
		if ( $title_3 ) {
			$left_box_width = 33;
			$center_box_width = 33;
			$right_box_width = 33;
			$center_box_display = "table-cell";
			$right_box_display = "table-cell";
		} elseif ( $title_2 ) {
			$left_box_width = 50;
			$center_box_width = 50;
			$right_box_width = 0;
			$center_box_display = "table-cell";
			$right_box_display = "none";
		} else {
			$left_box_width = 100;
			$center_box_width = 0;
			$right_box_width = 0;
			$center_box_display = "none";
			$right_box_display = "none";
		}

		if ( $event_ends_at ) {
			$date1 = date('F j',$event_begins_at);
			$date2 = date('F j',$event_ends_at);
			$time1 = date('g:i a',$event_begins_at);
			$time2 = date('g:i a',$event_ends_at);
			if ( $date1 == $date2 ) {
				if ( $display_event_time == "Yes" ) {
					if ( $time1 == $time2 ) {
						$datetime = "$date1, $time1";
					} else {
						$datetime = "$date1, $time1 - $time2";
					}
				} else {
					$datetime =  "$date1";
				}
			} else {
				if ( $display_event_time == "Yes" ) {
					$datetime = "$date1, $time1 - $date2, $time2";
				} else {
					$datetime = "$date1 - $date2";
				}
			}
		} else {
			if ( $display_event_time == "Yes" ) {
				$datetime = date('F j, g:i a',$event_begins_at);
			} else {
				$datetime = date('F j',$event_begins_at);
			}
		}
	endwhile;
else:
endif;
?><html>
<head>
	<?php echo head_text('Event')?>
<style>
.content {
	width:1140px;
	height:500px;
    margin:35px;
    padding:30px;
	border:5px solid white;
	text-align:center;
}
.content2 {
	width:<?php echo $content_width;?>px;
	height:240px;
	display: table;
}
.header {
	width:<?php echo $content_width;?>px;
	height:40px;
	display: table;
}

#left_box {
    display: table-cell;
    vertical-align: middle;
    width: <?php echo $left_box_width;?>%;
    padding:10px;
}
#center_box {
    display: <?php echo $center_box_display;?>;
    vertical-align: middle;
    width: <?php echo $center_box_width;?>%;
    padding:10px;
}
#right_box {
    display: <?php echo $right_box_display;?>;
    vertical-align: middle;
    width: <?php echo $right_box_width;?>%;
    padding:10px;
}
#footer_box {
    vertical-align: middle;
	width:<?php echo $content_width;?>px;
}
<?php if ( $cropped_image['url'] ): ?>
.cropped_image {
    height: 520px;
    margin: 20px 20px 20px 20px;
    background: url('<?php echo $cropped_image["url"];?>') no-repeat center center;
}
<?php endif;?>
</style>
</head>
<body>
	<div id="slide_content">
		<main>

<div class="cropped_image_container"><div id="cropped_image" class="cropped_image"></div></div>
<div class="content">
	<div class="header">
		<div class="logo"><img src="<?php echo $logo;?>" height="120"></div>
		<br />
		<div id="type" style="font-size:1.5em;"><?php echo $type;?></div>
		<div style="font-size:2em;">
<?php
	echo $datetime;
	if ( $events_calendar_location ) {
		echo ", $events_calendar_location";
	};
?>
		</div>
		<br />
	</div>
	<div class="content2">
		<div id="left_box">
			<div id="name1" style="font-size:3em;"><?php echo $name_1;?></div>
			<div id="credentials1" style="font-size:1.5em;"><?php echo $credentials_1;?></div>
			<br />
			<div id="title1" style="font-size:2em;"><?php echo $title_1;?></div>
		</div>
		<div id="center_box">
			<div id="name2" style="font-size:3em;"><?php echo $name_2;?></div>
			<div id="credentials2" style="font-size:1.5em;"><?php echo $credentials_2;?></div>
			<br />
			<div id="title2" style="font-size:2em;"><?php echo $title_2;?></div>
		</div>
		<div id="right_box">
			<div id="name3" style="font-size:3em;"><?php echo $name_3;?></div>
			<div id="credentials3" style="font-size:1.5em;"><?php echo $credentials_3;?></div>
			<br />
			<div id="title3" style="font-size:2em;"><?php echo $title_3;?></div>
		</div>
	</div>
	<div id="footer_box">
		<div id="extra" style="font-size:1.5em;"><?php echo $text_at_bottom;?></div>
	</div>

		</main>
<?php echo footer($show_footer_messages)?>
	</div>
</body>
</html>

