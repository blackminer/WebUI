<?php
	// Include Cex.io PHP API
	include_once("cexapi.class.php");
	
	// Create API Object
	$api = new cexapi("ionutrai", "Ub2iMQkOPn3WWWf6kWxceFGc", "c3ZAhjFLR16nExRqumayqF40onk");
	
	// Test some API Methods
	echo "Ticker:<pre>", json_encode($api->ticker()), "</pre>";
	echo "Order Book:<pre>", json_encode($api->order_book()), "</pre>";
	echo "Balance:<pre>", json_encode($api->balance()), "</pre>";
	echo "Open Orders:<pre>", json_encode($api->open_orders()), "</pre>";
?>