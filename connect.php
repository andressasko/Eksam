<?php
//connect.php
global $connection;
$server = 'localhost';
$username   = 'test';
$password   = 't3st3r123';
$database   = 'test';
$connection = mysqli_connect($server, $username, $password, $database) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

?>