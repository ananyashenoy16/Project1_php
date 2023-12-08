<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.html');
}

 ?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="favicon-32x32.png"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Teacher's Menu</title>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
            />
            <script src="https://kit.fontawesome.com/b7a08da434.js" crossorigin="anonymous"></script>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
        <link href="style1.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
        <script src="oo.js" defer></script>
        <style>
            .active{
                background-color: #ff4b2b;
            }
        </style>
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
                    <i class="fa-solid fa-xmark close" style="color: #ffffff;" onclick=""></i>
                    <li class="cc" ><a href="teacher.php">HOME</a></li>
                    <li class="cc" ><a href="menu2.php">MENU</a></li>
                    <li class="cc" ><a href="about2.html">ABOUT</a></li>
                    <!-- <li class="cc" ><a href="ctact.html">CONTACT</a></li> -->
                    <a href="logout.php"> <button>LOG OUT</button></a>
                    </ul>
                </div>
                <img class="menup" src="images/Capturejk.PNG" alt="sushi">
            </nav>
        </header>
      
        <section class="price_section layout_padding">
          <center> <h1>Teacher's Menu</h1></center>
        
            <div class="container">
                <section class="main_menu">
                <button class="menu_btn myfood" onclick="filterSelection('veg')">Veg</button>
                <button class="menu_btn" onclick="filterSelection('non')">Non-Veg</button>
                <button class="menu_btn" onclick="filterSelection('special')"> Can-cafe Special</button>
            </section>

            <div class="heading_container">
            </div>
            <div class="price_container">
               
                      
                <!-- ----------veg------------ -->
                <div class="filterDiv veg">
                        <div class="box">
                    <div class="name">
                        <h6>
                            South Indian Meals
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2012/07/09/07/48/eat-52075_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(0)">
                            Buy
                        </a>
                    </div></div>
                </div>
                <div class="filterDiv veg">
                        <div class="box">
                    <div class="name">
                        <h6>
                            North Indian Meal Combo
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2017/09/09/12/09/india-2731812_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(1)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                
                <div class="filterDiv veg">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Curd Rice
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://imgs.search.brave.com/nt1YhxrIayHdEiSLtDwdzBKu6ALGPhFvrE3BwhnJSTk/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jLm5k/dHZpbWcuY29tLzIw/MjMtMDIvZzg1NWE1/NG9fYmVldHJvb3Qt/Y3VyZC1yaWNlXzYy/NXgzMDBfMDRfRmVi/cnVhcnlfMjMuanBn/P2ltPUZhY2VDcm9w/LGFsZ29yaXRobT1k/bm4sd2lkdGg9NjIw/LGhlaWdodD0zNTA" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(2)">
                            Buy
                        </a>
                    </div></div>
                </div>
                <div class="filterDiv veg">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Biryani
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2022/02/12/15/00/biryani-7009110_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(3)">
                            Buy
                        </a>
                    </div></div>
                </div>  
                <div class="filterDiv veg">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Fried Rice
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2022/06/27/05/37/biryani-7286737_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(4)">
                            Buy
                        </a>
                    </div></div>
                </div> 
              
                <div class="filterDiv veg">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Noodles
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2019/08/30/09/17/noodles-4440831_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(4)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                <!-- -------------- non-veg-------------------- -->
                <div class="filterDiv non">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Chilli chicken
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="https://cdn.pixabay.com/photo/2020/08/07/19/19/chili-chicken-5471404_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="tbuy(5)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                    <div class="filterDiv non">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Prawns curry
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style=" width: 200px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2013/06/13/14/17/shrimp-139166_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>90.00</span>
                        </h5>
                        <a onclick="tbuy(6)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                <div class="filterDiv non">
                        <div class="box">
                    <div class="name">
                        <h6>
                          chicken biryani
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2015/07/14/17/18/briyani-845111_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>90.00</span>
                        </h5>
                        <a onclick="tbuy(7)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                   
                    <div class="filterDiv non">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Roast chicken
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style=" width: 240px;
          height: 130px;" src="https://cdn.pixabay.com/photo/2016/11/08/10/39/chicken-1807883_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>20.00</span>
                        </h5>
                        <a onclick="tbuy(8)" >
                            Buy
                        </a>
                    </div>
                </div></div>
                
                    <div class="filterDiv non">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Chicken meals
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2017/09/09/12/09/india-2731817_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="tbuy(9)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                  <!-- ---------------can-cafe special------------- -->
                <div class="filterDiv special">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Jalebi
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2015/06/23/05/23/fresh-jalebi-818316_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="tbuy(10)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                <div class="filterDiv special">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Dhoklas
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2017/01/10/18/00/indian-1969797_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="tbuy(11)">
                            Buy
                        </a>
                    </div></div>
                </div>
                <div class="filterDiv special">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Rasgulla
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                         src="https://cdn.pixabay.com/photo/2014/12/22/12/33/sweets-577230_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="tbuy(12)">
                            Buy
                        </a>
                    </div>
                    </div>
                </div> 
                <div class="filterDiv special">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Special Cookies
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2023/06/22/22/29/cookies-8082386_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>40.00</span>
                        </h5>
                        <a onclick="tbuy(13)">
                            Buy
                        </a>
                    </div></div>
                </div>
                
                <div class="filterDiv special">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Cup cake
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                        src="https://cdn.pixabay.com/photo/2017/08/06/04/16/cupcake-2588646_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>50.00</span>
                        </h5>
                        <a onclick="tbuy(14)">
                            Buy
                        </a>
                    </div>
                    </div>
                </div> 
                    <div class="filterDiv special"><div class="box">
                    <div class="name">
                        <h6>
                          Pancakes
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                        src="https://cdn.pixabay.com/photo/2017/01/16/17/42/pancake-1984712_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>90.00</span>
                        </h5>
                        <a onclick="tbuy(15)">
                            Buy
                        </a>
                    </div>
                </div>
                </div>
            
            </div>
            
        </div>
        </section>
        <section class="main_menu">
            <img class="imga" src="https://cdn.pixabay.com/photo/2023/07/12/20/40/ai-generated-8123328_1280.png" alt="">
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
                                    <button  style="border:2px solid #fff;">
                                        Submit
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
      
        // Update the filterSelection function to handle button clicks and change color
    </script>
    </script>
</html>