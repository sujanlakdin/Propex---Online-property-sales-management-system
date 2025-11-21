<?php

require 'connection.php';

$email = $_POST["email"];            //Methana danne athanin post wena tika
$username = $_POST["uname"];
$password= $_POST["psw"];
$details = $_POST["idetails"];   
$image = $_POST["image"];     

if(empty($email) || empty($username || empty($password)) || empty($details) || empty($image))
{
    echo "All Required";
}
else{
    $sql="UPDATE property set userName ='$username' , password = '$password' , details = '$details' , image = 'image' WHERE email = '$email' ";

    if($con->query($sql))
    {
       echo '<script>
             alert("Updated");   
             </script>';
    } 
    else
    {
        echo '<script>
             alert(" Not Updated");      
             </script>';
    }
}