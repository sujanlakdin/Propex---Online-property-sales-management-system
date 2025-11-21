<?php
require'connection.php';

$email = $_POST["email"];
$username = $_POST["uname"];
$password = $_POST["psw"];
$repassword = $_POST["psw-repeat"];

$sql="INSERT INTO registerusers VALUES('$email','$username','$password','$repassword')";    //send data to the server

if($con->query($sql))
{
    echo "Insert Successful";
}
else{
    echo "Error".$con->error;
}
$con->close();
?>