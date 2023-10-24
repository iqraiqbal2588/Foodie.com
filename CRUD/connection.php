<?php
$server="localhost";
$user= "root";
$password= "";
$db="crud";

$conn= new mysqli("$server", "$user", "$password", "$db");

if(!$conn){

    die("connection unsuccessful".mysqli_error());
}

?>
