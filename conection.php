<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "colegiu";
$conection = mysqli_connect($hostname,$username,$password) or die ("Cant connect to database");

if(!$conection){
    die (("Cand find database").mysqli_connect_error());
};
?>