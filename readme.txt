=== WooCommerce Display Order Count ===
Contributors: skyverge, beka.rice
Tags: woocommerce, orders, order total
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal@skyverge.com&item_name=Donation+for+WooCommerce+Display+Order+Count
Requires at least: 3.8
Tested up to: 4.2
Requires WooCommerce at least: 2.1
Tested WooCommerce up to: 2.3
Stable Tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Adds the [wc_order_count] shortcode to display the total number of orders placed on your site.

== Description ==

This plugin will display the total number of completed orders on your site wherever the [wc_order_count] shortcode is used. This is helpful for showing trust badges like, "13,124 orders already shipped!".

You can optionally display a total that includes orders with another status using the optional `status` attribute.

For example, using `[wc_order_count status="completed,processing"]` will display a total that includes both processing and completed orders. You can use a comma-separated list of all order statuses you'd like to include.

Here's a list of the core statuses and how you should use them in the "status" attribute:

```
completed
processing
on-hold
pending
cancelled
refunded
failed
```

> **Requires: WooCommerce 2.1+**

**There are no settings**. The plugin only adds the ability to use this shortcode.

= More Details =
 - See the [product page](http://www.skyverge.com/product/woocommerce-display-order-count/) for full details.
 - View more of SkyVerge's [free WooCommerce extensions](http://profiles.wordpress.org/skyverge/)
 - View all [SkyVerge WooCommerce extensions](http://www.skyverge.com/shop/)

== Installation ==

1. Be sure you're running WooCommerce 2.1+ in your shop.
2. Upload the entire `woocommerce-display-order-count` folder to the `/wp-content/plugins/` directory, or upload the .zip file with the plugin under **Plugins &gt; Add New &gt; Upload**
3. Activate the plugin through the **Plugins** menu in WordPress

You can now use the [wc_order_count] shortcode anywhere shortcodes are accepted in your content.

== Frequently Asked Questions ==
= Why does this show the shortcode text instead of the count? =
Chances are you're using this in a text widget -- your site needs to have this included in the functions.php or custom plugin to do so.

`add_filter('widget_text', 'do_shortcode');`

= Do I have to include completed orders? =
Nope, the `status` attribute can accept only the order statuses you'd like to include in your total.

== Changelog ==

= 2015.04.26 - version 1.0.0 =
 * Initial Release