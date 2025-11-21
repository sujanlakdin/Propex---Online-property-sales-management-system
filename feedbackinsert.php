<?php
require'connection.php';

$email = $_POST["email"];
$username = $_POST["uname"];
$rate= $_POST["rate"];
$comment = $_POST["comment"];                     

$sql="INSERT INTO feedback VALUES('$email','$username','$rate','$comment')";    //send data to the server

if($con->query($sql))
{
    echo '<script>
    alert("Feedback added Successfully");
    window.location.href = "Home.php";   // Redirect after successful deletion
    </script>';

}
else{
    echo '<script>
    alert("Feedback added Unsuccessfully");
    window.location.href = "feedbackindex.php";   // Redirect after successful deletion
    </script>'.$con->error;
}

$con->close();




































?>