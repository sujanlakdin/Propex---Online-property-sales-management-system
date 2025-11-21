<?php
require'connection.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql="INSERT INTO logusers VALUES('$username ','$password')";   //send data to the server

if($con->query($sql))
{
    echo "Insert Successful";

}
else{
    echo "Error".$con->error;
}

$con->close();
?>

