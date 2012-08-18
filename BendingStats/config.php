<?php
$connect_error = 'Could not connect to the database!';

// Server Name
$servername = 'INSERT YOUR SERVER NAME';
// Database Information
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'pass';
$mysql_db = 'minecraft';
// Shouldn't have to change the table name.
$mysql_table = 'bending_element';


if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_db)) {
	die($connect_error);
}
?>