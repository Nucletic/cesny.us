<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cesny_us";

$conn = mysqli_connect("$servername", "$username", "$password", "$database");
if (!$conn) {
    echo "not connected" . mysqli_connect_error();
}