=== reCAPTCHA for WooCommerce ===
Contributors: ElliotVS, RelyWP
Tags: recaptcha,woocommerce,checkout,spam,protect
Requires at least: 4.7
Tested up to: 6.0.2
Stable Tag: 1.1.2
License: GPLv3 or later.
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Add Google reCAPTCHA to your WooCommerce Checkout, Login, and Registration Forms.

== Description ==

Easily add Google reCAPTCHA to WooCommerce checkout and forms to help prevent spam.

## Supported Forms ##

You can currently enable the reCAPTCHA on the following forms:

- WooCommerce Checkout
- WooCommerce Login Form
- WooCommerce Registration Form
- WooCommerce Password Reset Form

## Getting Started ##

Simply generate your Google reCAPTCHA v2 site "key" and "secret" and add these to the settings.

Choose which forms you want it to show on, and set the theme to either dark or light.

A new reCAPTCHA WooCommerce field will then be displayed on your checkout, and other selected forms to protect them from spam!

## Localisation ##

The language for the WooCommerce reCAPTCHA will be automatically set based on your sites default language.

== Installation ==

1. Upload 'recaptcha-woo' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Customise plugin settings in WordPress admin at Settings > reCAPTCHA WooCommerce

== Screenshots ==

1. Example reCAPTCHA on the My Account Page
2. Example reCAPTCHA on the Checkout Page

== Changelog ==

= Version 1.1.2 - 11th October 2022 =
- New: Added language detection for the captcha, so it will now show in the "Site Language" instead of just English.

= Version 1.1.1 - 10th October 2022 =
- Fix: Fixed issue with reCAPTCHA not loading on checkout in some cases since last update.

= Version 1.1.0 - 10th October 2022 =
- New: Enable reCAPTCHA on WooCommerce Login, Register and Password Reset forms.
- Other: Tested with WooCommerce 6.9.4