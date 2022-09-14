<?php 
    session_start();
    $data=mysqli_connect("localhost", "root", "", "ripshark");
    if(isset($_POST['addcart'])){
        if(!empty($_SESSION["mail"])){
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
        }}else{
            echo '<script type="text/javascript">alert("You need to Connect first");window.location ="../../formclient/signin/Formc.php"</script>';
        }
    }

    if(isset($_POST['supp'])){
        $id=$_GET["id"];
        $sql1="SELECT * FROM wish_list WHERE id='$id'";
	    $result1=mysqli_query($data,$sql1);
	    if (mysqli_num_rows($result1) > 0){
            $sql2="DELETE FROM wish_list WHERE id='$id'";
            if (mysqli_query($data, $sql2)){
                echo '<script type="text/javascript">alert("Successfuly deleted from wish list")</script>';
            }
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
    <title>wishlist</title>
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
                        <li class="dropdown active">
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
    <!-- Start Wishlist  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Unit Price </th>
                                    <th>Stock</th>
                                    <th>Add Item</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($_SESSION["mail"])){
                                if($_SESSION["mail"]==true){
                                    $mail=$_SESSION["mail"];
                                    $sql3="SELECT * FROM user where mail='$mail'";
                                    $result3 = mysqli_query($data, $sql3);  
                                    if(mysqli_num_rows($result3) > 0){
                                        while($row = mysqli_fetch_array($result3)){
                                    $query1 = "SELECT * FROM product JOIN wish_list ON wish_list.id = product.id";
                                    $result1 = mysqli_query($data, $query1);
                                    $query2 = "SELECT * FROM wish_list JOIN prod_detail ON wish_list.id = prod_detail.id";
                                    $result2 = mysqli_query($data, $query2);
                                    
                                    if((mysqli_num_rows($result1) > 0)&&(mysqli_num_rows($result2) > 0)){
                                        while(($row1 = mysqli_fetch_array($result1))&&($row2 = mysqli_fetch_array($result2))){
                                ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="shop-detail.php?id=<?php echo $row1["id"]; ?>">
									    <img class="img-fluid" src="<?php echo $row1["url"]; ?>" alt="" /></a>
                                    </td>
                                    <td class="name-pr">
                                    <a href="shop-detail.php?id=<?php echo $row1["id"]; ?>">
                                    <?php echo $row1["name"]; ?></a>
                                    </td>
                                    <td class="price-pr">
                                        <?php
                                            if($row2["sold"]==0){
                                            ?>
                                                <p>$ <?php echo $total=$row1["price"]; ?></p>
                                            <?php 
                                            }else{
                                            ?>
                                                <p><del>$ <?php echo $row1["price"]; ?></del> $<?php echo $row1["price"]*((100-$row2["sold"])/100);?></p>
                                            <?php
                                                }
                                        ?>
                                    </td>
                                    <td class="quantity-box">

                                    <?php if($row2["stock"]>0){echo "In Stock";}else{echo "Out Of Stock";} ?>
                                    
                                    </td>
                                    <form method="post" action="wishlist.php?action=add&id=<?php echo $row1["id"]; ?>&&type=<?php echo $row1["type"]; ?>">
                                    <td class="add-pr">
                                        <button name="addcart" class="btn hvr-hover" type="submit" style="color:white;"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                                    </td>
                                    
                                    <td class="remove-pr">
                                        <button name="supp" class="btn hvr-hover" type="submit" style="color:white;"><i class="fas fa-times"></i></button>
                                    </td>
                                    </form>
                                </tr>
                                <?php
                                                }
                                            }else{?>
                                                <th><p> No data yet </p></th><?php
                                            }
                                        }
                                    }else{?>
                                        <th><p> login in first </p></th><?php
                                    }
                                }}else{?>
                                    <th><p> login in first </p></th><?php
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist -->
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