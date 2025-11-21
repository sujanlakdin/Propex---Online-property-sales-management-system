<?php

require 'connection.php';

$email = $_POST["email"];
$username = $_POST["uname"];
$rate= $_POST["rate"];
$comment = $_POST["comment"];    

if(empty($email) || empty($username || empty($rate)) || empty($rate) || empty($comment))
{
    echo "All Required";
}
else{
    $sql="UPDATE feedback set userName ='$username' , rate = '$rate' , comment = '$comment' WHERE email = '$email' ";

    if($con->query($sql))
    {
       echo '<script>
             alert("Updated Successfully!");  
             window.location.href ="Home.php"; 
             </script>';
    } 
    else
    {
        echo '<script>
             alert(" Not Updated");   
             window.location.href = "feedbackupdate index.php";    
             </script>';
    }
}