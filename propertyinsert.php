<?php
require 'connection.php';

$email    = $_POST["email"];
$username = $_POST["uname"];
$password = $_POST["psw"];
$details  = $_POST["idetails"];
$image    = $_POST["image"];    

$sql = "INSERT INTO property (email, username, password, details, image) VALUES ('$email', '$username', '$password', '$details', '$image')";

if ($con->query($sql) === TRUE) {
    echo '<script>
    alert("Successfully added");
    window.location.href = "property.php";
    </script>';

} else {
    echo 'error: ' . $con->error; // Optional: remove `$con->error` for production
}

$con->close();
?>
