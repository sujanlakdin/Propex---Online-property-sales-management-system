<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Update Feedback</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--External style sheeet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="feedback.css">
    

    <!--Copy external tag link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
     integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <style>
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
        
        .headlogo{
            width: 10%;
            height: auto;
            margin-right:511px;
 
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
        </head>
        <body>

            <!-- Header -->
        <div class="header">
          <img src="Src/img10.jpg" class="headlogo">
          <div class="header-right">
            <a href="Home.php">Home</a>
            <a href="#prop">Properties</a>
            <a href="aboutus.php">About</a>
            <a href="Registerindex.php">Register</a>
            <a href="loginindex.php"> Customer Login</a>
            <a class="active" href="#">Feedbback</a>
    
          </div>
        </div>

        <!-- Feedback form -->
        <fieldset class="fieldset">
    <form action="feedbackupdate.php" method="post">           
        <div class="regcontain">
            <h1>Feedback Update</h1><br>
            <p>You can update your feedback</p>   
            <hr>        

            <label for="email"><b>Email</b></label>
            <input type="text" name="email" id="email" required><br>

            <label for="uname"><b>User-Name</b></label>
            <input type="text" name="uname" id="uname" required><br>

            <label for="rate"><b>Rate Us</b></label><br>
            <select name="rate" id="rate" required>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="weak">Weak</option>
                <option value="very weak">Very Weak</option>
            </select><br><br>   
            
            <label for="comment" id="commenttext"><b>Add your comment</b></label> <br>
            <textarea name="comment" id="comment" rows="4" cols="50"></textarea><br>
            
            <button type="submit" class="registerbtn">Update</button>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>

        



            
        </div>
    </form>             

    <div class="conimg">
    </div>
</fieldset>













         <!-- Footer -->
      <footer>
         <div class="footerContainer">
          <div class="socialIcons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>

         <div class="footerNav">
          <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="#">Properties</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="Registerindex.php">Register</a></li>
            <li><a href="loginindex.php">Login</a></li>
          </ul>
         </div>

         

         </div>
         <div class="footerBottom">
          <p>Copyrigth &copy;2024 Designed by <span class="designer">Propex (PVT).LTD</span></p>
         </div>
      </footer>


         
          

    

          

  


    
</body>
</html>
