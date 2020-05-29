<?php 
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password,"try1");
if (!$con) {
    die("db is not connected ". mysqli_connect_error());
}