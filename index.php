<?php
include('lib/sellix.php');
$sellix = new Sellix('api_key_here');

echo $sellix->getProduct('product_id');
?>
