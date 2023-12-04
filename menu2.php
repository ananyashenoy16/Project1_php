<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}

 ?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="images/logo.png"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Document</title>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
            />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
        <link href="style1.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
        <script src="oo.js" defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <!-- <a href="#"><img src="images/navlogo.png" alt="sushi"></a> -->
                    <div class="head">
                <h1> 
                <?php 
                echo $_SESSION['username'];
                ?>
            </h1>
        
            </div>
                </div>
                <div class="nav-link">
                    <ul>
                    <li class="cc" ><a href="teacher.php">HOME</a></li>
                    <li class="cc" ><a href="menu2.php">MENU</a></li>
                    <li class="cc" ><a href="about1.html">ABOUT</a></li>
                    <li class="cc" ><a href="ctact.html">CONTACT</a></li>
                    <a href="logout.php"> <button>LOG OUT</button></a>
                    </ul>
                </div>
                <img class="menup" src="images/Capturejk.PNG" alt="sushi">
            </nav>
       
      
            <!-- <img class="iml" src="images/welcome.png" alt="">
            <p class="texts">Menu</p> -->
        </header>
      
        <section class="price_section layout_padding">
          <center> <h1>Teacher's Menu</h1></center>
        
            <div class="container"><section class="main_menu">
                <button class="menu_btn" onclick="filterSelection('sushi')">Breakfast</button>
                <button class="menu_btn" onclick="filterSelection('salade')">Meals</button>
                <button class="menu_btn" onclick="filterSelection('all')">Snacks</button>
            </section>

            <div class="heading_container">
            </div>
            <div class="price_container">
               

                
                    <div class="filterDiv sushi">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Veg Meals
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style="border-radius: 30%;"
                            src="https://cdn.pixabay.com/photo/2016/03/05/22/29/asian-1239294_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>90.00</span>
                        </h5>
                        <a onclick="buy(0)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                    <div class="filterDiv sushi">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Carrot Crunch Roll
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="images/Sushi-PNG-Image (1).png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="buy(1)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                    <div class="filterDiv sushi">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Zen Garden Roll
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="images/Sushi-PNG-Image (1).png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>$20.00</span>
                        </h5>
                        <a onclick="buy(2)" >
                            Buy
                        </a>
                    </div>
                </div></div>
                
                    <div class="filterDiv salade">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Spinach Sensation Roll
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style="border-radius: 100%;"
                            src="https://cdn.pixabay.com/photo/2023/10/09/04/19/samosa-8303211_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>$70.00</span>
                        </h5>
                        <a onclick="buy(3)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                    <div class="filterDiv salade">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Teriyaki Mushroom Marvel Roll
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="images/Sushi-PNG-Image (1).png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="buy(4)">
                            Buy
                        </a>
                    </div>
                    </div>
                </div> 
                    <div class="filterDiv salade"><div class="box">
                    <div class="name">
                        <h6>
                            Quinoa Harvest Roll
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="images/Sushi-PNG-Image (1).png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>20.00</span>
                        </h5>
                        <a onclick="buy(5)">
                            Buy
                        </a>
                    </div>
                </div>
                </div>
            
            </div>
        </div>
        </section>
        <section class="main_menu">
            <img class="imga" src="images/vcg.png" alt="">
            <div class="khlass">
                <div class="inpo">
        
            
                        <p>Your Bill</p>
                      </div>
                    <input style="width:100% ;" id="bill" type="text"  class="billu"  value="ORDER:">
                    <input style="width:100% ;" id="bil" type="text" class="billu" value="PRICE:">
                    <input  style="width:100% ;" id="total" type="text" class="billu" value="CONFIRM TOTAL:">
                    <button class="confi" onclick="Total()">calculate</button>

                </div>
            </div>
        </section>

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
                                            Address
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info_contact">
                                    <a href="">
                                        <img src="images/phone.png" alt="">
                                        <span>
                                            +91 7760803967
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info_contact">
                                    <a href="">
                                        <img src="images/mail.png" alt="">
                                        <span>
                                            cancafe@gmail.com
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
                                    <label for="email2">Enter Your Email</label>
                                    <input type="text" id="email2">
                                </div>
                                <div>
                                    <button>
                                        subscribe
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
        const menuHamburger = document.querySelector(".menup")
        const navLink = document.querySelector(".nav-link")
    
        menuHamburger.addEventListener('click',()=>{
        navLink.classList.toggle('menum')
        })
    </script>
</html>