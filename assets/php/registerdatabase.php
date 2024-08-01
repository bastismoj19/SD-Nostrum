<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "nostrum");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$fullname = $_POST['fullname'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];

$checkQuery = "SELECT * FROM `users` WHERE `gmail` = '$gmail'";
$checkResult = $mysqli->query($checkQuery);

if ($checkResult->num_rows > 0) {
    echo "<script>
            alert('Email already exists');
            window.location.href = '../../index.php';
          </script>";
} else {
    echo "<script>
            alert('Registered Successfully!');
            window.location.href = '../../index.php';
          </script>";
          
    $query = "INSERT INTO `users`(`fullname`,`gmail`, `password`) VALUES ('$fullname','$gmail','$password')";
    $result = $mysqli->query($query);

    

    if ($result) {
        $_SESSION['fullname'] = $fullname;

        $userQuery = "SELECT * FROM `users` WHERE `gmail` = '$gmail'";
        $userResult = $mysqli->query($userQuery);
        while ($obj = $userResult->fetch_object()) {
            $_SESSION['fullname'] = $obj->fullname;
        }

        header("Location: ../../index.php");
    } else {
        echo "<script>
            alert('Invalid username or password');
            window.location.href = '../../index.php';
          </script>";
    }
}

$mysqli->close();
?>
