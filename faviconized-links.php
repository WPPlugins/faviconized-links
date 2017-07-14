<?php
/* 
Plugin Name: Faviconized Links
Plugin URI: http://wp.linkzone.ro/
Author: Madalin F. 
Author URI: http://wp.linkzone.ro/
Description: Add the favicon of the domain next to your external link in post and page body.
Version: 0.1
Change Log: 
2012-07-29  0.1:
First release
 */

add_action('admin_menu', 'my_menu');

function my_menu() {
    add_menu_page('Faviconized Links', 'Faviconized', 'administrator', 'faviconized-administration', 'faviconized_options', 'http://wp.linkzone.ro/favicon.ico');
}

function faviconized_options() {
		echo '<h1>Faviconized Links</h1>';
		echo '<p>This plugin will palace the favicon of the URL next to your URL inside the posts and pages.</p>';
		
		echo'Please visit <a href="http://wp.linkzone.ro" id ="flhp">Faviconized Links Home Page</a> for more details.';
		echo'<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="AAHNWWTQXV2BS">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online."><img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1"></form></p>';

	
}


function faviconized_js(){ 	
	echo '
<script type="text/javascript">

jQuery("#content a[href^=\'http\']").each(function() {
	if (document.location.hostname != this.hostname){
		jQuery(this).css({
			background: "url(http://www.google.com/s2/u/0/favicons?domain=" + this.hostname + ") left center no-repeat",
			"padding-left": "20px"
		});
	}

});

</script>';


}

add_action('wp_footer', 'faviconized_js');

?>