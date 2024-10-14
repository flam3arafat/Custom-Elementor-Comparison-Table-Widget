<?php
/*
Plugin Name: Custom Elementor Comparison Table Widget
Description: A custom comparison table widget for Elementor with 6 columns and buttons.
Version: 1.0
Author: MD Arafat Rahman
Author URI: https://flamearafat.com
Plugin URI: https://flamearafat.com/cect
Text Domain: custom-elementor-comparison-table
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Register the widget with Elementor
function register_comparison_table_widget() {
    require_once( plugin_dir_path( __FILE__ ) . 'comparison-table-widget.php' );
}
add_action( 'elementor/widgets/widgets_registered', 'register_comparison_table_widget' );
