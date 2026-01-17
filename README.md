# WordPress Admin Utilities Plugin

A custom WordPress plugin built to demonstrate core plugin development concepts and best practices. This project focuses on creating a clean, secure, and functional admin interface using native WordPress APIs.

## Why This Plugin Exists

This plugin was created to showcase how a real-world WordPress admin plugin should be structured and developed.  
Rather than focusing on feature count, the goal is to demonstrate **correct patterns**, **security practices**, and **clean development workflows** that are commonly expected in professional WordPress teams like rtCamp.

It intentionally emphasizes:
- Native WordPress APIs over custom implementations
- Secure data handling and CSRF protection
- Readable, maintainable, and incremental code changes

## Features

- **Admin Menu Integration**: Adds a custom top-level menu page to the WordPress dashboard.
- **Secure Settings Form**: Implements a standard HTML form with WordPress styling (`.wrap`, `.form-table`, `.button-primary`).
- **Options API Usage**: Robustly handles saving (`update_option`) and retrieving (`get_option`) plugin settings.
- **CSRF Protection**: Secures form submissions using WordPress Nonces (`wp_nonce_field` and `check_admin_referer`).
- **Clean Code Structure**: Follows WordPress coding standards, including proper hooks (`admin_menu`, `register_activation_hook`) and security checks (`ABSPATH`).

## Project Goal

This plugin serves as a practical example of:
1. **Incremental Development**: Building features step-by-step with small, atomic commits.
2. **Best Practices**: Prioritizing security (sanitization, nonces) and native UI integration.
3. **Git Workflow**: Maintaining a clean history with descriptive commit messages.

## Installation

1. Clone this repository into your `wp-content/plugins` directory.
2. Activate the plugin locally through the WordPress Admin Plugins screen.
3. Navigate to the "Basic Plugin" menu item to see the settings page.
