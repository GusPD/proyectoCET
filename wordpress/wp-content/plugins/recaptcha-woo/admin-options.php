<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// create custom plugin settings menu
add_action('admin_menu', 'rcfwc_create_menu');
function rcfwc_create_menu() {

	//create new top-level menu
	add_submenu_page( 'options-general.php', 'reCAPTCHA for WooCommerce', 'reCAPTCHA WooCommerce', 'manage_options', __FILE__, 'rcfwc_settings_page' );

	//call register settings function
	add_action( 'admin_init', 'register_rcfwc_settings' );
}

// Register Settings
function register_rcfwc_settings() {
	register_setting( 'rcfwc-settings-group', 'rcfwc_key' );
	register_setting( 'rcfwc-settings-group', 'rcfwc_secret' );
	register_setting( 'rcfwc-settings-group', 'rcfwc_theme' );
	//register_setting( 'rcfwc-settings-group', 'rcfwc_woo_checkout' );
	register_setting( 'rcfwc-settings-group', 'rcfwc_guest_only' );
	register_setting( 'rcfwc-settings-group', 'rcfwc_woo_login' );
	register_setting( 'rcfwc-settings-group', 'rcfwc_woo_register' );
	register_setting( 'rcfwc-settings-group', 'rcfwc_woo_reset' );
}

// Show Settings Page
function rcfwc_settings_page() {
?>
<div class="wrap">

<h1><?php echo __( 'reCAPTCHA for WooCommerce', 'recaptcha-woo' ); ?></h1>

<p><?php echo __( 'This plugin will add Google reCAPTCHA to your WooCommerce checkout and forms to help prevent spam.', 'recaptcha-woo' ); ?></p>

<p><?php echo __( 'You can get your site key and secret from here:', 'recaptcha-woo' ); ?> <a href="https://www.google.com/recaptcha/admin/create" target="_blank">https://www.google.com/recaptcha/admin/create</a></p>

<form method="post" action="options.php">

    <?php settings_fields( 'rcfwc-settings-group' ); ?>
    <?php do_settings_sections( 'rcfwc-settings-group' ); ?>
	
    <table class="form-table">
	
        <tr valign="top">
        <th scope="row"><?php echo __( 'Site Key', 'recaptcha-woo' ); ?> (v2)</th>
        <td><input type="text" name="rcfwc_key" value="<?php echo esc_attr( get_option('rcfwc_key') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row"><?php echo __( 'Site Secret', 'recaptcha-woo' ); ?> (v2)</th>
        <td><input type="text" name="rcfwc_secret" value="<?php echo esc_attr( get_option('rcfwc_secret') ); ?>" /></td>
        </tr>

		<tr valign="top">
			<th scope="row"><?php echo __( 'reCAPTCHA Theme', 'recaptcha-woo' ); ?></th>
			<td>
				<select name="rcfwc_theme">
					<option value="light"<?php if(!get_option('rcfwc_theme') || get_option('rcfwc_theme') == "light") { ?>selected<?php } ?>>
						<?php esc_html_e( 'Light', 'recaptcha-woo' ); ?>
					</option>
					<option value="dark"<?php if(get_option('rcfwc_theme') == "dark") { ?>selected<?php } ?>>
						<?php esc_html_e( 'Dark', 'recaptcha-woo' ); ?>
					</option>
				</select>
			</td>
		</tr>
		
        <tr valign="top" <?php if ( !class_exists( 'WooCommerce' ) ) { ?>style="opacity: 0.5; pointer-events: none;"<?php } ?>>
			<th scope="row">
				<?php echo __( 'WooCommerce Checkout', 'recaptcha-woo' ); ?>
				<br/><br/>
				<?php echo __( 'Guest Checkout Only', 'recaptcha-woo' ); ?>
			</th>
			<td>
				<input type="checkbox" name="rcfwc_woo_checkout" checked disabled>
				<br/><br/>
				<input type="checkbox" name="rcfwc_guest_only" <?php if(get_option('rcfwc_guest_only')) { ?>checked<?php } ?>>
			</td>
        </tr>
		
        <tr valign="top" <?php if ( !class_exists( 'WooCommerce' ) ) { ?>style="opacity: 0.5; pointer-events: none;"<?php } ?>>
			<th scope="row">
			<?php echo __( 'WooCommerce Login', 'recaptcha-woo' ); ?>
			</th>
			<td><input type="checkbox" name="rcfwc_woo_login" <?php if(get_option('rcfwc_woo_login')) { ?>checked<?php } ?>></td>
        </tr>
		
        <tr valign="top" <?php if ( !class_exists( 'WooCommerce' ) ) { ?>style="opacity: 0.5; pointer-events: none;"<?php } ?>>
			<th scope="row">
			<?php echo __( 'WooCommerce Register', 'recaptcha-woo' ); ?>
			</th>
			<td><input type="checkbox" name="rcfwc_woo_register" <?php if(get_option('rcfwc_woo_register')) { ?>checked<?php } ?>></td>
        </tr>
		
        <tr valign="top" <?php if ( !class_exists( 'WooCommerce' ) ) { ?>style="opacity: 0.5; pointer-events: none;"<?php } ?>>
			<th scope="row">
			<?php echo __( 'WooCommerce Reset Password', 'recaptcha-woo' ); ?>
			</th>
			<td><input type="checkbox" name="rcfwc_woo_reset" <?php if(get_option('rcfwc_woo_reset')) { ?>checked<?php } ?>></td>
        </tr>
		
    </table>
    
    <?php submit_button(); ?>

	<p>Like this plugin? Please <a href="https://wordpress.org/support/plugin/recaptcha-woo/reviews/#new-post" target="_blank">submit a review</a>.</p>
	
	<p>Need help? <a href="https://wordpress.org/support/plugin/recaptcha-woo" target="_blank">Create a new support topic</a>.</p>

	<br/>
	
	<p>reCAPTCHA for WooCommerce is a 100% free plugin developed by RelyWP.
	<br/>See our website at <a href="https://www.relywp.com" target="_blank">www.relywp.com</a> for WordPress maintenance & support.</p>

</form>
</div>

<?php } ?>