<?php

$mysqli = new mysqli("localhost", "root", "", "logindb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connect na bai";
}

$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = $mysqli->query($query);

$mysqli->close();
?>
