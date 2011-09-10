<?php
include "config.php";
echo <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content=",fake-mailer,fakemailer,email,fake e mail" />
<meta name="description" content="FAKEMAILER-Send mail from any mail id." />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Fake mailer</title>
<link rel="shortcut icon" href="./styles/images/img07.png" type="image/ico"  />
<link href="./styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
		<div id="header">
		<div id="logo">
			<h1><a href="#">Fake<span>Mailer</span></a></h1>
		</div>
	</div>
		<!-- end #header -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<h2 class="title"><a href="#">Send an Anonymous E-mail</a></h2>

EOF;
//error_reporting(0);
require_once('recaptchalib.php');
// Get a key from https://www.google.com/recaptcha/admin/create
# the response from reCAPTCHA
$resp = null;
$error = null;
# the error code from reCAPTCHA, if any
session_start();
if(isset($_SESSION['msg'])) echo '<span style="color: #ff0000;">**'.$_SESSION['msg'].'</span>';
if(isset($_SESSION['error'])) $error = $_SESSION['error'];
if(!isset($_SESSION['to'])) $_SESSION['to']=null;
if(!isset($_SESSION['subject'])) $_SESSION['subject']=null;
if(!isset($_SESSION['contents'])) $_SESSION['contents']=null;
if(!isset($_SESSION['name'])) $_SESSION['name']=null;
if(!isset($_SESSION['email'])) $_SESSION['email']=null;
$to       = ($_SESSION['to'] == '~')? null:$_SESSION['to'];
$subject  = ($_SESSION['subject'] == '~')? null:$_SESSION['subject'];
$contents = ($_SESSION['contents'] == '~')? null:$_SESSION['contents'];
$name     = ($_SESSION['name'] == '~')? null:$_SESSION['name'];
$email    = ($_SESSION['email'] == '~')? null:$_SESSION['email'];
$to_c       = ($_SESSION['to'] == '~')? 'style="background-color:#FF9598"':'';
$sub_c  = ($_SESSION['subject'] == '~')? 'style="background-color:#FF9598"':'';
$con_c = ($_SESSION['contents'] == '~')? 'style="background-color:#FF9598"':'';
$name_c     = ($_SESSION['name'] == '~')? 'style="background-color:#FF9598"':'';
$e_c    = ($_SESSION['email'] == '~')? 'style="background-color:#FF9598"':'';
session_unset();
echo <<<EOF
<p>Fill in the form below to send the anonymous e-mail!
<form action = "sendMail.php" method = "post">
  <table>
	<tr>
	  <td><span >mail-id of reciver*</span></td>
	  <td><input type = "text" $to_c name = "to" tabindex = "1" value=$to  >
	  </td>
	</tr>
	<tr>
	  <td><span >Subject*</span></td>
	  <td><input type     = "text" $sub_c name     = "subject" tabindex = "2" value=$subject >
	  </td>
	</tr>
	<tr>
	  <td><span>contents*</span></td>
	  <td><textarea name= "contents" $con_c rows     = "10" cols     = "75"tabindex = "3" >$contents</textarea>
	  </td>
	</tr>
	<tr>
	  <td><span>Fake Name*</span></td>
	  <td><input type     = "text" $name_c name     = "name"tabindex = "4" value=$name >
	  </td>
	</tr>
	<tr>
	  <td><span>Fake Email*</span></td>
	  <td><input type     = "text" $e_c name     = "email" tabindex = "5" value=$email >
	  </td>
	</tr>
</table>
EOF;
echo recaptcha_get_html($publickey, $error);
?>
<table>
	<tr>
	  <td>
	  <input type     = "submit"
		     value    = "Send"
		     tabindex = "7">
	  </td>
	  <td align = "right">
	    <p>* Required Field</p>
	  </td>
	</tr>
  </table>

</form>
</div>
</div>

			<div id="sidebar">
			<ul>
				<li>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Welcome to Fakemailer</h2>
					<div style="clear: both;">&nbsp;</div>
					<div style="clear: both;">&nbsp;</div>
					<div style="clear: both;">&nbsp;</div>
					<p></p>
					<div style="clear: both;">&nbsp;</div>
					<div style="clear: both;">&nbsp;</div>
					<div style="clear: both;">&nbsp;</div>
<p>download<a href="./source" >source code</a></p>
				</li>
				<li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
<?
echo <<<EOF
<div id="footer">
		<p>Copyright (c) 2011 ABIL N George. All rights reserved. Design by <a href="http://www.abilngeorge.110mb.com">Abil.N.George </a>using <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p><p><a href="$siteURL">home</a>&nbsp;&nbsp;<a href="disclaimer.html">Disclaimer</a>&nbsp;&nbsp;<a href ="about.php">About</a></p>
	</div>
	<!-- end #footer -->
</body>
</html>
EOF;
?>
