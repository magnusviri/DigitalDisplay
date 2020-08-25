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

$debug = false;
$slides = array();
if ( have_posts() ) {
	$now = time();
	while ( have_posts() ) {
		the_post();
		$the_url = esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) );
		$the_category = get_the_category();
		$display = false;
		foreach ($the_category as $category_hash) {
			if ( $category_hash->name == "Slide" ) {
				$display = true;
			}
		}
		if ( $display ) {
			$start_date = strtotime(get_field('start_date'));
			$end_date = strtotime(get_field('end_date'));
			if (
				( ! $start_date and ! $end_date ) or
				( ! $start_date and $now <= $end_date ) or
				( $start_date <= $now and ! $end_date ) or
				( $start_date <= $now and $now <= $end_date )
			   ) {
				$the_url = preg_replace("/\/events-calendar\//", "/category/events-calendar/", $the_url);
				if ( $debug ) {
					print "Y " . $the_url . " - \"" . $category_hash->name . "\" == \"Slide\", $start_date < $now < $end_date.</br>";
				}
				array_push($slides,
					[
						'the_url' => $the_url,
					],
				);
			} elseif ( $debug ) {
				$the_url = esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) );
				print "N " . $the_url . " - $start_date .. $now .. $end_date.<br>";
			}
		} elseif ( $debug ) {
			$the_url = esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) );
			print "N " . $the_url . " - " . $category_hash->name . " != \"Slide\".</br>";
		}
	}
}
?>


<html>
<head>
<title></title>
<style>
body {
	background: black;
	color:#ccc;
	font-family: Sans-Serif;
	height:100%;
	margin:0;
	padding:0;
}
iframe {
	pointer-events: none;
	border:0px solid #ffffff;
	height:100%;
	width:100%;
}
div.left {
	position:absolute;
	top:0px;
	left:0px;
	height:720px;
	width:640px;
}
div.right {
	position:absolute;
	top:0px;
	left:640px;
	height:720px;
	width:640px;
}
</style>

<script type="text/javascript">
var urlList = [
<?php foreach ($slides as $post_hash) {?>
	{
		'url':'<?php echo $post_hash["the_url"] ?>',
		'duration':10,
	},
<?php }?>
];

no_cache_workaround = false;

function changeSlide(modifier) {
	if ( lastTimer ) {
		clearTimeout(lastTimer);
		timeoutFunction(modifier);
	}
}

function timeoutFunction(modifier) {
	if ( urlList.length != lastCount ) {
		slideIndex = -1;
		lastCount = urlList.length;
	}
	slideIndex += modifier;
	if ( slideIndex < 0 ) {
		slideIndex = urlList.length-1;
	} else if ( slideIndex >= urlList.length ) {
		slideIndex = 0;
		if ( reload ) {
			var oldURL = window.location.pathname;
			if ( no_cache_workaround ) {
				var now = new Date()
				oldURL.replace(/\?.*/, "").replace(/^(.*)$/, "[$1]" );
				window.location.href = oldURL + '?nocache=' + now.getTime();
			} else {
				window.location.href = oldURL;
			}
		}
	}
	currentIndex = slideIndex % urlList.length;
	if ( urlList[currentIndex] ) {
		var currentURL = urlList[currentIndex].url+"?counter="+slideIndex;
		var now = new Date()
		if ( no_cache_workaround ) {
			currentURL += "&"+now.getTime();
		}
		var currentTime = urlList[currentIndex].duration;
		document.getElementById(element_name).src = currentURL;
		document.getElementById(element_name).onload = function (e) {
			lastTimer = setTimeout('timeoutFunction(1)', currentTime*1000);
		}
	}
// 	console.log(element_name, urlList, slideIndex, lastCount)
}

</script>
</head>
<body>
<div class="left" onclick="changeSlide(-1)"></div>
<div class="right" onclick="changeSlide(1)"></div>
<iframe name="slides" id="slides" src=""></iframe>
<script type="text/javascript">
element_name = "slides";
slideIndex = -1;
lastCount = -1;
reload = true;
lastTimer = null;
timeoutFunction(1);
</script>
</body>
</html>
