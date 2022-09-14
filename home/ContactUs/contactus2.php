<?php
session_start();
$data=mysqli_connect("localhost", "root", "", "ripshark");
if(isset($_POST['msg'])){
	$subject=$_POST['subject'];
    $msg=$_POST['msg'];
    $mail=$_POST['mail'];
	if($_SESSION["mail"]==$mail){
        $mail=$_POST['mail'];
        $sql="INSERT INTO contact_us (`mail`, `subject`, `msg`) VALUES ('$mail', '$subject', '$msg')";
	    if (mysqli_query($data, $sql )){
            echo '<script type="text/javascript">alert("message sent");window.location ="contactus2.php"</script>';
        }
        else{
            echo '<script type="text/javascript">alert("message already sent before");</script>';
	    }
    }elseif($_SESSION["mail"]=="") {
        echo '<script type="text/javascript">alert("Login in first!!");window.location ="../../formclient/signin/Formc.php"</script>';
    }else{
        echo '<script type="text/javascript">alert("Enter your correct mail");</script>';
    }
	
}
if(isset($_POST['fb'])){
    $fb=$_POST['fb'];
    $mail=$_SESSION["mail"];
    if($_SESSION["mail"]==$mail){
        $sql2="INSERT INTO feedback (`fb`, `mail`) VALUES ('$fb', '$mail')";
        if (mysqli_query($data, $sql2 )){}
        else{
            echo '<script type="text/javascript">alert("similar feedback already written");</script>';
        }
    }elseif($_SESSION["mail"]=="") {
        echo '<script type="text/javascript">alert("Login in first!!");window.location ="../../formclient/signin/Formc.php"</script>';
    }else{
        echo '<script type="text/javascript">alert("Enter your correct mail");</script>';
    }
}
?>
<!DOCTYPE>
<html lang="en">
<!-- Basic -->

<head>
    <link rel="stylesheet" href="contactus5.css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Contact Us</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../Store/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Store/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../Store/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Store/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Store/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="../Home7.php"><img src="../../assets/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="../Home7.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Store/index.php">Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="../clubs/clubs.php">Clubs</a></li>
                        <li class="nav-item"><a class="nav-link" href="../MemberShip/memberShip.php">MemberShip</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Course</a>
                            <ul class="dropdown-menu">
                                <li><a href="../Course/sailsurfing/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../Course/kitesurfing/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="../Course/boardsurfing/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="../About/sailsurfingA/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../About/kitesurfingA/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="../About/boardsurfingA/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="contactus2.php">Contact Us</a></li>
                        <?php 
                            
                            $data=mysqli_connect("localhost", "root", "", "ripshark");
                            if(!empty($_SESSION["mail"])){
                            if($_SESSION["mail"]==true){
                                $id=$_SESSION["mail"];

                                $sql1="SELECT * FROM user where mail='$id'";
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
    <!-- Start Contact Us  -->
    <form method="POST" action="#">
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>If you have any questions or queries i'll always be happy to help. Feel free to contact us by telephone or mail and we will be sure to get back as soon as possible.</p>
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
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>How can we help you ?</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" class="form-control" name="mail" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="msg" class="form-control" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button name="submit12" class="btn hvr-hover" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- End Cart -->

    <form method="POST" action="#">
    <div class="col-md-8">
        <h2>Your opinion matters</h2>
        <p>Help us improve our website? Give us your feedback.</p>
        <div class="form-group">
            <textarea name="fb" class="form-control" placeholder="Your feedback" rows="2" width="50%" data-error="Write your feedback" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="submit-button text-center">
            <button class="btn hvr-hover" id="submit" type="submit">Post</button>
            <div name="submit2" id="fbSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </div>

        <?php
        $sql3="SELECT * FROM feedback JOIN user ON feedback.mail = user.mail";
        $result3 = mysqli_query($data, $sql3);  
        if(mysqli_num_rows($result3) > 0){  
            while($row = mysqli_fetch_array($result3)){
        ?>      <table>
                <tr>
                <td><img src="<?php
                if($row["pdp"]==""){
                    echo "../../assets/no-image.png";
                }else{
                    echo "../../assets/".$row["pdp"];
                }
                ?>" class="rounded-circle" alt="Cinque Terre" width="40" height="40"></td>
                
                <td><p class="p"><?php echo $row["name"]; ?> <?php echo $row["last_name"]; ?></p>
                    <p><?php echo $row["fb"]; ?></p></td>
                </tr>
                </table>
                <br>
             <?php
                }
                }
                else{
                echo "No feedbacks yet";
                }
            ?>
    </div>
    </form>
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
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="../Home.html">RipShark</a>, Design by : <a href="mailto:helmi.br1999@gmail.com">Helmi ben romdhane</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="../Store/js/jquery-3.2.1.min.js"></script>
    <script src="../Store/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    
    <!-- ALL PLUGINS -->
    <script src="../Store/js/bootsnav.js."></script>
    <script src="../Store/js/jquery.superslides.min.js"></script>
    <script src="../Store/js/custom.js"></script>


    <script src="../Store/js/bootstrap-select.js"></script>
    <script src="../Store/js/inewsticker.js"></script>
    <script src="../Store/js/images-loded.min.js"></script>
    <script src="../Store/js/isotope.min.js"></script>
    <script src="../Store/js/owl.carousel.min.js"></script>
    <script src="../Store/js/baguetteBox.min.js"></script>
    <script src="../Store/js/jquery-ui.js"></script>
    <script src="../Store/js/jquery.nicescroll.min.js"></script>
    <script src="../Store/js/form-validator.min.js"></script>
    <script src="../Store/js/contact-form-script.js"></script>
    
</body>

</html>