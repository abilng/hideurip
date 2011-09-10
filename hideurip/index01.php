<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="HIDE UR IP is website aimed at safe browsing.Browse safely by  hiding your ip.This page gives proxy ip and port list and how to configure them in browsers" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HIDEurIP</title>
<link rel="shortcut icon"  href="styles/images/img07.png"type="image/ico" />
<link href="styles/style.css"rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="proxybrowser/index.php">PROXY BROWSER</a></li>
			<li><a href="fakemailer/index.php">Fake mailer</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="header">
		<div id="logo">
			<h1><a href="#">Hide <span>ur ip</span></a></h1>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Hide Ur Ip  </a></h2>
				<p class="meta"><span class="date"><script language="php">echo date('D, d M Y');</script></span><span class="posted"></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                <p>You can also hide-ur-ip without login in <strong>hideurip</strong>.It can be done by using proxy-setting in browser(<a href="howtofirefox.html">Firefox</a>,<a href="howtochrome.html">chrome</a>,<a href="howtoie.html">ie</a> etc).List of most recent proxy ip address along with thier ports are given bellow(ip:port).</p><p>
					<?php
					error_reporting(0);
					$fp = file("http://nntime.com/proxy-country/India-01.htm");
					foreach ($fp as $line_num => $line) {
	if(stristr($line,'<TABLE id="proxylist" class="data">')!=false)
	{
		while(stristr($fp[$line_num],'</TABLE>') == false)		  
		  {
			$s[]= '#<(input type="checkbox")[^>]*?>#si';
			$r[]= '';
			$s[] = '#<\s*script[^>]*?>.*?<\s*/\s*script\s*>#si';
			$r[] = '';
			$fp[$line_num] = preg_replace($s, $r,$fp[$line_num]);
			echo $fp[$line_num];
		  	$line_num ++;
		  	}
		  echo ($fp[$line_num]);
		  break;
	}
}
                    ?>
                    </p><p>The complete list on <a href="http://nntime.com">NNTIME.COM</a></div>
					</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					<form method="post" action="proxybrowser/index.php">
						<div>
							<input type="text" name="__proxy_url" value="http://www.google.com/" id="search-text" />
							<input type="submit" id="search-submit" value="GO" />
						</div>
                    <input type="hidden" name="__proxy_action" value="redirect_browse" />
					<input type="hidden" name="__no_javascript" value="0"/>
					<input type="hidden" name="__no_images" value="0"/>
					<input type="hidden"name="__no_title" value="0"/>
					<input type="hidden" name="__no_meta"  value="0"/>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>your location details</h2>
					<p><?php
					 $ip = getenv("REMOTE_ADDR") ; echo( "Your IP is " . $ip);echo("</p><p>");
					 echo('Browser is '.$_SERVER['HTTP_USER_AGENT']);echo("</p><p>");
					 ?>
                     <!--Beginning of IP Script-->
					<script type="text/javascript" src="http://www.whatsmyip.us/showflag.php"></script>
					<script type="text/javascript" src="http://www.whatsmyip.us/showcountry.php"></script>
					<!--End of IP Script-->
 
<?php
                /*$isp = geoip_isp_by_name($ip);if ($isp) echo ('ISP is: ' . $isp); echo("</p><p>");
					 $netspeed = geoip_id_by_name($ip);
					 if($netspeed){ echo 'The connection type is ';
						switch ($netspeed) {
    							case GEOIP_DIALUP_SPEED:
									echo 'dial-up';
									break;
								case GEOIP_CABLEDSL_SPEED:
									echo 'cable or DSL';
									break;
								case GEOIP_CORPORATE_SPEED:
									echo 'corporate';
									break;
								case GEOIP_UNKNOWN_SPEED:
								default:
									echo 'unknown';
									}
									echo("</p><p>");
					 }
									$country = geoip_country_code3_by_name($ip);
									if ($country)  echo 'This host is located in: ' . $country;echo("</p><p>");*/
                    ?></p>
				</li>
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
		<p>Copyright (c) 2011 hideurip. All rights reserved. Design by <a href="http://www.abilngeorge.110mb.com">Abil.N.George </a>using <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p><p><a href="disclaimer.html">Disclaimer</a></p>
	</div>
<!-- end #footer -->
</body>
</html>
