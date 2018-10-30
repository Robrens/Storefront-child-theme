<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ($product->get_price() < 20) {
?>
<p>Golden Offer !!!!</p>
<p class="price">Price : <?php echo $product->get_price_html(); ?></p>
<?php
}
else {
?>
<p>No special offer</p>
<p class="price">Price : <?php echo $product->get_price_html(); ?></p>
<?php
}