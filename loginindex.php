<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--External style sheeet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loginform.css">   

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
          color:  rgb(9, 87, 80);
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
            <a class="active" href="#"> Customer Login</a>
            <a href ="#">Manager Login</a>
            <a href="feedbackindex.php">Feedbback</a>
            
    
          </div>
        </div>
        
        <div style="padding-left:20px">
         <br> <br><br><h1 id="headform">Find your future</h1>
        </div>

    
        <!-- Login form-->
         <div>
          <fieldset class="fieldset">
            
            <form action="logininsert.php" method="post">
             
            <div class="containForm">
              <label for="uname"><b>User Name</b></label>
              <input type="text" placeholder="Enter Username" name="username" required><br>

              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required><br>     

              <button type="submit" id="submit" value="submit">Login</button><br>

              <label>
                <input type="checkbox" checked="checked" name="remember" id="remember">Remember me 
              </label>
                  
              <div class="containForm" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div><br>

            </div>     <!--End of the form division area-->
            
            </form>
            
           
          </fieldset>
          

          <div class="conimg1">
            <img src="Src/loginimg 2.webp">
          </div>

        


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
            <li><a href="#">About</a></li>
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