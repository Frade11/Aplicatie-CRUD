<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "colegiu";
$conection = mysqli_connect($hostname,$username,$password) or die ("Cant connect to database");

mysqli_select_db($conection, $database) or die ("Can't find database");
?>