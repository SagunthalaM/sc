<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="udemy";
//connection to database 
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {
    die("Database connection failed!");
}
























?>