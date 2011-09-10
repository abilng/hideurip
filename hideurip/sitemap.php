<?php
error_reporting(0);
if (!$_POST['changefreq'] || !$_POST['url'] || !$_POST['last']) 
{
$da =date("Y-m");
echo <<<EOF
<h2>creating site site map</h2>
<br>
<div class="post">
<form method="post" action="./sitemap.php">
<B>SITE URL::</B><input type="text" name="url" value="http://localhost/hideurip/" /><br>
<B>Changefreq::</B><select name="changefreq"><option value="monthly">monthly</option><option value="yearly">yearly</option><option value="daily">daily</option><option value="hourly">hourly</option></select><br>
<B>lastmodify date::</B><input type="text" name="last" value=$da /><br>
<input type="submit" value="CREATE SITE MAP" />
</form>
EOF;
exit;
}
$url=$_POST['url'];
$freq=$_POST['changefreq'];
$d=$_POST['last'];
$sitemap=<<<EOF
<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
  <loc>$url/hideurip/</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>$url/hideurip/proxybrowser/index.php</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>$url /hideurip/fakemailer/index.php</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>$url/hideurip/about.php</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>$url/hideurip/index01.php</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>$url/hideurip/disclaimer.html</loc>
   <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>$url/hideurip/index.php</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>$url/hideurip/howtofirefox.html</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>$url/hideurip/howtochrome.html</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>$url/hideurip/howtoie.html</loc>
  <changefreq>$freq</changefreq>
 <lastmod>$d</lastmod>
  <priority>0.64</priority>
</url>
</urlset>
EOF;
$fp = fopen("./sitemap.xml", "w");
fwrite($fp,$sitemap);
fclose($fp);
$homepage = htmlspecialchars (file_get_contents('./sitemap.xml'));
echo $homepage;

