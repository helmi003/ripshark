<?php 
    session_start();
    $data=mysqli_connect("localhost", "root", "", "ripshark");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>RipShark Store</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="../Home7.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php?type=tw">Top Wear</a></li>
                                                    <li><a href="shop.php?type=bw">Bottom Wear</a></li>
                                                    <li><a href="shop.php?type=suit">Suits</a></li>
                                                    <li><a href="shop.php?type=hat">Hats</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Boards & Equipement</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php?type=board">Boards</a></li>
                                                    <li><a href="shop.php?type=eqp">Equipements</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php?type=bag">Bags</a></li>
                                                    <li><a href="shop.php?type=sunglass">Sunglasses</a></li>
                                                    <li><a href="shop.php?type=other">Others...</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">checkout</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <?php 
                        if(!empty($_SESSION["mail"])){
                            if($_SESSION["mail"]==true){
                                $mail=$_SESSION["mail"];

                                $sql1="SELECT * FROM user where mail='$mail'";
                                $result1 = mysqli_query($data, $sql1);  
                                if(mysqli_num_rows($result1) > 0){  
                                    while($row = mysqli_fetch_array($result1)){
 
                        ?>
                                        <a class="link" href="../../formclient/account/account.php"><img src="<?php
                                        if($row["pdp"]==""){
                                            echo "../../assets/no-image.png";
                                        }
                                        else{
                                            echo "../../assets/".$row["pdp"];
                                        }
                                        ?>" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                        <?php
                                    }
                                }else{
                                    ?>
                                    <a class="link" href="../../formclient/account/signout.php"><img src="../../assets/no-image.png" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                                    <?php
                                        }
                            }}else{
                        ?>
                        <a class="link" href="../../formclient/account/signout.php"><img src="../../assets/no-image.png" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> RipShark</strong></h1>
                            <p class="m-b-40">Here you can  find all what you need from<br> gear , chlothes , suit ...etc</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> RipShark</strong></h1>
                            <p class="m-b-40">Hope you find all what you need <br> or you can contact us either way</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> RipShark</strong></h1>
                            <p class="m-b-40">Free Shipping & Returns for Loyal Members <br> have a great day ^^</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/short.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?type=bw">shorts</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/shirt-img.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?type=tw">T-Shirts</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/boards.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?type=board">boards</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/bag.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?type=bag">Bags</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/sunglasses.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?type=sunglass">Sunglasses</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/hats.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?type=hat">Hats</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

   <!-- Start Footer  -->
   <footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>About RipShark</h4>
                        <p>It's a website about surfing : kitesurfing , skimsurfing(boardsurfing) and windsurfing , Where you can join , learn or buy stuff from these categories . It's made by a fan that is called Helmi .<br>It's made with love . Hope you enjoy our website ❤</p>
                        <ul>
                            <li><a href="https://www.facebook.com/helmi.benromdhane.9/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/helmibenromdha8"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/helmi_b.r/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.whatsapp.com/helmi_b.r"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Informations</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Delivery Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: dar chaaben el fehri ,<br> nahj monsof bey,<br> 8011 Nabeul(Tunis) </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+216-20499382">+216-20 499 382</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:helmi.br1999@gmail.com">helmi.br1999@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="../Home7.php">RipShark</a>, Design by : <a href="mailto:helmi.br1999@gmail.com">Helmi ben romdhane</a></p>
</div>
<!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>