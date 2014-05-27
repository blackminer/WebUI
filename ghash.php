<?php
	// Include Cex.io PHP API
	include_once("cexapi.class.php");
	
	// Create API Object
	$api = new cexapi("ionutrai", "Ub2iMQkOPn3WWWf6kWxceFGc", "c3ZAhjFLR16nExRqumayqF40onk");
	
	// Test some API Methods
	echo "Hashrate:<pre>", json_encode($api->hashrate()), "</pre>";
?>