<?php

$using_ssl = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) ? true : false;

$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if ($using_ssl) {
    header('Location: http://' . $url);
}

include('settings.inc.php');

include('head.php');
include('menu.php');

?>

<center>
<iframe width=898 height=690 seamless src="http://<?php echo $_SERVER['SERVER_NAME'].":8080/" ?>"></iframe>
</center>
<?php

include('foot.php');
