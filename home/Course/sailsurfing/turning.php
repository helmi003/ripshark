<!DOCTYPE>
<html>
<head>
<title> Home </title>
<link rel="stylesheet" href="turning11.css"/>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../Store/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../Store/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../../Store/css/style.css">
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
                    <a class="navbar-brand" href="../../Home7.php"><img src="../../../assets/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="../../Home7.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../Store/index.php">Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../clubs/clubs.php">Clubs</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../MemberShip/memberShip.php">MemberShip</a></li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Course</a>
                            <ul class="dropdown-menu">
                                <li><a href="SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../kitesurfing/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="../boardsurfing/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="../../About/sailsurfingA/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../../About/kitesurfingA/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="../../About/boardsurfingA/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../../ContactUs/contactus2.php">Contact Us</a></li>
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
                                        <a class="link" href="../../../formclient/account/account.php"><img src="<?php
                                        if($row["pdp"]==""){
                                            echo "../../../assets/no-image.png";
                                        }
                                        else{
                                            echo "../../../assets/".$row["pdp"];
                                        }
                                        ?>" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                        <?php
                                    }
                                }else{
                                    ?>
                                    <a class="link" href="../../../formclient/account/signout.php"><img src="../../../assets/no-image.png" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
                                    <?php
                                        }
                            }}else{
                        ?>
                        <a class="link" href="../../../formclient/account/signout.php"><img src="../../../assets/no-image.png" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></a>
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
<div class="content">
    <p>At some point we need to turn to get back to where we came from. So let’s get down to explaining how to control the windsurf board with the sail from the T-position:</p>
    <img class="img" src="../../../assets/sailsurfing/course/turning1.jpg">
</div>

<div class="content">
    <p>By pulling the sail to the left or right we are able to turn the board clockwise or anticlockwise (when looked at from above). The sail will always try to position itself in line with the wind so when we shift it to the left, the board will turn clockwise so that the sail can continue being in line with the wind. Another way of looking at it is to think of the sail as a stationary object which we are holding on to while we turn the board with our feet: we ca either pull with the left foot and push with the right foot to make it turn anti-clockwise, or pull with the right and push with the left to turn it clockwise.</p>
    <img class="img" src="../../../assets/sailsurfing/course/turning2.jpg">
</div>

<div class="content">
    <h2>Sail over the front vs. Sail over the back Sail over the front :</h2>
    <p>This method is easier as we do not need to move our feet around the mast. We only need to turn over our own axis. The downside: we drift downwind more.</p>
</div>

<div class="content">
    <h2>Sail over the back :</h2>
    <p>This way is a little more complicated as we need to move around the mast with our feet while the sail is pulled over the back of the board (where we were standing a moment ago). The advantage is that we do not lose much gained reach.
        <br>
        Initially I recommend to pass the sail over the back of the board since if we pass it over the front, the board will point downwind and we will lose some gained upwind reach. Once we consistently hold the closed reach course (more on this in the next post) we can sacrifice a little gained reach by passing the sail over the front.
    </p>
</div>
<p><span class="recap">A small tip:</span> Always position your feet so they are facing in line with the mast. If you ignore this little detail you will fall in more times than necessary.</p>
<br>
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<script src="../../Store/js/jquery-3.2.1.min.js"></script>
<script src="../../Store/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../../Store/js/bootsnav.js."></script>
    <script src="../../Store/js/jquery.superslides.min.js"></script>
    <script src="../../Store/js/custom.js"></script>
</body>
</html>