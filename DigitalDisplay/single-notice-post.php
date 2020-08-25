<?php
/*
 * Template Name: Notice
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
		$cropped_image = get_field('cropped_image');
		$paragraph_1 = get_field('paragraph_1');
		$paragraph_2 = get_field('paragraph_2');
		$paragraph_3 = get_field('paragraph_3');
		$paragraph_4 = get_field('paragraph_4');
		if ( $cropped_image['url'] ) {
			$left_box_width = 820;
			$right_box_width = 460;
			$right_box_display = "table-cell";
		} else {
			$left_box_width = 1280;
			$right_box_width = 0;
			$right_box_display = "none";
		}
	endwhile;
else:
endif;
?><html>
<head>
	<?php echo head_text('Notice')?>
<style>
#left_box {
	display: table-cell;
	width: <?php echo $left_box_width;?>px;
}
#right_box {
	display: <?php echo $center_box_display;?>;
	width: <?php echo $left_box_width;?>px;
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
			<div id="border" class="center">
				<div class="cropped_image_container"><div id="cropped_image" class="cropped_image"></div></div>
				<div id="left_box" class="valign_middle">
					<div class="logo"><img src="<?php echo $logo;?>" height="120"></div>
					<br />
					<br />
			<?php if ( $paragraph_1 ): ?>
					<div id="p1" style="font-size:4.5em;"><?php echo $paragraph_1;?></div>
					<br />
			<?php endif;?>
					<div id="p2" style="font-size:3em;"><?php echo $paragraph_2;?></div>
					<br />
					<div id="p3" style="font-size:2em;"><?php echo $paragraph_3;?></div>
					<br />
					<div id="p4" style="font-size:1.5em;"><?php echo $paragraph_4;?></div>
				</div>
				<div id="right_box" class="valign_middle">
				</div>
			</div>
		</main>
<?php echo footer($show_footer_messages)?>
	</div>
</body>
</html>
