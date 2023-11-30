<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}

 ?>  
   
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Menu</title>
    <link rel="stylesheet" href="style1.css">
     <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
       
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <style>
        .btn{
            border:3px;
            color:white;
            background-color:#fff;
        }
    </style>
</head>
<body>
      
       
      <header class="welcome">
       
        <div class="bg-img">
          <img src="images/mymai.jpg"  class="we" alt="">
        </div>
        <nav class="navbar">
          <div class="logo">
              <a href="#"><img src="images/welcome1.png" alt="sushi"></a>
          </div>
          <div class="nav-link">
              <ul >
                  <li class="cc" ><a href="index.html">HOME</a></li>
                  <li class="cc" ><a href="menu.php">MENU</a></li>
                  <li class="cc" ><a href="about.html">ABOUT</a></li>
                  <li class="cc" ><a href="ctact.html">CONTACT</a></li>
                  <a href="logout.php"> <button>LOG OUT</button></a>
              </ul>
          </div>
          <img class="menup" src="images/Capturejk.PNG" alt="sushi">
      
      </nav>
          <div class="overlay">
           <!-- <img class="iml" src="images/homelogo1.png" alt=""> -->
                  <!-- <p class="texts">CAN CAFE</p> -->
                </div>   
      </header>
      
      <div class="newbg">
      <section class="about_section layout_padding2-top layout_padding-bottom ">
      <center>
        <div >
            <h3 style=" font-size:50px ;color:#000">
                " There's no one to stop when your hungry " 
            </h3>
          </div>
        </center>
          <div class="container">
            <div class="row">
             
              <div class="col-md-6">
                <div class="img-box">
                  <img style="border-radius: 20px;" src="images/thali.webp" alt="">
                </div>
              </div>
               <div class="col-md-6">
                <div class="detail-box">
                 
                  <h5>
                    Good food is more than just sustenance; it's a sensory experience that nourishes both the body and the soul. The aroma of a well-seasoned dish can evoke memories and stir emotions. The vibrant colors on a plate can be a feast for the eyes, enticing and inviting. Each bite holds the potential to transport us to different corners of the world, introducing us to diverse cultures and culinary traditions. Beyond the pleasurable taste, good food has the power to bring people together, fostering connections and creating cherished moments. 
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </section>      
       
        <section class="price_section layout_padding">
          <CENter>
            <h3 style="color:#000 ;">
              WE ARE FAMOUS FROM  AGES FOR ...!!!
          </h3>
          </CENter>
          <div class="container">
            <div class="heading_container">
            </div>
            <div class="price_container">
             
              <div class="box">
                
                <div class="img-box">
                  <img style="border-radius: 100%;" src="images/golibaje.webp" alt="">
                </div>
                <hr> 
                <div class="detail-box">
                   <h6>
                          GOLI BAJE
                   </h6>
               
                 
                </div>
              </div>    
              <div class="box">
                
                  <div class="img-box">
                    <img style="border-radius: 100%;" src="images/dose.webp" alt="">
                  </div>
                  <hr>
                  <div class="detail-box">
            
                     <h6>
                            MASALA DOSA
                     </h6>
                 
                   
                  </div>
                </div>    
                <div class="box">
                
                  <div class="img-box">
                    <img style="border-radius: 100%;" src="images/naan.webp" alt="">
                  </div>
                  
                  <div class="detail-box">
            
                     <h6>
                            BUTTER NAAN COMBO
                     </h6>
                 
                   
                  </div>
                </div>     
          </div>
        </section>  
      </div>         
      <footer>
        <section class="info_section ">
          <div class="container">
            <div class="info_container">
              <div class="row">
                <div class="col-md-3">
                  <div class="info_logo">
                    <a href="">
                      <img src="images/dim.png" alt="">
                      
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info_contact">
                    <a href="">
                      <img src="images/location.png" alt="">
                      <span>
                        MANGLORE
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info_contact">
                    <a href="">
                      <img src="images/phone.png" alt="">
                      <span>
                        +91 935384110
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info_contact">
                    <a href="">
                      <img src="images/mail.png" alt="">
                      <span>
                        Cancafe@gmail.com
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="info_form">
                <div class="d-flex justify-content-center">
                  <h5 class="info_heading">
                    FEEDBACK
                  </h5>
                </div>
                <form action="">
                  <div class="email_box">
                    <label for="email2">ENTER YOUR FEEDBACK HERE</label>
                    <input type="text" id="email2">
                  </div>
                  <div>
                    <button>
                      SUBMIT
                    </button>
                  </div>
              
                 
                </form>
              </div>
              <div class="info_social">
                <div class="d-flex justify-content-center">
                  <h5 class="info_heading">
                    Follow Us
                  </h5>
                </div>
                <div class="social_box">
                  <a href="">
                    <img src="images/fb.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/insta.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        <!-- end info_section -->
      
        <!-- footer section -->
        <section class="container-fluid footer_section">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved
          </p>
        </section>
        </footer>
        

   
</body>
</html>