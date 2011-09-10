<?
error_reporting(0);
if($_POST)
{
if($_POST['theCheck']!='1')
{
	echo("go to download<a href=\"index.php\">page</a>");
	exit;
}
}
else 
{
	echo("go to download<a href=\"index.php\">page</a>");
	exit;
}
include "config.php";
$link = mysql_connect($host, $username, $password);
if (!$link)
	 {
	    die('Could not connect: ' . mysql_error());
	}

// Select your database
mysql_select_db ($database);  
$id    = 1;
$query = "SELECT name, type, size, content " .
         "FROM source WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);

mysql_close($link);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
flush();
echo $content;
exit;
?>
