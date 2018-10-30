<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="price">Price : <?php echo $product->get_price_html(); ?></p>
