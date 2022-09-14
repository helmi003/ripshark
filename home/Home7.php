<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <link rel="stylesheet" href="Home7.css"/>
    <title>RipShark home</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="Store/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Store/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="Store/css/style.css">

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
                    <a class="navbar-brand" href="Home7.php"><img src="Store/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="Home7.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Store/index.php">Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="clubs/clubs.php">Clubs</a></li>
                        <li class="nav-item"><a class="nav-link" href="MemberShip/memberShip.php">MemberShip</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Course</a>
                            <ul class="dropdown-menu">
                                <li><a href="Course/sailsurfing/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="Course/kitesurfing/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="Course/boardsurfing/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="About/sailsurfingA/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="About/kitesurfingA/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="About/boardsurfingA/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="ContactUs/contactus2.php">Contact Us</a></li>
                        <?php 
                            session_start();
                            $data=mysqli_connect("localhost", "root", "", "ripshark");
                            if(!empty($_SESSION["mail"])){
                            if($_SESSION["mail"]==true){
                                $id=$_SESSION["mail"];

                                $sql1="SELECT * FROM user where mail='$id'";
                                $result1 = mysqli_query($data, $sql1);  
                                if(mysqli_num_rows($result1) > 0){  
                                    while($row = mysqli_fetch_array($result1)){
 
                        ?>
                                        <a class="link" href="../formclient/account/account.php"><img src="<?php
                                        if($row["pdp"]==""){
                                            echo "../assets/no-image.png";
                                        }
                                        else{
                                            echo "../assets/".$row["pdp"];
                                        }
                                        ?>" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                        <?php
                                    }
                                }else{
                                    ?>
                                    <a class="link" href="../formclient/account/signout.php"><img src="../assets/no-image.png" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                                    <?php
                                        }
                            }}else{
                        ?>
                        <a class="link" href="../formclient/account/signout.php"><img src="../assets/no-image.png" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
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
    <div class="div-video">
        <video  controls poster="../assets/thumbnail.jpg">
            <source src="../assets/FERRYTALE.mp4" >
        </video>
    </div>

    <p class="p1">
        Surfing is a surface water sport in which an individual, a surfer, uses a board to ride on the forward section, or face, of a moving wave of water, which usually carries the surfer towards the shore. Waves suitable for surfing are primarily found in the ocean, but can also be found in lakes or rivers in the form of a standing wave or tidal bore.
    </p>
    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="Home7.php">RipShark</a>, Design by : <a href="mailto:helmi.br1999@gmail.com">Helmi ben romdhane</a></p>
    </div>
    <!-- End copyright  -->

    


    <!-- ALL JS FILES -->
    <script src="Store/js/jquery-3.2.1.min.js"></script>
    <script src="Store/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="Store/js/bootsnav.js."></script>
    <script src="Store/js/custom.js"></script>
</body>

</html>