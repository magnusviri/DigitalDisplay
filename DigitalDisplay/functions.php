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

$logo = "/wp-content/uploads/2020/02/logo.png";

add_image_size( 'image-slide', 1280, 600, false );
add_image_size( 'image-slide', 1280, 720, false ); // Install "Force Regenerate Thumbnails" and run it if you change this.

function academic_calendar_post_type()
{
	$args = array(
		'labels' => array(
			'name' => 'Academic Calendar',
			'singular_name' => 'Academic Calendar',
		),
		'menu_icon' => 'dashicons-calendar-alt',
		'hierarchical' => false,
		'public' => true,
		'supports' => array( 'title', 'editor' ),
		'has_archive' => true
	);
	register_post_type( 'academic-calendar', $args );

}
add_action( 'init', 'academic_calendar_post_type' );

function hide_admin_stuff() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if ( !isset( $post_id ) ) return;
	remove_post_type_support( 'post', 'comments' );
	$removal_post_title = [
		'Events Calendar',
		'Academic Calendar',
	];
	$post_title = get_the_title( $post_id );
	if ( in_array( $post_title, $removal_post_title ) ) {
		remove_post_type_support( 'post', 'editor' );
	}
	$removal_post_template = [
		'single-alert-post.php',
		'single-events-calendar-only-post.php',
		'single-notice-post.php',
		'single-presentation-post.php',
	];
	$template_file = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template_file, $removal_post_template ) ) {
		remove_post_type_support( 'post', 'editor' );
	}
}
add_action( 'admin_init', 'hide_admin_stuff' );

function footer($show_footer_messages) {
	if ( $show_footer_messages == "Yes" ) {
		return <<<EOL
<footer><span id="footerMessageLeft"></span><span id="footerMessageRight"></span></footer>
<script>
// Right Footer Message
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}
var footerList = [
	'Facebook: @',
	'Twitter: @',
	'Instagram: @',
	'bla@example.com',
	'Let us know your news',
];
var vars = getUrlVars();
if( vars.hasOwnProperty('counter') ) {

	footerIndex = decodeURIComponent(vars['counter']) % footerList.length;
} else {
	footerIndex = Math.floor(Math.random()*footerList.length);
}
document.getElementById("footerMessageRight").innerHTML = footerList[footerIndex];
// Left Footer Message
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', 'minute': 'numeric' };
var dt = new Date();
document.getElementById("footerMessageLeft").innerHTML = dt.toLocaleDateString("en-US", options);
</script>
EOL;
	}
	return "";
}

function head_text($title) {
	$stylesheet = get_stylesheet_uri();
	$text = <<<EOL
	<link rel="stylesheet" type="text/css" href="$stylesheet" media="screen"/>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<title>$title</title>
EOL;
	return $text;
}
