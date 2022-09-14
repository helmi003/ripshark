<?php 
    session_start();
    $data=mysqli_connect("localhost", "root", "", "ripshark");
    if(isset($_POST['addcart'])){
        if($_SESSION["mail"]==true){
            $sql1="SELECT * FROM cart";
	        $result1=mysqli_query($data,$sql1);
            $id_cart=mysqli_num_rows($result1)+1;
            $id=$_GET["id"];
            $mail=$_SESSION["mail"];
            $nb=0;
            if(mysqli_num_rows($result1) >= 0){  
                while($row1 = mysqli_fetch_array($result1)){
                    if(($mail==$row1['mail'])&&($id==$row1['id'])){ $nb=$nb+1;}
                }
            }
            if($nb==0){
                $sql2="INSERT INTO cart (id_cart, id, mail) VALUES ('$id_cart', '$id', '$mail')";
	            if (mysqli_query($data, $sql2)){
                    echo '<script type="text/javascript">alert("Successfuly Aded")</script>';
                }
            }
            else{
                echo '<script type="text/javascript">alert("you have this product in your cart");</script>';
            }
        }else{
            echo '<script type="text/javascript">alert("You need to Connect first");window.location ="../../formclient/signin/Formc.php"</script>';
        }
    }

    if(isset($_POST['wishlist'])){
        if($_SESSION["mail"]==true){
            $sql1="SELECT * FROM wish_list";
	        $result1=mysqli_query($data,$sql1);
            $id_wl=mysqli_num_rows($result1)+1;
            $id=$_GET["id"];
            $mail=$_SESSION["mail"];
            $nb=0;
            if(mysqli_num_rows($result1) >= 0){  
                while($row1 = mysqli_fetch_array($result1)){
                    if(($mail==$row1['mail'])&&($id==$row1['id'])){ $nb=$nb+1;}
                }
            }
            if($nb==0){
                $sql2="INSERT INTO wish_list (id_wl, id, mail) VALUES ('$id_wl', '$id', '$mail')";
	            if (mysqli_query($data, $sql2)){
                    echo '<script type="text/javascript">alert("Successfuly Aded")</script>';
                }
            }
            else{
                echo '<script type="text/javascript">alert("you have this product in your wish list");</script>';
            }
        }else{
            echo '<script type="text/javascript">alert("You need to Connect first");window.location ="../../formclient/signin/Formc.php"</script>';
        }
    }
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
    <title>Products</title>
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="dropdown megamenu-fw active">
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


    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men1">Clothing</a>
                                    <div class="collapse" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="shop.php?type=tw" name="tw" class="list-group-item list-group-item-action">Top Wear</a>
                                            <a href="shop.php?type=bw" name="bw" class="list-group-item list-group-item-action">Bottom Wear</a>
                                            <a href="shop.php?type=suit" name="suit" class="list-group-item list-group-item-action">Suits</a>
                                            <a href="shop.php?type=hat" name="hat" class="list-group-item list-group-item-action">Hats</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Boards</a>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="shop.php?type=board" class="list-group-item list-group-item-action">Boards</a>
                                            <a href="shop.php?type=eqp" class="list-group-item list-group-item-action">Equipements</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3">Accessories</a>
                                    <div class="collapse" id="sub-men3" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="shop.php?type=bag" class="list-group-item list-group-item-action">Bags</a>
                                            <a href="shop.php?type=sunglass" class="list-group-item list-group-item-action">Sunglasses</a>
                                            <a href="shop.php?type=other" class="list-group-item list-group-item-action">Others...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-6 text-center text-sm-left">
                            <div class="search-product">
                            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>&&type=<?php echo $row["type"]; ?>">
                                <input class="form-control" name="valueToSearch" placeholder="Search here..." type="text">
                                <button type="submit" name="search"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                     
                                    <div class="row">
                                        
                                            <?php
                                            $type=$_GET['type'];
                                            $query = "SELECT * FROM product where `type`='$type'";
                                            $result = mysqli_query($data, $query);  
                                            if((mysqli_num_rows($result) > 0)){  
                                                while($row = mysqli_fetch_array($result))
                                                {  
                                            ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>&&type=<?php echo $row["type"]; ?>">
                                            <div class="box-img-hover">
                                                    <img src="<?php echo $row["url"]; ?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="shop-detail.php?id=<?php echo $row["id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><button data-toggle="tooltip" data-placement="right" name="wishlist" class="btn hvr-hover" type="submit" style="color:white;" title="Add to Wishlist"><i class="far fa-heart"></i></button></li>
                                                            <li><button data-toggle="tooltip" data-placement="right" name="addcart" class="btn hvr-hover" type="submit" style="color:white;" title="Add to Cart"><i class="fas fa-cart-plus"></i></button></li>
                                                        </ul>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4><?php echo $row["name"]; ?></h4>
                                                    <h5 class="btn btn-success" style="padding:2px;">$ <?php echo $row["price"]; ?></h5>
                                                </div>
                                            </form>
                                            </div>
                                            </div>
                                            <?php  
                                            }  
                                            }
                                            ?>
                                        
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <?php
                                            
                                            $query = "SELECT * FROM product where `type`='$type'";
                                            $result = mysqli_query($data, $query);  
                                            if(mysqli_num_rows($result) > 0){  
                                                while($row = mysqli_fetch_array($result))  
                                                {
                                        ?>
                                    <div class="list-view-box">
                                        <div class="row">
                                        
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>&&type=<?php echo $row["type"]; ?>">
                                                    <div class="box-img-hover">
                                                        <img src="<?php echo $row["url"]; ?>" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="shop-detail.php?id=<?php echo $row["id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><button data-toggle="tooltip" data-placement="right" name="wishlist" class="btn hvr-hover" type="submit" style="color:white;" title="Add to Wishlist"><i class="far fa-heart"></i></button></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>&&type=<?php echo $row["type"]; ?>">
                                                    <h4><?php echo $row["name"]; ?></h4>
                                                    <h5>$ <?php echo $row["price"]; ?></h5>
                                                    <p><?php echo $row["description"]; ?></p>
                                                    <button name="addcart" class="btn hvr-hover" type="submit" style="color:white;"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                                                </form>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <?php
                                            }  
                                            }  
                                            ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>