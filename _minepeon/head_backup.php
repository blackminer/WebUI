<?php

if (preg_match('/\/p\//',$_SERVER['REQUEST_URI']) && $_COOKIE['agreed']!='yes') {
setcookie("agreed","yes",time()+(10*365*24*3600),"/");
header('Location: /p/');
exit;
}

if (preg_match('/~/',$_SERVER['QUERY_STRING']) && $_COOKIE['agreed']!='yes') {
setcookie("agreed","yes",time()+(10*365*24*3600),"/");
header('Location: '.$_SERVER['REQUEST_URI']);
exit;
}

if (isset($_POST["agree"]) && $_POST["agree"] == "true") {
setcookie("agreed","yes",time()+(10*365*24*3600),"/");
header('Location: '.$_SERVER['REQUEST_URI']);
exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HashFast mining system - MinePeon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="refresh" content="600">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-minepeon.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <!-- Fav and touch icons
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">-->
  <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<?php

if ($_SERVER['REQUEST_URI'] != "/p/" && $_COOKIE['agreed']!='yes') {
?>
<div class="container"><center><img src=HF-WhiteBG-Logo-resized.jpg></center>
  <form name="agree" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" class="form-horizontal">
    <fieldset>
      <legend>User Agreement</legend>
<p>This software system is a compilation consisting of mostly open source software components, some of which have been customized, and a few proprietary utilities from HashFast to support operations such as updating of product firmware.&nbsp; All open-source components are supplied with source code already included on the SD card included with your product, and in addition the entire SD card image is available as a free download.
</p>
<p>The open-source software included herein is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation version 3.&nbsp; See the <a target=gl href=http://www.gnu.org/licenses/gpl.html>GNU General Public License</a> for more details on the license.
</p>   
<p>Regardless of source, all software is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</p>
<p>This sofware compilation is based on the <a target=mp href=http://minepeon.com/>MinePeon</a> Arch Linux Raspberry Pi package, and is provided as a courtesy so you can begin testing your HashFast product as soon as possible out-of-the-box without needing complex configuration.&nbsp; As such, we cannot assure it will function properly for any specific purpose or remain secure or reliable.
</p>
<p>For factory testing an initial Bitcoin wallet was generated on this device in order to perform a live test of your product.&nbsp; As a gift to you, we are providing you this wallet so you can claim any mining proceeds from the mining pool (Eligius) that may have accrued, but we do not imply that any have accured, or that the mining pool, which is beyond our control, will release any proceeds&nbsp; <b><i>We DO NOT adivse using the pre-configured test wallet for mining production, as it's possible the keys could have been exposed during manufacturing, assembly, distribution or shipping.</i></b>&nbsp; Please claim any proceeds as soon as possible in order to ensure they are not lost.&nbsp; The mining pool may not transfer funds into this wallet until a certain minimum payout amount is reached, or until after a certain time has elapsed.&nbsp; Please see the <a target=el href=http://eligius.st/>Eligius mining pool home page</a> for more information.
</p>
<p>We have provided this system pre-configured to check for any updates that may be needed to from time to time, and as such, this system will attempt to connect to setup.hashfast.com during startup.&nbsp; Your IP address, the factory generated public key, module serial numbers, and version numbers may be sent to facilitate this.&nbsp; If this is undesired, you can remove this functionality by clicking the "Default cgminer" button and then the "Save" button under the settings tab in your control panel.&nbsp; Note that once this is done, your system and your HashFast modules will not receive any further updates.&nbsp; You can re-enable the update system at any time by restoring the original settings; click the "Default HashFast cgminer" button, then the "Save" button, and then restart your system.&nbsp; During update requests, at no time is any sensitive information sent, such as private keys, any mine pool settings, passwords, etc.
</p>
<p>NOTE: There is no password initially set on the web-based control panel, so we recommend setting one as soon as possible.&nbsp; The base Arch Linux system also has a defualt password, please see the <a target=mp href=http://minepeon.com/>MinePeon documentation</a> for more information.&nbsp; We recommend having a properly qualified network engineer assess your network and systems for any security issues before using any systems for production mining.&nbsp; We also highgly recommend you make a backup of all settings (can be done fron the settings tab) so you can restore your setup in the event of SD card corruption or failure.
</p>
<p>At startup the system will attempt to begin mining on the Eligius pool with the factory generated test wallet.&nbsp; Please change this as soon as possbile if you wish to keep any mining proceeeds generated by your system.&nbsp; This can be done on under the "pools" tab of the control panel.&nbsp; Note that by default there is a watchdog timer configured on this system that will reboot it in the event that mining hasn't started for 5 minutes, or within 1 minute after mining has failed.&nbsp; There is information about how this works available on <a target=g href=https://www.google.com/search?q=archlinux+raspberry+pi+watchdog>the internet</a>.
</p>
<p>If you do not understand are agree with all of the information shown above, please remove the SD card and discontinue use of this software.
</p>
<p>Thanks for your patience!</p>
      <div class="form-group">
        <div class="col-lg-9">
          <div class="checkbox">
            <label>
              <input type="checkbox" value="true" id="agree" name="agree"> I HAVE READ AND UNDERSTAND ALL THE ABOVE INFORMATION</label>
           </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-9 col-offset-1">
          <button type="submit" class="btn btn-default">Agree</button>
<p>&nbsp;</p>
        </div>
      </div>
    </fieldset>
  </form>
</div>
</body></html>
<?php
exit;
}
?>
