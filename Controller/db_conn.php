<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "divecamp";


$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

if(!$conn){
    echo "Connection failed";
}
