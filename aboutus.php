<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>About Us</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--External style sheeet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="aboutus.css">
    

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
            <a href="Home.php">Home</a>
            <a href="#prop">Properties</a>
            <a class="active" href="#about">About</a>
            <a href="Registerindex.php">Register</a>
            <a href="loginindex.php">Customer Login</a>
            <a href ="#">Manager Login</a>
            <a href="#">Feedback</a>
    
          </div>
        </div>

        <!--About Us content -->
        <h1>About Us</h1>
        <fieldset id = "fieldset1">    
            <div class = "content1">
                <img Src ="Src/istockphoto-1217326323-612x612.jpg" alt="lotus-tower" class="contimg">
                <br><h2 id="para1">Propex Lands,<br>
                  We visit Sri Lnakas' Best Places for you...<br>
                  Try to find your dream with us.
                  Discover your perfect sanctuary among the finest homes we offer.
                  We uncover the best scenic spots just for you.
                  Experience the joy of living in Sri Lanka's most exclusive locations.
                  Explore unmatched living spaces tailored to your desires.
                  Embark on a journey to serenity and luxury with us.

                  
                  
                  <h2> 
            </div>    
        </fieldset>        

      <!--About Us content part 2 -->

    <div class="about-section">
  <h1>Our Vision & Mission</h1>
  <p id="p1">Our vision is to revolutionize the property sales experience by creating a seamless, transparent, and accessible platform where buyers and sellers can connect efficiently. We aim to make finding a dream property simple and stress-free for everyone.</P>
<p id="p1">Our mission is to provide a user-friendly online platform that empowers individuals to explore, buy, and sell properties with confidence. Through innovative technology, we strive to deliver trust, convenience, and exceptional service at every step of the property sales journey..</p>
  
</div>
<br>
<h1>Our Team</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Src/young-confused-male-office-worker-suit-holding-documents-isolated-dark-wall.jpg" alt="Supun" style="width:100%">
      <div class="container">
        <h2>Rocky Pas</h2>    
        <p class="title">CEO & Founder</p>
        <p>Ruhunu Hospitals Owner.</p>
        rocky793@gmail.com
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Src/director.jpg" alt="Mike" style="width:100% ">     
      <div class="container">
        <h2>Mike Anthony</h2>                  
        <p class="title">Director</p>
        <p>25 years experiences</p>
         mike23@gmail.com
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Src/cheerful-businessman-eyeglasses-office.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Manager</p>
        <p>15 years experiences</p>
        john12@gmail.com
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
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
            <li><a href="contact.php">Contact</a></li>
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
