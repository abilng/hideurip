<?php
include "config.php";
//error_reporting(0);
session_start();
$to       = $_POST["to"];
$subject  = $_POST["subject"];
$contents = $_POST["contents"];
$name     = $_POST["name"];
$email    = $_POST["email"];
$headers = 'From: ' . $name . ' <' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";
$_SESSION['error'] = null;
$_SESSION['msg'] = null;
$_SESSION['to']= $_POST["to"];
$_SESSION['subject'] = $_POST["subject"];
$_SESSION['contents'] = $_POST["contents"];
$_SESSION['name']     = $_POST["name"];
$_SESSION['email']    = $_POST["email"];
require_once('recaptchalib.php');
$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
if ((empty($to)) || (empty($subject)) || (empty($contents)) || (empty($name)) || (empty($email)))
{
	if (empty($to)) $_SESSION['to']='~';
	if (empty($subject)) $_SESSION['subject']='~';
	if (empty($contents)) $_SESSION['contents']='~';
	if (empty($name)) $_SESSION['name']='~';
	if (empty($email)) $_SESSION['email']='~';

/*$title ="Fake mailer-Sending Failed";
$pageContents =  <<<HERE
<h1>Message Not Sent</h1>
<p>The message was not sent as there was an error which may be 
due to the fact that you did not fill in the form correctly(One or more  Required Field is empty)</p>
<p>Please <a href="index.php">go back</a> and try again.</p>
<hr>
HERE;
echo $pageContents;*/

	$_SESSION['msg'] ="One or more  Required Field is empty"; 
	$uri = 'http://';
	$uri .= $_SERVER['HTTP_HOST'];
	$uri .= dirname($_SERVER['PHP_SELF']);
	header('Location: '.$uri.'/index.php?'. SID);
	exit;
}
if (!$resp->is_valid) 
 {
	$_SESSION['error'] = $resp->error; 
	$uri = 'http://';
	$uri .= $_SERVER['HTTP_HOST'];
	$uri .= dirname($_SERVER['PHP_SELF']);
	header('Location: '.$uri.'/index.php?'. SID);
	exit;
 
}
$headers = 'From: ' . $name . ' <' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";
if(mail($to, $subject, $contents, $headers))
{
$title ="Fake mailer-Message Send";
$pageContents = <<<HERE
<h1>Message Sent Successfully</h1>
<p>Your message has been successfully sent!</p>
<ul>
  <li><a href="index.php">Send Another Anonymous Email</a></li>
</ul>
<hr>
HERE;
}
else {
$title ="Fake mailer-Sending Failed";
$pageContents =  <<<HERE
<h1>Message Not Sent</h1>
<p>The message was not sent as there was an error which was either 
due to the fact that you did not fill in the form correctly or 
there was a problem with our hosting server(fumction.mail() is disabled(SMTP disabled)).</p>
<p>Please <a href="index.php">go back</a> and try again.</p>
<hr>
HERE;
}

echo <<< EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>$title</title>
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
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
		<div style="clear: both;">&nbsp;</div>
EOF;
echo $pageContents;
echo <<<EOF
<div id="footer">
		<p>Copyright (c) hideurip. All rights reserved.Design by <a href="http://www.abilngeorge.110mb.com">Abil.N.George</a><a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
EOF;
?>
