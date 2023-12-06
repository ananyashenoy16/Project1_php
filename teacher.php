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
    <script src="https://kit.fontawesome.com/b7a08da434.js" crossorigin="anonymous"></script>
     <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
       
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
</head>
<body>
      
       
      <header>
       
        <div class="bg-img">
          <img src="https://cdn.pixabay.com/photo/2022/05/17/05/03/vegetable-gravy-7201669_1280.jpg"  class="we" alt="">
        </div>
        <nav class="navbar">
          <div class="logo">
              <a href="#"><img src="images/welcome1.png" alt="sushi"></a>
          </div>
          <div class="nav-link" >
              <ul id="myul" >
                  <li class="cc" ><a href="student.php">HOME</a></li>
                  <li class="cc" ><a href="menu2.php">MENU</a></li>
                  <li class="cc" ><a href="about1.html">ABOUT</a></li>
                  <!-- <li class="cc" ><a href="ctact.html">CONTACT</a></li> -->
                  <a href="logout.php"> <button>LOG OUT</button></a>
              </ul>
          </div>
          <img class="menup" src="images/Capturejk.PNG" alt="sushi">
          </div>
            </div>
       
      </nav>
    
    <div class="text-box">
          <h1>CAN</h1>
          <h1 style="font-size:160px;">CAFE</h1>
    </div>
 
  </header>
 
      <div class="newbg">
      <section class="about_section layout_padding2-top layout_padding-bottom ">
      <center>
        <div >
            <h3 style=" font-size:50px ;color:#000;font-family: hedvig letters serif;">
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
                 
                  <h5 style="font-family: hedvig letters serif;font-size:20px">
                  Welcome to Can Cafe, where every cup tells a story. Nestled in the heart of [Location], our charming cafe invites you to embark on a journey of flavors and relaxation. At Can Cafe, we celebrate the art of brewing with a diverse selection of premium coffees and teas sourced from around the globe, meticulously curated to tantalize your taste buds. Whether you're seeking a tranquil spot to unwind, catch up with friends, or indulge in a moment of solitude, our warm ambiance and delectable offerings aim to create an unforgettable experience. Join us in savoring the essence of each sip as we invite you to discover the extraordinary in every cup at Can Cafe.
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
                    <button style="border:2px solid #fff;">
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
<script>
        
       
        function openMenu(){
          var nav=document.getElementById("myul");
          nav.style.right=200px;
        }
        function closemenu(){
          nav.style.right=-200px;
        }
   </script>
</html>