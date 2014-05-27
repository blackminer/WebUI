<?php
	// Include Cex.io PHP API
	include_once("cexapi.class.php");
	
	// Create API Object
	$api = new cexapi("ionutrai", "QOSW4k3DRjUzsa9IBP62Y5GbGcw", "s0yLWoX0SncDTngE5WkzuDZp2o");
	
	// Test some API Methods
	echo "Ticker:<pre>", json_encode($api->ticker()), "</pre>";
	echo "Order Book:<pre>", json_encode($api->order_book()), "</pre>";
	echo "Balance:<pre>", json_encode($api->balance()), "</pre>";
	echo "Open Orders:<pre>", json_encode($api->open_orders()), "</pre>";
?>