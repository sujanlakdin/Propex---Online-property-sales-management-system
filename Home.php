<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--External style sheeet-->
    <link rel="stylesheet" href="style.css">
    

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
            <a class="active" href="#">Home</a>
            <a href="property.php">Properties</a>
            <a href="aboutus.php">About</a>
            <a href="Registerindex.php">Register</a>
            <a href="loginindex.php">Customer Login</a>
            <a href ="Managerindex.php">Manager Login</a>
            <a href="feedbackindex.php">Feedbback</a>
    
          </div>
        </div>
        <!--First  cover image-->
        <div class="coverimg"><br>
          <img src="Src/21072115074910.jpg" alt="sun-set">
        </div>
        <div class="Content">
          <br><h2>Find Your Dreams</h2>
        </div>

        <div class="container">
          <!-- Card 1 -->
          <div class="card">
            <img src="Src/card1.jpg" alt="Card Image">
            <h3>Kaduwela</h3>
            <p id="cd">292,500 LKR</p><br>
            <p>PER PERCH UPWARDS</p>
            <a href="property.php">See More</a>
          </div>
          <!-- Card 2 -->
          <div class="card">
            <img src="Src/card2.jpg" alt="Card Image">
            <h3>Panadura</h3>
            <p id="cd">123,000 LKR</p><br>
            <p>PER PERCH UPWARDS</p>
            <a href="property.php">See More</a>     
          </div>
          <!-- Card 3 -->
          <div class="card">
            <img src="Src/card3.jpg" alt="Card Image">
            <h3>Galle</h3>
            <p id="cd">123,400 LKR</p><br>
            <p>PER PERCH UPWARDS</p>
            <a href="property.php">See More</a>
          </div>
          <!-- Card 4 -->
          <div class="card">
            <img src="Src/card4.jpg" alt="Card Image">
            <h3>Colombo-7</h3>
            <p id="cd">345,800 LKR</p><br>
            <p>PER PERCH UPWARDS</p>
            <a href="property.php">See More</a>
          </div>
          <!-- Card 5 -->
          <div class="card">
            <img src="Src/card5.jpg" alt="Card Image">
            <h3>Gampaha</h3>
            <p id="cd">235,000 LKR</p><br>
            <p>PER PERCH UPWARDS</p>
            <a href="property.php">See More</a>
          </div>
          <!-- Card 6 -->
          <div class="card">
            <img src="Src/card6.jpg" alt="Card Image">
            <h3>Malabe</h3>
            <p id="cd">325,650 LKR</p><br>
            <p>PER PERCH UPWARDS</p><br>
            <a href="property.php">See More</a>
          </div>
        </div><br>
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
            <li><a href="aboutus.php">About</a></li>
            <li><a href="#">Agents</a></li>
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