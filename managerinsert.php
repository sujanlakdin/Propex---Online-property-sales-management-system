<?php
require 'connection.php'; 


$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM managers WHERE email = '$email' AND password = '$password'"; 
   
$result = $con->query($sql);


if ($result->num_rows > 0) { 
    echo '<script>
        alert("Login Successful");
        window.location.href = "Home.php"; // Redirect to another page after success
        </script>';    
} else {
    
    echo '<script>
        alert("Invalid Email or Password");
        window.location.href = "managerindex.php"; // Redirect back to the login page
        </script>';
}

$con->close(); // Close the database connection
?>
