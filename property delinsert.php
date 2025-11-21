<?php

require 'connection.php';

$email = $_POST["email"];

$email = $con->real_escape_string($email);

$sql = "DELETE FROM property WHERE email='$email'";

if ($con->query($sql)) {
    echo '<script>   
        alert("Deleted Successfully");
        window.location.href = "Home.php";   // Redirect after successful deletion
        </script>';
} else {
    echo '<script>
        alert("Unsuccessful Try!");
        window.location.href = "property delindex.php";   // Redirect after failure
        </script>';
}

$con->close();
