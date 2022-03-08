<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<!-- Font awesome link for icons version 4.7.0 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap CSS version 4.6.1 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- Custom css linked here-->
<style> <?php include 'styles/main.css'; ?></style>

        <div class="container-fluid dark-nav">  
            <div class="row">
                <!--- col code for sidebar nav -->
                <div class="col-2" style="height: 100%;">
                    <div class="categories">
                        <h5><u>Quick Links</u></h5><br><br>
                        <a href="shop.php">Shop</a><br><br>
                        <a href="cart.php">Cart</a><br><br>
                        <a href="http://localhost/ecommercewebsite/admin_area/index.php?dashboard">Admin Login</a><br><br><br></a><br><br><br><br><br>
                    </div>
                </div>
                <!-- Start of Sliders center grid -->
                <div class="col-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="images/slider/blended.PNG" class="d-block w-100" height="500px" width="960px" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/slider/grocerydelivers.PNG" class="d-block w-100" height="500px" width="960px"  alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/slider/fruitveges.png" class="d-block w-100" height="500px" width="960px" alt="...">
                          </div>
                        </div>
                    </div>
                </div>
                <!-- Start of grid at right side -->
                <div class="col-3">
                    <div class="grid-container">
                        <div class="item1"><img src="images/services/fruits.PNG" class="d-block w-100" alt="..."></div>
                        <hr>
                        <div class="item2"><img src="images/services/bouquet.PNG" class="d-block w-100" alt="..."></div>
                        <hr>
                        
                    </div>
                </div>
                <!-- end of right slider grid -->
            </div>
            
            <div class="row">
                <!-- Testimonial slider -->
                <div class="col-sm-2" style="background-color: #ffffff;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/testmonials/user3.jpg" class="centerblock team" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 style="color: green; font-size: small;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/testmonials/user3.jpg" class="centerblock team" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 style="color: green; font-size: small;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/testmonials/user3.jpg" class="centerblock team" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 style="color: green; font-size: small;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h2>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial slider ends here -->
                <hr>
                <div class="col-sm-10" style="background-color: #ffffff;">
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                        <!--Controls-->
                        <div class="controls-top">
                         <a class="btn-floating" style="color: #32CD32;" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating" style="color: #32CD32;" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls end -->
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/cupcake.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/dailydrinks.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/fastfood.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/jarspices.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/dailydrinks.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/icecream.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->
                            <!--First slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-2" >
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/jarspices.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/juice.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/icecream.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/fastfood.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/icecream.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/dailydrinks.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->
                        </div>
                        <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>
</div>

  

    <!-- Main -->
    <div class="wrapper">
      <h1>Featured Products<h1>       
    </div>



    <div id="content" class="container">

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="footer-distributed">
            <div class="footer-left">
                <h3>MercTech<span>MegaShop</span></h3>
                <p class="footer-links">
                    <a href="index.php" class="link-1">Home</a>
                    <a href="shop.php">Shop</a>
                    <a href="cart.php">Cart</a>
                </p><br>
                <p style="color: white;";><i>MercTech MegaShop Copyright &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</i></p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>P.O Box Private bag</span> 00217, Nairobi</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+254723460025</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:info@megashop.com">info@megashop.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>ABOUT US</span>
                    Merc-tech mega shop provides variety of products ata affordable price. Pay is on delivery.
                    </p>
                <div class="footer-icons">
                    <a href="https://web.facebook.com/franny.makena"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/mercy-m-a8a470127/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/mercymugambi"><i class="fa fa-github"></i></a>
                </div>
            </div>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>
