=== WP Encryption - One Click Free SSL Certificate & SSL / HTTPS Redirect to fix Insecure Content ===
Contributors: gowebsmarty, gwsharsha, freemius
Tags: ssl,https,https redirect,ssl certificate,free ssl,force https,mixed content,insecure content,enable https,install ssl
Requires at least: 4.2
License: GPL3
Tested up to: 6.0
Requires PHP: 5.4
Stable tag: 5.7.20

SSL for lifetime - Install free SSL certificate & enable secure HTTPS padlock, secure mail w/ HTTPS, HTTPS redirect, fix SSL errors, SSL score, insecure content scanner, download SSL certificate, know your active SSL details.

== Description ==

SSL for lifetime - Generate free Let's Encrypt SSL certificate for your WordPress site and force SSL / HTTPS sitewide, check your SSL score, fix insecure content & mixed content issues easily. Enable HTTPS secure padlock on your site within minutes.

Secure your WordPress site with SSL certificate provided by [Let's Encrypt®](https://letsencrypt.com). [WP Encryption](https://wpencryption.com/?utm_source=wordpress&utm_medium=description&utm_campaign=wpencryption) plugin registers your site, verifies your domain, generates SSL certificate for your site in simple mouse clicks without the need of any technical knowledge. 

A typical SSL installation without WP Encryption would require you to generate CSR, prove domain ownership, provide your bussiness data and deal with many more technical tasks!.

### 1M+ SSL certificates generated -- Switch to HTTPS easily ###

https://youtu.be/aKvvVlAlZ14

= REQUIREMENTS =
PHP 5.4 & tested upto PHP 8.0, Linux hosting, OpenSSL, CURL, allow_url_fopen should be enabled.

== FREE SSL PLUGIN FEATURES ==
* Verify domain ownership and generate free SSL certificate
* Secure webmail and email with SSL certificate
* Download generated SSL certificate, key and Intermediate certificate files
* Force HTTPS / Enable HTTPS redirection sitewide in one click
* HTTPS redirection includes redirect loop fix for Cloudflare, StackPath, Load balancers and reverse proxies.
* SSL Health page - Track your SSL score and control various SSL features
* Enable mixed content / insecure content fixer
* Upgrade insecure requests
* HSTS Strict transport security Headers
* Automatic email notification prior to SSL certificate expiration

(Optional) Running WordPress on a specialized VPS/Dedicated server without cPanel? You can download the generated SSL certificate files easily via "Download SSL Certificates" page and install it on your server by modifying server config file via SSH access as explained in our [DOCS](https://wpencryption.com/docs/). 

== PRO FEATURES WORTH UPGRADING ==

https://youtu.be/jrkFwFH7r6o

* Automatic domain verification
* Automatic SSL certificate installation
* Automatic SSL renewal (Auto renews SSL certificate 30 days prior to expiry date)
* Wildcard SSL support - Install Wildcard SSL certificate for your primary domain that covers ALL sub-domains. Automatic DNS based domain verification for Wildcard SSL installation (DNS should be managed by cPanel or Godaddy)
* Multisite + Mapped domains support - Supports SSL installation for domains mapped with MU domain mapping plugin
* Automatic Content Delivery Network(CDN) to boost your site performance (Annual Plan Only)
* Blocks SQL injection, XSS, Shellshock, Remote File Inclusion, Apache Structs Exploits, Local File Inclusion attacks.
* Blocks common web application vulnerabilities and common WordPress attacks.
* Blocks invalid user agents, unknown user agents, CSRF, Convicted bot traffic, Spam & abuse, Probing & forced browsing, Brute force attacks.
* Top notch one to one priority support - Live Chat, Email, Premium Support Forum
* SSL installation help for non-cPanel sites

[BUY PREMIUM VERSION](https://wpencryption.com/?utm_source=wordpress&utm_medium=premiumfeatures&utm_campaign=wpencryption)

== Switch to HTTPS in seconds ==

* Secure HTTPS browser padlock in minutes.

* Free domain validated (DV) SSL certificates are provided by Let's Encrypt (A non profit Global certificate Authority).

* SSL encryption ensures protection against man-in-middle attacks by securely encrypting the data transfer between client and your server.

== Why does My WordPress site need SSL? ==
1. SEO Benefit: Major search engines like Google ranks SSL enabled sites higher compared to non SSL sites. Thus bringing more organic traffic for your site.

2. Data Encryption: Data transmission between server and visitor are securely encrypted on a SSL site thus avoiding any data hijacks in-between the transmission(Ex: personal information, credit card information).

3. Trust: Google chrome shows non-SSL sites as 'insecure', bringing a feel of insecurity in website visitors.

4. Authentic: HTTPS green padlock represents symbol of trust, authenticity and security.

= Translations =

Many thanks to the generous efforts of our translators.

If you would like to translate to your language, [Feel free to sign up and start translating!](https://translate.wordpress.org/projects/wp-plugins/wp-letsencrypt-ssl/)

= Show Your Support =

* Rate Plugin – If you find this plugin useful, please leave a [positive review](https://wordpress.org/support/plugin/wp-letsencrypt-ssl/reviews/). Your reviews are our biggest motivation for further development of plugin.
* Submit a Bug – If you find any issue, please submit a bug via support forum.

== Installation ==	
1. Make a backup of your website and database
2. Download the plugin
3. Upload the plugin to the wp-content/plugins directory,
4. Go to “plugins” in your WordPress admin, then click activate.
5. You will now see WP Encryption option on your left navigation bar. Click on it and follow the step by step guide.

== Frequently Asked Questions ==

= Does installing the plugin will instantly turn my site https? =
Installing SSL certificate is a server side process and not as straight forward as installing a ready widget and using it instantly. You will have to follow some simple steps to install SSL for your WordPress site. Our plugin acts like a tool to generate and install SSL for your WordPress site. On FREE version of plugin - You should manually go through the SSL certificate installation process following the simple video tutorial. Whereas, the SSL certificates are easily generated by our plugin by running a simple SSL generation form.

= How to temporarily disable HTTPS redirect =
By adding below line of code to your wp-config.php file, All SSL enforcements like HSTS, Upgrade insecure requests, redirect to HTTPS, mixed content fixer will be disabled. Please check your .htaccess file for any other HTTPS enforcement related codes and remove it.

define("WPLE_DISABLE_HTTPS");

= I already have SSL certificate installed, how to activate HTTPS? =
If you already have SSL certificate installed, You can use WP Encryption plugin purely for HTTPS redirection & SSL enforcing purpose. All you need to do is enable "Force HTTPS" feature in this plugin.

= Secure webmail & email server with an SSL/TLS Certificate =
Starting from WP Encryption v5.4.8, you can now secure your webmail & incoming/outgoing email server [following this guide](https://wpencryption.com/secure-webmail-with-https/)

= How to install SSL for both www & non-www version of my domain? =
First of all, Please make sure you can access your site with and without www. Otherwise you will be not able to complete domain verification for both www & non-www together. If both are accessible, You will see **"Generate SSL for both www & non-www"** option on SSL install form. Otherwise, this option will be hidden.

= Images/Fonts not loading on HTTPS site after SSL certificate installation - Insecure Content / Mixed Content issue? =
Images on your site might be loading over http:// protocol, please enable "Force HTTPS via WordPress" feature of WP Encryption. If you have Elementor page builder installed, please go to Elementor > Tools > Replace URL and replace your http:// site url with https://. Make sure you have SSL certificates installed and browser padlock shows certificate as valid before forcing these https measures. If you have too many mixed content errors because of http:// resources loaded in your css, js or external links, We recommend using "Really Simple SSL" plugin along with WP Encryption.

= How do I renew SSL certificate =
You can click on STEP 1 in progress bar or Renew SSL button (which will be enabled during last 30 days of SSL expiry date) and follow the same initial process of SSL certificate generation to renew the certificates.

= Do you support Wildcard SSL? =
Wildcard SSL support is included with PRO version

= SSL Certificates renewed but new certs not showing in frontend =
This might happen for non cPanel sites, all you need to do is reboot the server instance once.

= How to revert back to HTTP in case of force HTTPS failure? =
Please follow the revert back instructions given in [support thread - Forced SSL via Htaccess](https://wordpress.org/support/topic/locked-out-after-force-ssl-via-htaccess-method/) and [support thread - Forced SSL via WordPress](https://wordpress.org/support/topic/locked-out-unable-to-access-site-after-forcing-https-2/) accordingly.

= I am getting some errors during SSL installation =
Feel free to open a ticket in this plugin support form and we will try our best to resolve your issue.

= Should I configure anything for auto renewal of SSL certificates to work after upgrading to PRO version? =
You don't need to configure anything. Once after you upgrade to PRO version and activate PRO plugin on your site, the auto renewal of SSL certificates will start working in background according to 60 days schedule i.e., 30 days prior to SSL certificate expiry date.

== Disclaimer ==

WP Encryption plugin uses [LetsDebug API](https://github.com/letsdebug/letsdebug) to pull error details upon domain verification failure to show better insights on why you are not able to generate SSL certificate for your domain.

Security is an important subject regarding SSL/TLS certificates, of course. It is obvious that your private key, stored on your web server, should never be accessible from the web. When the plugin created the keys directory for the first time, it will store a .htaccess file in this directory, denying all visitors. Always make sure yourself your keys aren't accessible from the web! We are in no way responsible if your private keys go public. If this does happen, the easiest solution is to check folder permissions on your server and make sure public access is forbidden for root folders. Next, create a new certificate.

== Screenshots ==
1. Generate and Install free SSL certificate while Agreeing to TOS
2. SSL certificate generation successful message
3. Download/Copy generated SSL certificate & key
4. SSL Health Page with realtime score
5. Force HTTPS via htaccess or WordPress method
6. Mixed Content Scanner to identify insecure contents on HTTPS site

== Changelog ==

= 5.7.20 =
* Ability to permanently dismiss non-essential admin notice

= 5.7.19 =
* PRO - Fixed expiry date issue in cron tab
* PRO - No cron renewal for SP mode users

= 5.7.18 =
* PRO - Fixed issue with cron tab

= 5.7.17 =
* Function exists check
* help with http local verification

= 5.7.16 =
* Moved backup suggestion to top
* PRO - local check DNS and auto proceed later
* PRO - Cron based SSL renewal after all WP Cron jobs fail

= 5.7.14 =
* Backup suggestion

= 5.7.13 =
* HTTP code checking removed for acme-challenge

= 5.7.11 =
* Important: Logic correction for HTTP based domain verification

= 5.7.10 =
* SDK update

= 5.7.9 =
* Improved HTTP challenge verification

= 5.7.8 =
* Active SSL info block for SSL health page to show installed SSL details
* Sleep before ACME DNS verification
* improved logging

= 5.7.6 =
* HTTP based domain verification - correct .txt extension
* log pending authorizations when SSL domain verification fail

= 5.7.5 =
* Remove certain options upon plugin deactivation
* fopen error catch during ssl expiration check process

= 5.7.4 =
* Log why order got invalid later
* Wording fixes
* PRO - ability to input cpanel host
* PRO - admin notice when auto renewal failed
* PRO - different flows rechecked

= 5.7.2 =
* Improved CSS
* Improved explanations
* Fix - don't show empty rows in advanced mixed content scanner
* Added - How it works Faq
* No more review requests for PRO users

= 5.7.1 =
* Updated - Intermediate cert priority. Please RESET and re-run SSL install form.

= 5.7.0 =
* New - Advanced Insecure content scanner
* Fixed path issue for subdirectory based WordPress installations
* DNS verify ajax issue fix

= 5.6.3 =
* Fixed the ajax call for "generate SSL for both www & non-www" checkbox

= 5.6.2 =
* Ajax check before enabling both "generate SSL for www & non-www" Checkbox 

= 5.6.1 = 
* SSL health in admin toolbar
* Improved instructions
* Always show checbkox to generate SSL for www & non-www together
* Activator SELF class error fix
* Fixed SSL certificate expiry date in email
* Many more improvements

= 5.6.0 =
* Check valid SSL before enabling HSTS & SSL Health page settings
* Security updates

= 5.5.0 =
* All new SSL Health page :)
* HSTS Strict Transport Security
* Mixed content fixer
* Important Security Headers
* Upgrade Insecure Requests