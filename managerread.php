<?php
require 'connection.php';

$sql = "SELECT gmail, name, userPassword, repeatPassword FROM registerusers";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border = '2'>";


    while ($row = $result->fetch_assoc()) {
        echo"<tr>";
        echo "<td>".$row["gmail"] . "</td>" ."<td>". $row["name"] . "</td>" ."<td>".$row["userPassword"] . "</td>" ."<td>".$row["repeatPassword"] . "</td>";
        echo"</tr>";
    }

    echo "</table>";


} else {
    echo "No results";
}

$con->close();
?>
