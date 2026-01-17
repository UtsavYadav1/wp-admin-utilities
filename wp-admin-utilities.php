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
