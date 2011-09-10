<?php
include "config.php";
echo <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Fake mailer</title>
<link rel="shortcut icon" href="../styles/images/img07.png" type="image/ico"  />
<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu">

		<ul>
			<li><a href=$siteroot/index.php>Homepage</a></li>
			<li><a href=$siteroot/proxybrowser/index.php>PROXY BROWSER</a></li>
			<li class="current_page_item"><a href="index.php">Fake mailer</a></li>
			<li><a href=$siteroot/about.php>About</a></li>
		</ul>
	</div>
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
// Print header
// Show main body

$file = <<< HERE
<p>Fill in the form below to send the anonymous e-mail!
<form action = "sendMail.php"
      method = "post">
  <table>
	<tr>
	  <td>mail-id of reciver* :</td>
	  <td><input type     = "text"
		         name     = "to"
		         tabindex = "1">
	  </td>
	</tr>
	<tr>
	  <td>Subject* :</td>
	  <td><input type     = "text"
		         name     = "subject"
				 tabindex = "2">
	  </td>
	</tr>
	<tr>
	  <td>contents* :</td>
	  <td><textarea name     = "contents"
			        rows     = "10"
				    cols     = "75"
				    tabindex = "3"></textarea>
	  </td>
	</tr>
	<tr>
	  <td>Fake Name* :</td>
	  <td><input type     = "text"
			     name     = "name"
			     tabindex = "4">
	  </td>
	</tr>
	<tr>
	  <td>Fake Email* :</td>
	  <td><input type     = "text"
		         name     = "email"
				 tabindex = "5">
	  </td>
	</tr>

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
HERE;
echo $file;
echo <<<EOF
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
					<p>Please note, we have disabled the actual sending of emails on this demo version to prevent abuse.</p>
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
		<div id="footer">
		<p>Copyright (c) 2011 hideurip. All rights reserved. Design by <a href="http://www.abilngeorge.110mb.com">Abil.N.George </a>using <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p><p><a href=$siteroot/disclaimer.html>Disclaimer</a></p>
	</div>
	<!-- end #footer -->
</body>
</html>
EOF;
?>
