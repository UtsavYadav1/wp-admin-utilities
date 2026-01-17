<?php
/**
 * Plugin Name: Basic Plugin
 * Plugin URI:  https://example.com/basic-plugin
 * Description: A brief description of what the plugin does.
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://example.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: basic-plugin
 */

// Prevent direct access to this file
if (!defined('ABSPATH')) {
	exit;
}

// Activation Hook
register_activation_hook(__FILE__, 'basic_plugin_activate');

function basic_plugin_activate()
{
	// Triggered on plugin activation
}

// Admin Menu
add_action('admin_menu', 'basic_plugin_setup_menu');

function basic_plugin_setup_menu()
{
	add_menu_page(
		'Basic Plugin Page',      // Page Title
		'Basic Plugin',           // Menu Title
		'manage_options',         // Capability
		'basic-plugin',           // Menu Slug
		'basic_plugin_page_content' // Callback function
	);
}

function basic_plugin_page_content()
{
	// Handle Submission
	if (isset($_POST['submit'])) {
		// Verify Nonce
		check_admin_referer('basic_plugin_save_action', 'basic_plugin_nonce');

		$value = sanitize_text_field($_POST['basic_plugin_option']);
		update_option('basic_plugin_option', $value);
		echo '<div class="notice notice-success is-dismissible"><p>Settings saved.</p></div>';
	}

	// Retrieve Value
	$value = get_option('basic_plugin_option', '');
	?>
	<div class="wrap">
		<h1>Basic Plugin Page</h1>
		<p>Welcome to the basic plugin settings.</p>

		<form method="post" action="">
			<?php wp_nonce_field('basic_plugin_save_action', 'basic_plugin_nonce'); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Option Name</th>
					<td><input type="text" name="basic_plugin_option" value="<?php echo esc_attr($value); ?>" /></td>
				</tr>
			</table>
			<p class="submit">
				<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
			</p>
		</form>

	</div>

	<?php
}
