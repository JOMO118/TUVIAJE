<?php

$host="localhost";
$port=3307;
$socket="";
$user="root";
$password="1006197846";
$dbname="tuviaje";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();



?>

