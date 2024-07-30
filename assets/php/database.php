<?php

$mysqli = new mysqli("localhost", "root", "", "nostrum");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "connected successfully";
}

$fullname = $_POST['fullname'];
$password = $_POST['password'];
$gmail = $_POST['gmail'];

$query = "INSERT INTO `users`(`fullname`,`password`, `gmail`) VALUES ('$emp_name','$password','$gmail')";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    $_SESSION['fullname'] = $fullname;

    //get the data from db
    while ($obj = $result->fetch_object()) {
        $_SESSION['fullname'] = $obj->fullname;
    }

    header("Location: page1.php");
} else {
    
  echo "<script>alert('Invalid username or password')</script>";

  header("Location: index.php");
}   
$mysqli->close();
?>

