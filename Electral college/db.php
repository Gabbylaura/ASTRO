<?php
$servrname ="localhost";
$dbusername = "root";
$dbpass ="";
$dbname ="astro";

$conn = mysqli_connect($servrname,$dbusername,$dbpass,$dbname);

if (!$conn) {
	die("connection failed :".mysql_connect_error());
}
if($conn)
{
	echo "connection successful";
}