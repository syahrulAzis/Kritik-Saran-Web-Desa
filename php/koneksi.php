<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "desa";
//Creat coonection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
//Check connection
if (!$conn){
    die("connection failed : " . mysqli_connect_error());
}
?>