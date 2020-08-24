<?php
/*
 * Template Name: Alert
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

?><html>
<head>
	<?php echo head_text('CAMPUS INTERRUPTION NOTICE')?>
<style>
.red{
	color:red;
	font-size:3em;
}
#border {
	border:6px double;
	height: auto;
	font-size:1.8em;
}
</style>
</head>
<body>
	<div id="slide_content">
		<main>
			<p class="red">
				CAMPUS INTERRUPTION NOTICE
			</p>
			<div id="border" class="center">
	<?php if( have_posts() ): while( have_posts() ): the_post(); $show_footer_messages = get_field('show_footer_messages');?>

				<p id="p1"><?php echo get_field('paragraph_1');?></p>
				<p id="p2"><?php echo get_field('paragraph_2');?></p>
				<p id="p3"><?php echo get_field('paragraph_3');?></p>
				<p id="p4"><?php echo get_field('paragraph_4');?></p>
	<?php endwhile; else: endif;?>
			</div>
		</main>
<?php echo footer($show_footer_messages)?>
	</div>
</body>
</html>
