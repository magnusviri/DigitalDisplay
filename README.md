# DigitalDisplay

A WordPress template for an HTML based digital display (with a focus on higher education). Just point the digital display to a webpage (code for that not included).

I'm writing these instructions some time after I set this all up so I don't exactly remember everything. Yeah, writing a WordPress theme was fun. Feels like doing the sheep thing. I was surprised how easy it was actually.

It works by having a front page that loads all eligible posts as slides displayed in a frame. After going through all posts once it reloads itself. So it must maintain an internet connection. It includes a mechanism for a list of events (derived from individual slides) and a custom academic calender page (with it's own table of events).

It's designed for a 1280 x 720 display and is not responsive at all. If your display is a different resolution it will look completely wrong. The sizes are hard coded in the style.css and other php pages. They could be changed, yeah. Also, the (optional) footer takes up 120 pixels, so most pages are limited to 600 pixels height.

## Install

Install WordPress and everything it needs.

Put "DigitalDisplay" in /path/to/wp-content/themes/. So you should have /path/to/wp-content/themes/DigitalDisplay/index.php and all the other files.

This requires the following Plug-ins (ok, maybe it doesn't require all of them, but the plug-ins make it easier).

* Advanced Custom Fields
* Classic Editor
* Post Types Order

There's several custom fields. I expored them using Advanced Custom Fields -> Export as json and php. So they're included. I believe if you put everything in the php file into functions.php it will work (but then it isn't editible in the WordPress interface). I'm not sure how to use the json.

## Customize

Settings

* Edit your settings obviously, like WordPress Address, and Site Address.

Logo

* Upload logo to Media. Get the URL.
* In a text editor, edit functions.php and change $logo to the url abtained in the above step.

Footer messages

* Edit functions.php and search for the JavaScript variable footerList. Change as needed.

Custom Fields

* Before you import the custom fields, you should edit the data so that it looks the way you want. There's a list of event types and a list of event locations. There's also an email in there that is displayed to people who edit the slides. That is so they can email whoever can edit the custom fields.