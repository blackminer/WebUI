<?php
	
//$api = new cexapi("ionutrai", "Ub2iMQkOPn3WWWf6kWxceFGc", "c3ZAhjFLR16nExRqumayqF40onk");
	
$url = 'http://server.com/path';
$nonce = time();
$data = array('key' => 'Ub2iMQkOPn3WWWf6kWxceFGc', 'signature' => 'c3ZAhjFLR16nExRqumayqF40onk', 'nonce' => '$nonce');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

var_dump($result);

?>