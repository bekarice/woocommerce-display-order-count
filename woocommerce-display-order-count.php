<?php
/**
 * Plugin Name: WooCommerce Display Order Count
 * Plugin URI: http://www.skyverge.com/product/woocommerce-display-order-count/
 * Description: Adds the [wc_order_count] shortcode to display the total number of orders placed on your site.
 * Author: SkyVerge
 * Author URI: http://www.skyverge.com/
 * Version: 1.0.0
 *
 * Copyright: (c) 2015-2015 SkyVerge, Inc. (info@skyverge.com)
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package   WC-Display-Order-Count
 * @author    SkyVerge
 * @category  Admin
 * @copyright Copyright (c) 2015-2015, SkyVerge, Inc
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 *
 */
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Plugin Description
 *
 * Adds a shortcode to display the total number of orders on your shop (defaults to completed orders)
 * The shortcode can accept the optional 'status' attribute to display the total number of orders with the included statuses.
 *
 * Use [wc_order_count status="completed,pending"] to display the total for completed and processing orders
 *
 */
 
function display_woocommerce_order_count( $atts, $content = null ) {

	$args = shortcode_atts( array(
		'status' => 'completed',
    ), $atts );
	
	$status_list = $args['status'];
	
	$statuses = array_map( 'trim', explode( ',', $status_list ) );
	
	$order_count = 0;
	
	foreach ( $statuses as $status ) {
		
		$status = str_replace( $status, 'wc-' . $status, $status );
	
        $total_orders = wp_count_posts( 'shop_order' )->$status;
        
        $order_count += $total_orders;
    }

	ob_start();
	
    echo $order_count;
    
    return ob_get_clean();
}
add_shortcode( 'wc_order_count', 'display_woocommerce_order_count' );