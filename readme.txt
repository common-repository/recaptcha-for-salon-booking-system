=== reCAPTCHA for Salon Booking System  ===
Contributors: mvetten
Tags: recaptcha, spam, booking, salon booking system, reservations, barber shop, hair salon, beauty center, spas, scheduling, appointment, availability calendar, booking calendar, online reservation, schedule, paypal appointament, appointament calendar, booking software, reservation plugin, booking engine, booking plugin
Requires at least: 4.9
Requires PHP: 5.6
Tested up to: 5.2.3
Stable tag: 1.0.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Adds reCAPTCHA for Salon Booking System to protect from spam abuse.

== Description ==

reCAPTCHA for Salon Booking System is a plugin that brings recaptcha functionality to Salon Booking System.

Before using this plugin, make sure you have Salon Booking System version 3 (or newer) installed. You can download
Salon Booking System from the plugin repository [Salon Booking System](https://wordpress.org/plugins/salon-booking-system/)

Once installed you can download and install this plugin. 

== The Source ==

No surprises. You can lookup the source any time on Github. 

* [GitHub](https://github.com/mvanetten/recaptcha-for-salon-booking-system)

== Upgrade Notice ==
Please make sure you have a backup of your Wordpress site before installing or upgrading this plugin.

== Installation ==

* [Salon Booking System version 3](https://wordpress.org/plugins/salon-booking-system/) is required to work with this plugin.
* Make sure you have a Google Account.
* Install and activate this (reCAPTCHA for Salon Booking System) plugin

The steps

1. Register a (new) site on https://www.google.com/recaptcha/admin/create (reCAPTCHA Google Admin Console)
1. Enter a label for your reCAPTCHA site.
1. Select reCAPTCHA version 2 and select Invisible reCAPTCHA-badge
1. Enter the domainname of the site you working on.
1. Agree with the terms and submit the form.
1. Copy the private and site key.
1. Go to Wordpress Admin. In the admin menu click: Salon -> reCAPTCHA 
1. Paste your keys in here.
1. Submit the form to save the private/site keys. Thats it.

Once completed this steps, your users should see a recaptcha logo in the booking summary page. 

== Frequently Asked Questions ==

= Will this plugin work with Version 3 keys? =

No. Google reCAPTCHA has specific keys for each API. 

= Where do I add my Version 2 keys? =

In WordPress admin you click on Salon -> reCAPTCHA. You see a page where you can add the keys. See also screenshot 1. 

= I've added the Version 2 keys but nothing has changed =

If you have added the Version 2 keys and you still do not see the reCaptcha show up on your booking summary form please check the following:

1. In WordPress admin, under Salon -> reCAPTCHA make sure you see a private/site key. 
1. On https://www.google.com/recaptcha/admin/ make sure you entered the correct domainname of your wordpres site.
1. On https://www.google.com/recaptcha/admin/ make sure you have selected "invisible recaptcha"
1. On https://www.google.com/recaptcha/admin/ make sure you have selected "Version 2"

Should the above be correct please leave a message in the form.

== Screenshots ==

1. Settings page

== Changelog ==

= 1.0.4 (2019-09-23) =
* Ready for release

= 1.0.3 (2019-09-23) =
* sanitize user data 

= 1.0.2 (2019-09-23) =

* utilize wp_remote_post function to retrieve json object from google servers.

= 1.0.1 (2019-09-20) =

* Removed version check of Salon Booking System plugin.
* Created a readme file.

= 1.0.0 (2019-09-19) =

* First version for evaluation.