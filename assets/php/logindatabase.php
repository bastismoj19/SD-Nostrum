<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "nostrum");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$gmail = $_POST['gmail'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$query = "SELECT * FROM users WHERE gmail='$gmail' AND password='$password'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    $_SESSION['gmail'] = $gmail;

    //get the data from db
    while ($obj = $result->fetch_object()) {
        $_SESSION['fullname'] = $obj->emp_name;
    }

    echo "<script>
            alert('Login Successfully!');
            window.location.href = '../../dashboard.php';
          </script>";
} else {
    
    echo "<SCRIPT>alert('Invalid Gmail or Password'); window.location.href='../../index.php';</SCRIPT>";
    
}

$mysqli->close();
?>
