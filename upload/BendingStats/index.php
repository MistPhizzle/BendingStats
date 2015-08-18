<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css' media='screen' />
<title>Element Counter</title>
</head>

<div class='footer'>
<!-- Don't be a terrible person! Leave this here! -->
<p><font style="color:white">Made by <a href = 'http://projectkorra.com'>ProjectKorra</a></font></p>
</div>
<center>
<?php
require ('config.php');
$handle = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($connect_error);
mysql_select_db($mysql_db, $handle) or die ($connect_error);
// Beginning variables / queries
$waterbenders = mysql_query("SELECT COUNT(element) FROM pk_players WHERE element LIKE '%w%'");
$earthbenders = mysql_query("SELECT COUNT(element) FROM pk_players WHERE element LIKE '%e%'");
$firebenders = mysql_query("SELECT COUNT(element) FROM pk_players WHERE element LIKE '%f%'");
$airbenders = mysql_query("SELECT COUNT(element) FROM pk_players WHERE element LIKE '%a%'");
$chiblockers = mysql_query("SELECT COUNT(element) FROM pk_players WHERE element LIKE '%c%'");
$total = mysql_query("SELECT COUNT('player') FROM pk_players");
// Arrays!
$wb = mysql_fetch_array($waterbenders);
$eb = mysql_fetch_array($earthbenders);
$fb = mysql_fetch_array($firebenders);
$ab = mysql_fetch_array($airbenders);
$cb = mysql_fetch_array($chiblockers);
$total2 = mysql_fetch_array($total);
// Additional PHP Variables
$today = date("m/d/y",time());
$now = date("H:i:s", time());

echo "<h1><font style='color:white'>$servername Element Stats</font></h1>";
?>

<table border='0' cellpadding='3' cellspacing='12' id='minimalist'>
<tr>
<td width='30'><img src='images/waterbending.png' height='150' width='150'></td>
<td width='30'><img src='images/earthbending.png' height='150' width='150'></td>
<td width='30'><img src='images/firebending.png' height='150' width='150'></td>
<td width='30'><img src='images/airbending.png' height='150' width='150'></td>
<td width='30'><img src='images/chiblocking.png' height='150' width='150'></td>
</tr>

<?php
// Displays the appropriate numbers
echo "<td><font size='6'><strong><center>$wb[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$eb[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$fb[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$ab[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$cb[0]</center></strong></font></td>";
echo "</center></table>";
echo "<br>";
// Total
// Page Generation
echo "<font style='color:white'>This page was generated on $today, at $now, to view an updated version of the page, refresh your browser.</font>";
?>