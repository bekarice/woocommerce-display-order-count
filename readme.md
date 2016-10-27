## WooCommerce Display Order Count

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

Though custom statuses could be used as well.

**There are no settings**. The plugin only adds the ability to use this shortcode.

### Requirements

 - WordPress 4.0 or newer
 - WooCommerce 2.2 or newer
 
### Frequently Asked Questions

**Why does this show the shortcode text instead of the count?**

Chances are you're using this in a text widget -- your site needs to have this included in the functions.php or custom plugin to do so.

`add_filter( 'widget_text', 'do_shortcode' );`

**Do I have to include completed orders?**

Nope, the `status` attribute can accept only the order statuses you'd like to include in your total.

### More Details 

 - See the [product page](http://www.skyverge.com/product/woocommerce-display-order-count/) for full details.
 - [Make a donation](https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal@skyverge.com&item_name=Donation+for+WooCommerce+Display+Order+Count) to help fund more free plugins.
 - View more of SkyVerge's [free WooCommerce extensions](http://profiles.wordpress.org/skyverge/)
 - View all [SkyVerge WooCommerce extensions](http://www.skyverge.com/shop/)

### Changelog

**2016.10.26 - version 1.1.0**
 - Misc: format order counts with a thousands separator
 - Add support for the [GitHub updater plugin](https://github.com/afragen/github-updater)

**2015.07.27 - version 1.0.1**
 - Misc: WooCommerce 2.4 compatible

**2015.04.26 - version 1.0.0**
 - Initial Release
