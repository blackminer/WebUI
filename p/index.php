<?php

$pubkey = trim(file_get_contents ( '/opt/minepeon/PublicBitcoinKey.txt', true));

include('/opt/minepeon/http/head.php');
?>
<script type="text/javascript" src="/qrcode.js"></script>
<div class="container">
<div class="wallet">
<img id="wimage" src="/hfb.png"/>
<h1>Congratulations!</h1>
        <p>This sheet was automatically generated at the time your new HashFast&reg; Bitcoin mining system was first tested!&nbsp; In order to ensure you only receive 
the highest quality product, your system was subjected to extended testing, including a live mining session on the Eligus pool.&nbsp; To show our gratitude and reward your patience,
 you may keep any and all bitcoin generated during this burn-in phase.&nbsp; Your new system includes a Raspberry Pi based 
controller that has been provisioned with an easy-to-use software compilation based on Arch Linux incorporating a web-based control panel.
<br><br>To get started, please visit the following site:
<br>
<h4>http://setup.hashfast.com/</h4><br>
<br><br>
<table border=0 width=100%>
<tr><td align=center><font size=+3><b>PUBLIC KEY:</b></font></td></tr>
<tr><td align=center><div id="qrcode"></div></td></tr>
<tr><td align=center><font size=+1><b><?php echo $pubkey; ?></b></font></td></tr>
</table>

<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "<?php echo $pubkey; ?>");
</script>
</div>
</div>
