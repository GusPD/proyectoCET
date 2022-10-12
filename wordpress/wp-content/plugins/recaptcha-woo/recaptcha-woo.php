<?php
/**
* Plugin Name: reCAPTCHA for WooCommerce
* Description: Add Google reCAPTCHA to your WooCommerce Checkout, Login, and Registration Forms.
* Version: 1.1.2
* Author: RelyWP
* Author URI: https://www.relywp.com
* License: GPLv3 or later
* Text Domain: recaptcha-woo
*
* WC requires at least: 3.4
* WC tested up to: 6.9.4
**/

include( plugin_dir_path( __FILE__ ) . 'admin-options.php');

// Plugin List - Settings Link
add_filter( 'plugin_action_links', 'rcfwc_settings_link_plugin', 10, 5 );
function rcfwc_settings_link_plugin( $actions, $plugin_file ) 
{
	static $plugin;

	if (!isset($plugin))
		$plugin = plugin_basename(__FILE__);
	if ($plugin == $plugin_file) {
		$settings = array('settings' => '<a href="options-general.php?page=recaptcha-woo%2Fadmin-options.php">' . __('Settings', 'General') . '</a>');
    	$actions = array_merge($settings, $actions);
	}
		
	return $actions;
}

// Enqueue recaptcha script only on checkout page
function rcfwc_recaptcha_script() {
	if ( is_checkout() || is_account_page() ) {
		wp_register_script("recaptcha", "https://www.google.com/recaptcha/api.js?explicit&hl=" . get_locale());
		wp_enqueue_script("recaptcha");
	}
}
add_action("wp_enqueue_scripts", "rcfwc_recaptcha_script");

// Field
function rcfwc_field() {
	$key = esc_attr( get_option('rcfwc_key') );
	$secret = esc_attr( get_option('rcfwc_secret') );
	$theme = esc_attr( get_option('rcfwc_theme') );
	if($key && $secret) {
		?>
		<div class="g-recaptcha" <?php if($theme == "dark") { ?>data-theme="dark" <?php } ?>data-sitekey="<?php echo $key; ?>"></div>
		<br/>
		<?php
	}
}

// Field Checkout
function rcfwc_field_checkout($checkout) {
	$key = esc_attr( get_option('rcfwc_key') );
	$secret = esc_attr( get_option('rcfwc_secret') );
	$theme = esc_attr( get_option('rcfwc_theme') );
	$guest = esc_attr( get_option('rcfwc_guest_only') );
	if( !$guest || ( $guest && !is_user_logged_in() ) ) {
		if($key && $secret) {
		?>
		<div class="g-recaptcha" <?php if($theme == "dark") { ?>data-theme="dark" <?php } ?>data-sitekey="<?php echo $key; ?>"></div>
		<br/>
		<?php
		}
	}
}

// Check the reCAPTCHA on submit.
function rcfwc_recaptcha_check() {
	
	$postdata = "";
	if(isset($_POST['g-recaptcha-response'])) {
		$postdata = sanitize_text_field( $_POST['g-recaptcha-response'] );
	}
	
	$key = esc_attr( get_option('rcfwc_key') );
	$secret = esc_attr( get_option('rcfwc_secret') );
	$guest = esc_attr( get_option('rcfwc_guest_only') );
	
	if( !$guest || ( $guest && !is_user_logged_in() ) ) {
		if($key && $secret) {
			
			$verify = wp_remote_get( 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$postdata );
			$verify = wp_remote_retrieve_body( $verify );
			$response = json_decode($verify);

			return $response->success;
			
		}
	}
	
}

// Woo Checkout
if(get_option('rcfwc_key')) {
	add_action('woocommerce_review_order_before_payment', 'rcfwc_field_checkout', 10);
	add_action('woocommerce_checkout_process', 'rcfwc_checkout_check');
	function rcfwc_checkout_check() {
		$guest = esc_attr( get_option('rcfwc_guest_only') );
		if( !$guest || ( $guest && !is_user_logged_in() ) ) {
			$check = rcfwc_recaptcha_check();
			if(!$check) {
				wc_add_notice( __( 'Please complete the reCAPTCHA to verify that you are not a robot.', 'recaptcha-woo' ), 'error');
			}
		}
	}
}

// Woo Login
if(get_option('rcfwc_woo_login')) {
	add_action('woocommerce_login_form','rcfwc_field');
	add_action('wp_authenticate_user', 'rcfwc_woo_login_check', 10, 1);
	function rcfwc_woo_login_check($user){
		if(isset($_POST['woocommerce-login-nonce'])) {
			$check = rcfwc_recaptcha_check();
			if(!$check) {
				$user = new WP_Error( 'authentication_failed', __( 'Please complete the reCAPTCHA to verify that you are not a robot.', 'recaptcha-woo' ) );
			}
		}
		return $user;
	}
}

// Woo Register
if(get_option('rcfwc_woo_register')) {
	add_action('woocommerce_register_form','rcfwc_field');
	add_action('woocommerce_register_post', 'rcfwc_woo_register_check', 10, 3);
	function rcfwc_woo_register_check($username, $email, $validation_errors) {
		$check = rcfwc_recaptcha_check();
		if(!$check) {
			$validation_errors->add( 'rcfwc_error', __( 'Please complete the reCAPTCHA to verify that you are not a robot.', 'recaptcha-woo' ) );
		}
	}
}

// Woo Reset
if(get_option('rcfwc_woo_reset')) {
	add_action('woocommerce_lostpassword_form','rcfwc_field');
	add_action('lostpassword_post','rcfwc_woo_reset_check', 10, 1);
	function rcfwc_woo_reset_check($validation_errors) {
		if(isset($_POST['woocommerce-lost-password-nonce'])) {
		$check = rcfwc_recaptcha_check();
			if(!$check) {
				$validation_errors->add( 'rcfwc_error', __( 'Please complete the reCAPTCHA to verify that you are not a robot.', 'recaptcha-woo' ) );
			}
		}
	}
}