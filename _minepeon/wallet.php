<?php

$pubkey = trim(file_get_contents ( '/opt/minepeon/PublicBitcoinKey.txt', true));
$prvkey = trim(file_get_contents ( '/opt/minepeon/PrivateBitcoinKey.txt', true));

include('head.php');
include('menu.php');
?>
<script type="text/javascript" src="qrcode.js"></script>
<div class="container">
	<h1>Wallet</h1>
	<p>Upon first powerup, this system generated a new Bitcoin wallet used for the initial testing at the factory.&nbsp; As a present, you get to keep the 
bitcoin that was made during the time your system was burned in.&nbsp; The test mining used the 
Eligius pool, however the payout to this wallet will not occur until the balance reaches 40 TBC (0.04194304 BTC) or after mining has ceased for 7 days.&nbsp; It is 
recommended to print or record this wallet in a safe place in order to ensure access.</p>
<br>
	<p class="redalert"><b>WARNING: </b> We highly recommend not using this wallet for any serious production, as the private key could have been 
exposed at any time during transit.</p>
<div class="wallet">
<img id="wimage" src="/hfb.png"/>
<br>
<table border=0 width=100%>
<tr><td align=center><font size=+3><b>PUBLIC KEY:</b></font></td><td align=center><font size=+3><b>PRIVATE KEY:</b></font></td></tr>
<tr><td align=center><div id="qrcode"></div></td><td align=center><div id="qrcode2"></div></td></tr>
<tr><td align=center><font size=+1><b><?php echo $pubkey; ?></b></font></td><td align=center><font size=-5><b><?php echo $prvkey; ?></b></font></td></tr>
</table>


<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "<?php echo $pubkey; ?>");
new QRCode(document.getElementById("qrcode2"), "<?php echo $prvkey; ?>");
</script>
</div>
<br><br><br>
<br><br><br>
<br><br><br>
</div>
<?php
include('foot.php');
?>
