<?php

/*

  reCAPTCHA for Salon Booking System to protect from spam abuse.
  Copyright (C) 2019  M. van Etten

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, version 3 of the License, or
  any later version..

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <https://www.gnu.org/licenses/>.

*/

/* add submenu to admin menu and render options on option page */
add_action( 'admin_menu', 'rfsbs_recaptcha_admin_menu' );
add_action("admin_init", "rfsbs_recaptcha_display_options");


/*
 function : rfsbs_recaptcha_admin_menu
 description : add submenu page to third party plugin 
 parameters : 
 return : void
*/  
function rfsbs_recaptcha_admin_menu(  ) {
    add_submenu_page( 'salon', 'reCAPTCHA','reCAPTCHA', 'manage_options', 'rfsbs-recaptcha-addon-settings', 'rfsbs_recaptcha_addon_settings_page' );
}


/*
 function : rfsbs_recaptcha_addon_settings_page
 description : setting page to add sitekey and privatekey
 parameters : 
 return : void
*/  
function rfsbs_recaptcha_addon_settings_page(){
	if(!current_user_can('manage_options')){
		wp_die(__('You do not have sufficient permissions to access this page.'));
	}
	?>
	<div class="wrap">
		<h1>reCAPTCHA for Salon Booking System (Add-On)</h1>
		<p>reCAPTCHA is built for security. Armed with state of the art technology, reCAPTCHA is always at the forefront of spam and abuse fighting trends so it can provide you an unparalleled view into abusive traffic on your site.</p>
		<h2>Jump Start</h2>
		<p>Make sure you have a Google Account</p>
		<p>Step 1 : Register a new site on <a target="_blank" href='https://www.google.com/recaptcha/admin/create'>reCAPTCHA Google Admin Console</a></p>
		<p>Step 2 : Enter a label for your reCAPTCHA site.</p>
		<p>Step 3 : Select reCAPTCHA <b>version 2</b> and select <b>Invisible reCAPTCHA-badge</b></p>
		<p>Step 4 : Enter the domainname of the site you working on.</p>
		<p>Step 5 : Agree with the terms and submit the form</p>
		<p>Step 6 : Copy and Paste the private/site key in this form below.</p>
		<p>Step 7 : Thats it.</p>
		<form method="post" action="options.php">
                <?php
               
                    //add_settings_section callback is displayed here. For every new section we need to call settings_fields.
                    settings_fields("header_section");
                   
                    // all the add_settings_field callbacks is displayed here
                    do_settings_sections("recaptcha-options");
               
                    // Add the submit button to serialize the options
                    submit_button();
                   
                ?>         
		</form>
	</div>
	<?php
}


/*
 function : rfsbs_recaptcha_display_options
 description : add section, settings field and register settings.
 parameters : 
 return : void
*/
function rfsbs_recaptcha_display_options(){
	add_settings_section("header_section", "reCAPTCHA Settings", "rfsbs_recaptcha_display_header_options_content", "recaptcha-options");
    add_settings_field("rfsbs_recaptcha_sitekey", "SiteKey", "rfsbs_recaptcha_display_sitekey_form_element", "recaptcha-options", "header_section");
    add_settings_field("rfsbs_recaptcha_privatekey", "PrivateKey", "rfsbs_recaptcha_display_privatekey_form_element", "recaptcha-options", "header_section");
	
	$args = array('type' => 'string','sanitize_callback' => 'sanitize_text_field','default' => NULL);
    register_setting("header_section", "rfsbs_recaptcha_sitekey", $args);
    register_setting("header_section", "rfsbs_recaptcha_privatekey", $args);
}


/*
 function : rfsbs_recaptcha_display_header_options_content
 description : placeholder for element fields.
 parameters : 
 return : void
*/
function rfsbs_recaptcha_display_header_options_content(){
	echo "";
}


/*
 function : rfsbs_recaptcha_display_sitekey_form_element
 description : renders a input field for sitekey element
 parameters : 
 return : void
*/
function rfsbs_recaptcha_display_sitekey_form_element(){
	?>
            <input size=40 type="text" name="rfsbs_recaptcha_sitekey" id="rfsbs_recaptcha_sitekey" value="<?php echo sanitize_text_field(get_option('rfsbs_recaptcha_sitekey')); ?>" />
	<?php
}


/*
 function : rfsbs_recaptcha_display_privatekey_form_element
 description : renders a input field for privatekey element
 parameters : 
 return : void
*/
function rfsbs_recaptcha_display_privatekey_form_element(){
	?>
		<input size=40 type="text" name="rfsbs_recaptcha_privatekey" id="rfsbs_recaptcha_privatekey" value="<?php echo sanitize_text_field(get_option('rfsbs_recaptcha_privatekey')); ?>" />
	<?php
}    