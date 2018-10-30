<?php
global $product;
if ($product->get_stock_quantity() > 0) {
    echo "<p> Stock : ".$product->get_stock_quantity()."</p>";
};
