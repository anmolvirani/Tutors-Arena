<?php

$server = "localhost";
$username = "root";
$password = "";

$database = "dbmentors";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
// {
//     echo "Successfully connected";
// }
// else
// {
    die("error".mysqli_connect_error());
}




?>