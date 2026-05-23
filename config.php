<?php

$host = "mysql.railway.internal";
$user = "root";
$password = "mYRCSrTvMkTjNfdOUexxuffnYbQuVkVr";
$database = "railway";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
