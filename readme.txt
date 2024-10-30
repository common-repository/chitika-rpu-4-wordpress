=== Chitika RPU 4 WordPress ===
Contributors: hashout
Donate link: http://hashout.org/to/donate/wp
Tags: chitika, rpu, related products unit, related products, related product unit, related product, related
Requires at least: 2.3
Tested up to: 2.3.3
Stable tag: trunk

This plugin lets you insert the Chitika RPU into your blog instantly. It also gives you the flexibility to position the RPU in the desired location.

== Description ==

This simple WordPress Plugin lets you insert the Chitika RPU (Related Product Unit) into your WordPress blog instantly without any hassles. It can also give you the flexibility to position your RPU in the desired location.

I have created this plugin using WordPress 2.3.3. If you have successfully
installed and used this plugin on any other version of WordPress, please do [let me know](http://hashout.org/contact). You can also use this contact form to report bugs and give suggestions. Please mention "Reg. Chitika RPU 4 WordPress Plugin" in the subject line.

== Change Log ==

* 0.9 -	Initial release
* 0.9.1 -	Added simple widget capability
	Fixed minor bug with updating options on the options page.
	Fixed bug with entering double quotes in keywords field on options page.

== Installation ==

1. Unzip/Extract `ChitikaRPU4WP.php`
1. Upload `ChitikaRPU4WP.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Set the default options for your RPU through the **Options > Chitika RPU 4 WP** menu in Wordpress.

== Adding an RPU ==

You can add the Chitika RPU code to your blog in one of three ways.

The first method is very simple and does not require you to change any part
of your template files. Just go to the "Chitika RPU 4 WP" Options page and
enter the appropriate option in the "Add code automagically" input box. The
RPU code will be automatically added to the end of the post content on the
required pages.

The second method to add the Chitika RPU is using the widget. Just go to
Presentation > Widgets, drag and drop the Chitika RPU 4 WP widget on to
the desired sidebar. At present all options will have to be set from the options
page. For this widget it is desirable to have a sidebar after the post.

The third method requires you to enter the following piece of PHP code into
your template files. This gives you the flexibility to place the RPU code in
your desired location.

`<?php if (function_exists('writeChitikaRPUCode')) { writeChitikaRPUCode(); } ?>`

As you can see, we are using a function, writeChitikaRPUCode(), to echo the
RPU code. This function accepts 19 string parameters which I have listed
below in the order in which they are accepted. All these parameters are
optional. If you want you can set all these parameters from the options page
and just insert this function without any parameters within your template.
If you use any of these parameters, don't forget to enclose strings within
single quotes.

**List of Parameters**

1. Channel Tracking

1. Keywords - You can even use the option strings available below the
              keyword field on the options page.

1. Default Category - By default it is set to 200001 (Seasonal Specials). 
		      To change, get the numeric category code from
		      http://chitika.com/categories.php.

1. Alternate ad URL - In case there are no ads to display from Chitika.

1. Title Text -	Use this to customize the title to say something other than
		"Related Products:". You can also remove the heading
		using ' ' (a blank space within single quotes). Although
		Chitika doesn't recommend it.

1. Hide bullets - Accepts '1' as yes or '0' as no.

1. Hide price - Accepts '1' as yes or '0' as no.

1. Alternate CSS URL -	For help using this feature, refer to this Knowledgebase
   			article - http://chitika.com/support/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=115.

1. Width of the RPU

1. Height of the RPU

   Note that the width, and height has to be on this list,
   or else the RPU will not show up.

1. Background Color

1. Title Color

1. Text Color

1. Title Font

1. Text Font

1. Shuffle Queries - Accepts '1' as yes or '0' as no.

1. Target Frame or Window - To open links in a different frame or window.
			     Use '_blank' to open links in a new window
			     (Chitika doesn't recommend it though).

1. Non contextual - Accepts '1' as yes or '0' as no.

1. Chitika Client ID - Your chitika username.

**Examples**

`<?php if (function_exists('writeChitikaRPUCode')) { writeChitikaRPUCode('My Blog RPU'); } ?>`

`<?php if (function_exists('writeChitikaRPUCode')) { writeChitikaRPUCode(get_bloginfo('name').' RPU',get_the_title().', %post_tags%, "chocolate", "flowers"','7185','','Related Items:','','','http://yourdomain.tld/pathtoyourcssfile.css','','','#000000','#FFFFFF','#CCCCCC','Georgia','Arial','','_top'); } ?>`

== Frequently Asked Questions ==

= Can I customize the text to say something other than "Related Products"? =

Yes. Just enter the text you want to be displayed as the title in the **Heading** input box on the options page. Alternatively you can pass the text as the fifth parameter to the writeChitikaRPUCode() function.

= Can I remove the text that says "Related Products"? =

Yes. Although Chitika does not recommend it. Just enter a blank space in the **Heading** input box. Alternatively you can pass a blank space within single quotes as the fifth parameter to the writeChitikaRPUCode() function.

= Can I have the links open in a different frame or new window? =

Yes. Although Chitika does not recommend it. Just enter then name of the frame or window in the **Target Frame/Window** input box. Enter "_blank" to open links in a new window. Alternatively you can pass the name of the frame or window within single quotes as the seventeenth parameter to the writeChitikaRPUCode() function.

= Can I control on what kind of pages the RPU is displayed? =

Yes. Using the options page you can set the RPU to be displayed on any or all of the following pages: Home Page, Post Pages, Static Pages, Archive Pages & Search Pages. Alternatively you can insert the writeChitikaRPUCode() function, whereever you want the RPU to be displayed, in your template files.

== Screenshots ==

1. A screen shot of the options (Options > Chitika RPU 4 WP) page.