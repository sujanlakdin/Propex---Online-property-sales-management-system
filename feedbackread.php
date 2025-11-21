<?php
require 'connection.php';

$sql = "SELECT email, userName, rate, comment FROM feedback";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Add CSS for table, header, and footer
    echo "
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }

        /* Header CSS */
        * {box-sizing: border-box;}
        
        body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .header {
          overflow: hidden;
          background-color: rgba(56, 113, 94, 0.244);
          padding: 20px 10px;
        }
        
        .header a {
          float: left;
          color: rgb(9, 87, 80);
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 18px; 
          line-height: 25px;
          border-radius: 4px;
        }
        
        .headlogo {
            width: 10%;
            height: auto;
        }
        
        .header a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .header a.active {
          background-color: #0ab38b;
          color: white;
        }
        
        .header-right {
          float: right;
        }
        
        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }
          
          .header-right {
            float: none;
            text-align: center;
          }
        }
    </style>
    ";

    // Add header content
    echo "<div class='header'>  
            <img src='Src/img10.jpg' class='headlogo'>
            <div class='header-right'>  
                <a href='#'>Home</a>
                <a href='#prop'>Properties</a>
                <a href='aboutus.php'>About</a>
                <a href='Registerindex.php'>Register</a>
                <a href='loginindex.php'>Customer Login</a>
                <a href='Managerindex.php'>Manager Login</a>
                <a class='active' href='feedbackindex.php'>Feedback</a>
            </div>
          </div>";

    echo"<br>";      

    // Add table content
    echo "<table>";
    echo "<tr>
            <th>Email</th>
            <th>User Name</th>
            <th>Rate</th>
            <th>Comment</th>
             
          </tr>";   
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["email"] . "</td>
                <td>" . $row["userName"] . "</td>
                <td>" . $row["rate"] . "</td>
                <td>" . $row["comment"] . "</td>
               
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No results";
}


$con->close();
?>
