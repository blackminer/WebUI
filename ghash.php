<?php
	
//$api = new cexapi("ionutrai", "Ub2iMQkOPn3WWWf6kWxceFGc", "c3ZAhjFLR16nExRqumayqF40onk");
	
$url = 'https://cex.io/api/ghash.io/hashrate';

$nonce = round(microtime(true)*100);
$apiusername = "ionutrai";
$apikey = "Ub2iMQkOPn3WWWf6kWxceFGc";
$apisecret = "c3ZAhjFLR16nExRqumayqF40onk";

$string = $nonce . $apiusername . $apikey; //Create string
$hash = hash_hmac('sha256', $string, $apisecret); //Create hash
$hash = strtoupper($hash);
$apisignature = $hash;


$data = array('key' => $apikey, 'signature' => $apisignature, 'nonce' => $nonce);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$show = json_decode($result);

$value = $_GET['value'];
$return = $show->{$value};

?>