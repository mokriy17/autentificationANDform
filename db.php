<?php
$servername = "test";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connected successfully";
}