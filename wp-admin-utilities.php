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
	?>
	<div class="wrap">
		<h1>Basic Plugin Page</h1>
		<p>Welcome to the basic plugin settings.</p>
	</div>
	<?php
}
