<?php
/*
Plugin Name: Chitika RPU 4 WordPress
Plugin URI: http://bitsnbytes.hashout.org/downloads/wordpress/plugins/chitika-rpu-for-wordpress-plugin/
Description: A WordPress Plugin to help insert a fully customizable Chitika RPU. Don't forget to enter your Client ID.
Version: 0.9.1
Author: Aziz
Author URI: http://hashout.org/

    Copyright 2008 Aziz (email : hashout@gmail.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$default_ChitikaClientID = "demo";
$default_RPU_noprice = "1";
$default_RPU_shufflequeries = "1";
$default_RPU_Width = "400";
$default_RPU_Height = "90";
$default_RPU_AlternateCSSURL = "";
$default_RPU_color_bg = "";
$default_RPU_color_title = "";
$default_RPU_color_text = "";
$default_RPU_non_contextual = "1";
$default_RPU_nosearch = "1";
$default_RPU_default_category = "200001";
$default_RPU_font_title = "";
$default_RPU_font_text = "";
$default_RPU_sid = "";
$default_RPU_AlternateAdURL = "";
$default_RPU_queries = "";
$default_RPU_att = "";
$default_RPU_target = "";
$default_RPU_AutoAdd = "No";

function set_ChitikaRPU4WP_options () {
	global $default_ChitikaClientID;
	global $default_RPU_noprice;
	global $default_RPU_shufflequeries;
	global $default_RPU_Width;
	global $default_RPU_Height;
	global $default_RPU_AlternateCSSURL;
	global $default_RPU_color_bg;
	global $default_RPU_color_title;
	global $default_RPU_color_text;
	global $default_RPU_non_contextual;
	global $default_RPU_nosearch;
	global $default_RPU_default_category;
	global $default_RPU_font_title;
	global $default_RPU_font_text;
	global $default_RPU_sid;
	global $default_RPU_AlternateAdURL;
	global $default_RPU_queries;
	global $default_RPU_att;
	global $default_RPU_target;
	global $default_RPU_AutoAdd;

	add_option("ChitikaClientID",$default_ChitikaClientID,"Your Chitika Username");
	add_option("RPU_noprice",$default_RPU_noprice,"No Price?");
	add_option("RPU_shufflequeries",$default_RPU_shufflequeries,"Shuffle Keywords?");
	add_option("RPU_Width",$default_RPU_Width,"Width of the RPU");
	add_option("RPU_Height",$default_RPU_Height,"Height of the RPU");
	add_option("RPU_AlternateCSSURL",$default_RPU_AlternateCSSURL,"The URL of your alternate CSS file");
	add_option("RPU_color_bg",$default_RPU_color_bg,"Background Color");
	add_option("RPU_color_title",$default_RPU_color_title,"Title Color");
	add_option("RPU_color_text",$default_RPU_color_text,"Text Color");
	add_option("RPU_non_contextual",$default_RPU_non_contextual,"Non Contextual?");
	add_option("RPU_nosearch",$default_RPU_nosearch,"No Search?");
	add_option("RPU_default_category",$default_RPU_default_category,"Default Category");
	add_option("RPU_font_title",$default_RPU_font_title,"Title Font");
	add_option("RPU_font_text",$default_RPU_font_text,"Text Font");
	add_option("RPU_sid",$default_RPU_sid,"Channel");
	add_option("RPU_AlternateAdURL",$default_RPU_AlternateAdURL,"Alternate Ad URL");
	add_option("RPU_queries",$default_RPU_queries,"Keywords");
	add_option("RPU_att",$default_RPU_att,"Heading");
	add_option("RPU_target",$default_RPU_target,"Target Frame");
	add_option("RPU_AutoAdd",$default_RPU_AutoAdd,"Target Frame");
}
register_activation_hook(__FILE__,"set_ChitikaRPU4WP_options");

function unset_ChitikaRPU4WP_options () {
	delete_option("ChitikaClientID");
	delete_option("RPU_noprice");
	delete_option("RPU_shufflequeries");
	delete_option("RPU_Width");
	delete_option("RPU_Height");
	delete_option("RPU_AlternateCSSURL");
	delete_option("RPU_color_bg");
	delete_option("RPU_color_title");
	delete_option("RPU_color_text");
	delete_option("RPU_non_contextual");
	delete_option("RPU_nosearch");
	delete_option("RPU_default_category");
	delete_option("RPU_font_title");
	delete_option("RPU_font_text");
	delete_option("RPU_sid");
	delete_option("RPU_AlternateAdURL");
	delete_option("RPU_queries");
	delete_option("RPU_att");
	delete_option("RPU_target");
	delete_option("RPU_AutoAdd");
}
register_deactivation_hook(__FILE__,"unset_ChitikaRPU4WP_options");

function ChitikaRPU4WP_options () {
	echo '<div class="wrap"><h2>Chitika RPU Options</h2>';
	if ($_REQUEST['submit']) {
		update_ChitikaRPU4WP_options();
	}
	print_RPU_form();
	echo '</div>';
}

function update_ChitikaRPU4WP_options() {
	$updated = false;

	global $default_ChitikaClientID;
	global $default_RPU_noprice;
	global $default_RPU_shufflequeries;
	global $default_RPU_Width;
	global $default_RPU_Height;
	global $default_RPU_AlternateCSSURL;
	global $default_RPU_color_bg;
	global $default_RPU_color_title;
	global $default_RPU_color_text;
	global $default_RPU_non_contextual;
	global $default_RPU_nosearch;
	global $default_RPU_default_category;
	global $default_RPU_font_title;
	global $default_RPU_font_text;
	global $default_RPU_sid;
	global $default_RPU_AlternateAdURL;
	global $default_RPU_queries;
	global $default_RPU_att;
	global $default_RPU_target;
	global $default_RPU_AutoAdd;

	if ($_REQUEST['ChitikaClientID']) { update_option('ChitikaClientID', $_REQUEST['ChitikaClientID']); }
	else { update_option('ChitikaClientID', $default_ChitikaClientID); }

	if ($_REQUEST['RPU_noprice']) { update_option('RPU_noprice', $_REQUEST['RPU_noprice']); }
	else { update_option('RPU_noprice', $default_RPU_noprice); }

	if ($_REQUEST['RPU_shufflequeries']) { update_option('RPU_shufflequeries', $_REQUEST['RPU_shufflequeries']); }
	else { update_option('RPU_shufflequeries', $default_RPU_shufflequeries); }

	if ($_REQUEST['RPU_Width']) { update_option('RPU_Width', $_REQUEST['RPU_Width']); }
	else { update_option('RPU_Width', $default_RPU_Width); }

	if ($_REQUEST['RPU_Height']) { update_option('RPU_Height', $_REQUEST['RPU_Height']); }
	else { update_option('RPU_Height', $default_RPU_Height); }

	if ($_REQUEST['RPU_AlternateCSSURL']) { update_option('RPU_AlternateCSSURL', $_REQUEST['RPU_AlternateCSSURL']); }
	else { update_option('RPU_AlternateCSSURL', $default_RPU_AlternateCSSURL); }

	if ($_REQUEST['RPU_color_title']) { update_option('RPU_color_title', $_REQUEST['RPU_color_title']); }
	else { update_option('RPU_color_title', $default_RPU_color_title); }

	if ($_REQUEST['RPU_color_text']) { update_option('RPU_color_text', $_REQUEST['RPU_color_text']); }
	else { update_option('RPU_color_text', $default_RPU_color_text); }

	if ($_REQUEST['RPU_non_contextual']) { update_option('RPU_non_contextual', $_REQUEST['RPU_non_contextual']); }
	else { update_option('RPU_non_contextual', $default_RPU_non_contextual); }

	if ($_REQUEST['RPU_nosearch']) { update_option('RPU_nosearch', $_REQUEST['RPU_nosearch']); }
	else { update_option('RPU_nosearch', $default_RPU_nosearch); }

	if ($_REQUEST['RPU_default_category']) { update_option('RPU_default_category', $_REQUEST['RPU_default_category']); }
	else { update_option('RPU_default_category', $default_RPU_default_category); }

	if ($_REQUEST['RPU_font_title']) { update_option('RPU_font_title', $_REQUEST['RPU_font_title']); }
	else { update_option('RPU_font_title', $default_RPU_font_title); }

	if ($_REQUEST['RPU_font_text']) { update_option('RPU_font_text', $_REQUEST['RPU_font_text']); }
	else { update_option('RPU_font_text', $default_RPU_font_text); }

	if ($_REQUEST['RPU_sid']) { update_option('RPU_sid', $_REQUEST['RPU_sid']); }
	else { update_option('RPU_sid', $default_RPU_sid); }

	if ($_REQUEST['RPU_AlternateAdURL']) { update_option('RPU_AlternateAdURL', $_REQUEST['RPU_AlternateAdURL']); }
	else { update_option('RPU_AlternateAdURL', $default_RPU_AlternateAdURL); }

	if ($_REQUEST['RPU_queries']) { update_option('RPU_queries', stripslashes($_REQUEST['RPU_queries'])); }
	else { update_option('RPU_queries', $default_RPU_queries); }

	if ($_REQUEST['RPU_att']) { update_option('RPU_att', $_REQUEST['RPU_att']); }
	else { update_option('RPU_att', $default_RPU_att); }

	if ($_REQUEST['RPU_target']) { update_option('RPU_target', $_REQUEST['RPU_target']); }
	else { update_option('RPU_target', $default_RPU_target); }

	if ($_REQUEST['RPU_AutoAdd']) { update_option('RPU_AutoAdd', $_REQUEST['RPU_AutoAdd']); }
	else { update_option('RPU_AutoAdd', $default_RPU_AutoAdd); }

	$updated = true;

	if ($updated) {
		echo '<div id="message" class="updated fade">';
		echo '<p>Options Updated</p>';
		echo '</div>';
	} else {
		echo '<div id="message" class="error fade">';
		echo '<p>Unable to update options</p>';
		echo '</div>';
	}
}

function print_RPU_form () {
	$ChitikaClientID = get_option('ChitikaClientID');
	$RPU_noprice = get_option('RPU_noprice');
	$RPU_shufflequeries = get_option('RPU_shufflequeries');
	$RPU_Width = get_option('RPU_Width');
	$RPU_Height = get_option('RPU_Height');
	$RPU_AlternateCSSURL = get_option('RPU_AlternateCSSURL');
	$RPU_color_bg = get_option('RPU_color_bg');
	$RPU_color_title = get_option('RPU_color_title');
	$RPU_color_text = get_option('RPU_color_text');
	$RPU_non_contextual = get_option('RPU_non_contextual');
	$RPU_nosearch = get_option('RPU_nosearch');
	$RPU_default_category = get_option('RPU_default_category');
	$RPU_font_title = get_option('RPU_font_title');
	$RPU_font_text = get_option('RPU_font_text');
	$RPU_sid = get_option('RPU_sid');
	$RPU_AlternateAdURL = get_option('RPU_AlternateAdURL');
	$RPU_queries = get_option('RPU_queries');
	$RPU_att = get_option('RPU_att');
	$RPU_target = get_option('RPU_target');
	$RPU_AutoAdd = get_option('RPU_AutoAdd');
	echo <<<EOF
<style>
#ChitikaRPU4WPOptionsForm label {display:block;width:500px;margin-top:1em;text-align:right;}
#ChitikaRPU4WPOptionsForm label input {width:300px;}
.ChitikaRPU4WPtip {padding-left:200px;color:green;text-align:left;}
</style>
<form method="post" id="ChitikaRPU4WPOptionsForm" >
	<fieldset>
	<h3>Default Settings</h3>
	<label>Client ID
		<input type="text" name="ChitikaClientID" value="$ChitikaClientID" />
		<div class="ChitikaRPU4WPtip">If you don't have a Chitika account, <a target="_blank" href="http://hashout.org/to/chitika/">sign up</a> for one.</div>
	</label>
	<label>Channel Tracking
		<input type="text" name="RPU_sid" value="$RPU_sid" />
	</label>
	<label>Alternate Ad URL
		<input type="text" name="RPU_AlternateAdURL" value="$RPU_AlternateAdURL" />
	</label>
	<label>Target Frame/Window
		<input type="text" name="RPU_target" value="$RPU_target" />
		<div class="ChitikaRPU4WPtip">Use <b>_blank</b> to open links in a new window<br/>(Chitika doesn't recommend it though).</div>
	</label>
	<label>Add code automagically
		<input type="text" name="RPU_AutoAdd" value="$RPU_AutoAdd" />
		<div class="ChitikaRPU4WPtip">
If set to any of the following values, adds the RPU code automatically
<ul>
	<li><b>%All%</b> - On all pages including home, posts, static pages and archives.</li>
	<li><b>%Posts%</b> - On post pages</li>
	<li><b>%Pages%</b> - On static pages</li>
	<li><b>%Home%</b> - On the home page</li>
	<li><b>%Archives%</b> - On archive pages</li>
	<li><b>%Search%</b> - On search pages (provided your theme displays the post content on search pages)</li>
</ul>
You can include more than one of the above options. For example if you want to display the RPU on posts and static pages just enter <b>%Posts%Pages%</b>. It can be in any order.
		</div>
	</label>
	<fieldset id="ChitikaRPU4WPOptionsFormatting"><legend>Formatting</legend>
	<label>Width
		<input type="text" name="RPU_Width" value="$RPU_Width" />
	</label>
	<label>Height
		<input type="text" name="RPU_Height" value="$RPU_Height" />
		<div class="ChitikaRPU4WPtip">Note that the width, and height has to be on <a target="_blank" href="http://chitika.com/ad-formats.php">this list</a>, or else the RPU will not show up.</div>
	</label>
	<label>Alternate CSS URL
		<input type="text" name="RPU_AlternateCSSURL" value="$RPU_AlternateCSSURL" />
		<div class="ChitikaRPU4WPtip">For help using this feature, refer to <a target="_blank" href="http://chitika.com/support/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=115">this Knowledgebase article</a>.</div>
	</label>
	<label>Heading
		<input type="text" name="RPU_att" value="$RPU_att" />
		<div class="ChitikaRPU4WPtip">Use this to customize the heading to say something other than "Related Products:". You can also remove the heading using a blank space. Although Chitika doesn't recommend it.</div>
	</label>
	<label>Background Color
		<input type="text" name="RPU_color_bg" value="$RPU_color_bg" />
	</label>
	<label>Title Color
		<input type="text" name="RPU_color_title" value="$RPU_color_title" />
	</label>
	<label>Text Color
		<input type="text" name="RPU_color_text" value="$RPU_color_text" />
	</label>
	<label>Title Font
		<input type="text" name="RPU_font_title" value="$RPU_font_title" />
	</label>
	<label>Text Font
		<input type="text" name="RPU_font_text" value="$RPU_font_text" />
	</label>
	<label>No Bullets?
		<input type="text" name="RPU_nosearch" value="$RPU_nosearch" />
	</label>
	<label>No Price?
		<input type="text" name="RPU_noprice" value="$RPU_noprice" />
	</label>
	<label>Shuffle Queries?
		<input type="text" name="RPU_shufflequeries" value="$RPU_shufflequeries" />
	</label>
	</fieldset>
	<fieldset id="ChitikaRPU4WPOptionsContext"><legend>Context</legend>
	<label>Non Contextual?
		<input type="text" name="RPU_non_contextual" value="$RPU_non_contextual" />
	</label>
	<label>Default Category
		<input type="text" name="RPU_default_category" value="$RPU_default_category" />
		<div class="ChitikaRPU4WPtip">Default is "Seasonal Specials". To change, get the numeric category code from <a target="_blank" href="http://chitika.com/categories.php">here</a>.</div>
	</label>
	<label>Keywords
		<input type="text" name="RPU_queries" value='$RPU_queries' />
		<div class="ChitikaRPU4WPtip">You can use any of the following options
<ul>
<li><b>%post_title%</b> - To use the post title as a keyword</li>
<li><b>%post_tags%</b> - To use the post tags as keywords</li>
<li><b>%post_categories%</b> - To use the post categories as keywords</li>
</ul>
In order to use more than one of the above options, separate them with a comma. You can also directly insert keywords here. For example if you want to use the post title and post tags as keywords along with "chocolate" and "flowers" Just enter it as follows:<br/>
<b>%post_title%, %post_tags%, "chocolate", "flowers"</b><br/>
Don't forget the double quotes.
		</div>
	</label>
	</fieldset>
	<br />
	<input type="submit" name="submit" value="Submit" />
	</fieldset>
</form>
EOF;
}

function modify_menu_for_ChitikaRPU4WP () {
     add_options_page(
                      'Chitika RPU',		//Title
                      'Chitika RPU 4 WP',		//Sub-menu title
                      'manage_options',		//Security
                      __FILE__,			//File to open
                      'ChitikaRPU4WP_options'	//Function to call
                     );  
}
add_action('admin_menu','modify_menu_for_ChitikaRPU4WP');

function getCategories4ChitikaRPU() {
	$returnstring = "";
	$cats = get_the_category();
	if ($cats) {
		$num = count($cats);
		for($i=0; $i<$num; $i++) {
			$cat=$cats[$i];
			$returnstring = $returnstring . '"' . $cat->cat_name . '"';
			if ($i != $num-1) { $returnstring = $returnstring . ', '; }
		}
	}
	return $returnstring;
}

function getTags4ChitikaRPU() {
	$returnstring = "";
	$tags = get_the_tags();
	if ($tags) {
		$i=0;
		$num = count($tags);
		foreach($tags as $tag) {
			$returnstring = $returnstring . '"' . $tag->name . '"';
			if ($i != $num-1) { $returnstring = $returnstring . ', '; }
			$i++;
		}
	}
	return $returnstring;
}

function getChitikaRPUCode(
	$RPU_sid = "",
	$RPU_queries = "",
	$RPU_default_category = "",
	$RPU_AlternateAdURL = "",
	$RPU_att = "",
	$RPU_nosearch = "",
	$RPU_noprice = "",
	$RPU_AlternateCSSURL = "",
	$RPU_Width = "",
	$RPU_Height = "",
	$RPU_color_bg = "",
	$RPU_color_title = "",
	$RPU_color_text = "",
	$RPU_font_title = "",
	$RPU_font_text = "",
	$RPU_shufflequeries = "",
	$RPU_target = "",
	$RPU_non_contextual = "",
	$ChitikaClientID = ""
	) {
	if ($ChitikaClientID == "") { $ChitikaClientID = get_option('ChitikaClientID'); }
	if ($RPU_noprice == "") { $RPU_noprice = get_option('RPU_noprice'); }
	if ($RPU_shufflequeries == "") { $RPU_shufflequeries = get_option('RPU_shufflequeries'); }
	if ($RPU_Width == "") { $RPU_Width = get_option('RPU_Width'); }
	if ($RPU_Height == "") { $RPU_Height = get_option('RPU_Height'); }
	if ($RPU_AlternateCSSURL == "") { $RPU_AlternateCSSURL = get_option('RPU_AlternateCSSURL'); }
	if ($RPU_color_bg == "") { $RPU_color_bg = get_option('RPU_color_bg'); }
	if ($RPU_color_title == "") { $RPU_color_title = get_option('RPU_color_title'); }
	if ($RPU_color_text == "") { $RPU_color_text = get_option('RPU_color_text'); }
	if ($RPU_non_contextual == "") { $RPU_non_contextual = get_option('RPU_non_contextual'); }
	if ($RPU_nosearch == "") { $RPU_nosearch = get_option('RPU_nosearch'); }
	if ($RPU_default_category == "") { $RPU_default_category = get_option('RPU_default_category'); }
	if ($RPU_font_title == "") { $RPU_font_title = get_option('RPU_font_title'); }
	if ($RPU_font_text == "") { $RPU_font_text = get_option('RPU_font_text'); }
	if ($RPU_sid == "") { $RPU_sid = get_option('RPU_sid'); }
	if ($RPU_AlternateAdURL == "") { $RPU_AlternateAdURL = get_option('RPU_AlternateAdURL'); }
	if ($RPU_queries == "") { $RPU_queries = get_option('RPU_queries'); }
	if ($RPU_att == "") { $RPU_att = get_option('RPU_att'); }
	if ($RPU_target == "") { $RPU_target = get_option('RPU_target'); }
	$RPU_queries = str_replace('%post_title%', '"'.get_the_title().'"', $RPU_queries);
	$RPU_queries = str_replace('%post_tags%', getTags4ChitikaRPU(), $RPU_queries);
	$RPU_queries = str_replace('%post_categories%', getCategories4ChitikaRPU(), $RPU_queries);
	$RPU_queries = str_replace('  ', ' ', $RPU_queries);
	$RPU_queries = str_replace('" "', '", "', $RPU_queries);
	$RPU_queries = str_replace('""', '", "', $RPU_queries);
	$RPU_queries = str_replace(', ,', ', ', $RPU_queries);
	$RPU_queries = str_replace(',,', ', ', $RPU_queries);
	$RPU_queries = trim($RPU_queries," ,abcdefghijklmnopqrstuvwxyz1234567890`~!@#$%^&*()[]{}_-=+|'/,;:.?<>");
	$RPU_Code = '
<script type="text/javascript"><!--
ch_client = "'.$ChitikaClientID.'";
ch_type = "rpu";
ch_noprice = "'.$RPU_noprice.'";
ch_shufflequeries = '.$RPU_shufflequeries.';
ch_width = '.$RPU_Width.';
ch_height = '.$RPU_Height.';
ch_alternate_css_url = "'.$RPU_AlternateCSSURL.'";
ch_color_bg = "'.$RPU_color_bg.'";
ch_color_title = "'.$RPU_color_title.'";
ch_color_text = "'.$RPU_color_text.'";
ch_non_contextual = '.$RPU_non_contextual.';
ch_nosearch = '.$RPU_nosearch.';
ch_default_category = "'.$RPU_default_category.'";
ch_font_title = "'.$RPU_font_title.'";
ch_font_text = "'.$RPU_font_text.'";
ch_sid = "'.$RPU_sid.'";
ch_target = "'.$RPU_target.'";
ch_att = "'.$RPU_att.'";
ch_alternate_ad_url = "'.$RPU_AlternateAdURL.'";
var ch_queries = new Array( '.$RPU_queries.' );
var ch_selected=Math.floor((Math.random()*ch_queries.length));
if ( ch_selected < ch_queries.length ) {
ch_query = ch_queries[ch_selected];
}
//--></script>
<script  src="http://scripts.chitika.net/eminimalls/mm.js" type="text/javascript"></script>';
	return $RPU_Code;
}

function writeChitikaRPUCode(
	$RPU_sid = "",
	$RPU_queries = "",
	$RPU_default_category = "",
	$RPU_AlternateAdURL = "",
	$RPU_att = "",
	$RPU_nosearch = "",
	$RPU_noprice = "",
	$RPU_AlternateCSSURL = "",
	$RPU_Width = "",
	$RPU_Height = "",
	$RPU_color_bg = "",
	$RPU_color_title = "",
	$RPU_color_text = "",
	$RPU_font_title = "",
	$RPU_font_text = "",
	$RPU_shufflequeries = "",
	$RPU_target = "",
	$RPU_non_contextual = "",
	$ChitikaClientID = ""
	) {
	echo getChitikaRPUCode(
	$RPU_sid,
	$RPU_queries,
	$RPU_default_category,
	$RPU_AlternateAdURL,
	$RPU_att,
	$RPU_nosearch,
	$RPU_noprice,
	$RPU_AlternateCSSURL,
	$RPU_Width,
	$RPU_Height,
	$RPU_color_bg,
	$RPU_color_title,
	$RPU_color_text,
	$RPU_font_title,
	$RPU_font_text,
	$RPU_shufflequeries,
	$RPU_target,
	$RPU_non_contextual,
	$ChitikaClientID
	);
}

function AutoAddChitikaRPUCode($content) {
	if	(  (strchr(get_option('RPU_AutoAdd'),'%All%'))
		|| (strchr(get_option('RPU_AutoAdd'),'%Pages%') && is_page())
		|| (strchr(get_option('RPU_AutoAdd'),'%Posts%') && is_single())
		|| (strchr(get_option('RPU_AutoAdd'),'%Home%') && is_home())
		|| (strchr(get_option('RPU_AutoAdd'),'%Archives%') && is_archive())
		|| (strchr(get_option('RPU_AutoAdd'),'%Search%') && is_search())
		) {
		return $content.getChitikaRPUCode();
	}
	else {
		return $content;
	}
}
add_filter('the_content', 'AutoAddChitikaRPUCode');

function widget_ChitikaRPU4WP_init() {

	function widget_ChitikaRPU4WP($args) {
		extract($args);
	?>
		<?php echo $before_widget; ?>
			<?php echo $before_title . $after_title; ?>
			<?php if (function_exists('writeChitikaRPUCode')) { writeChitikaRPUCode(); } ?>
		<?php echo $after_widget; ?>
	<?php
	}
	if (function_exists('register_sidebar_widget')) register_sidebar_widget('Chitika RPU 4 WP', 'widget_ChitikaRPU4WP');
}
add_action('plugins_loaded', 'widget_ChitikaRPU4WP_init');

?>