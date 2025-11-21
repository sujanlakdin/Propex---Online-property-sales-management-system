<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Properties</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--External style sheeet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="property.css">  
    

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
            <a class="active" href="propertyindex.php">Properties</a>
            <a href="aboutus.php">About</a>
            <a href="Registerindex.php">Register</a>
            <a href="loginindex.php">Customer Login</a>
            <a href ="Managerindex.php">Manager Login</a>
            <a href="feedbackindex.php">Feedbback</a>
    
          </div>
        </div>


    <section class="property-list">
        <!-- Property Card 1 -->
        <div class="property-card">
            <img src="Src/card1.jpg" alt="Property 1" class="property-image">
            <h2>Modern Apartment</h2>
            <p class="price">$1,200/month</p>
            <p class="description">A cozy 2-bedroom apartment located in the heart of the city.</p>
            <button class="btn">View Details</button>
        </div>

        <!-- Property Card 2 -->
        <div class="property-card">
            <img src="Src/card2.jpg" alt="Property 2" class="property-image">
            <h2>Luxury Villa</h2>
            <p class="price">$5,000/month</p>
            <p class="description">A stunning 5-bedroom villa with a private pool and garden.</p>
            <button class="btn">View Details</button>
        </div>

        <!-- Property Card 3 -->
        <div class="property-card">
            <img src="Src/card3.jpg" alt="Property 3" class="property-image">
            <h2>Cozy Cottage</h2>
            <p class="price">$800/month</p>
            <p class="description">A charming cottage in a peaceful suburban neighborhood.</p>
            <button class="btn">View Details</button>
        </div>

        <!-- Property Card 4 -->
        <div class="property-card">
            <img src="Src/card4.jpg" alt="Property 4" class="property-image">
            <h2>Beachside Bungalow</h2>
            <p class="price">$2,000/month</p>
            <p class="description">A picturesque bungalow with stunning ocean views and beach access.</p>
            <button class="btn">View Details</button>
        </div>

        <!-- Property Card 5 -->
        <div class="property-card">
            <img src="Src/card5.jpg" alt="Property 5" class="property-image">
            <h2>Urban Loft</h2>
            <p class="price">$1,500/month</p>
            <p class="description">A stylish loft with modern amenities in the downtown area.</p>
            <button class="btn">View Details</button>
        </div>

        <!-- Property Card 6 -->
        <div class="property-card">
            <img src="Src/card6.jpg" alt="Property 6" class="property-image">
            <h2>Mountain Cabin</h2>
            <p class="price">$900/month</p>
            <p class="description">A rustic cabin surrounded by scenic mountains and hiking trails.</p>
            <button class="btn">View Details</button>
        </div>
    </section>


    
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