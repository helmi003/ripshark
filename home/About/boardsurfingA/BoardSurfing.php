<!DOCTYPE>
<html>
<head>
<title> Board Surfing </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="BoardSurfing22.css"/>
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
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Course</a>
                            <ul class="dropdown-menu">
                                <li><a href="../../Course/sailsurfing/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../../Course/kitesurfing/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="../../Course/boardsurfing/BoardSurfing.php">Board surfing</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="../sailsurfingA/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../kitesurfingA/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="BoardSurfing.php">Board surfing</a></li>
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
<p ><span>who invented the windsurfer?</span>
<br>
    <a class="a" href="https://en.wikipedia.org/wiki/Tom_Blake_(surfer)">Thomas Edward Blake</a>
</p>
<br>

<p ><span>What is a fun board surfing?</span>
    <br>
    A funboard is a surfboard that's 6 to 8 feet long and has a rounder/wider outline than shortboards (in-between a longboard and a fish). If you have ridden a soft top surfboard before, otherwise known as a foam board, a funboard is the fiberglass version of it.
</p>
<br>
<p ><span>What surf board is best for beginners?</span>
    <br>

    Foam surfboards are a great choice for beginners! For beginner surfers, an 8 to 9-foot foam longboard surfboard is one of the best options as an entry-level surfboard for a number of reasons. Foam surfboards are stable, user-friendly, and easy to paddle which makes catching waves and standing up a lot easier.
</p>
<br>
<p ><span>Which surfboard should I buy?</span>
    <br>

    If you are a beginner you should always look for a board which is wide, thick and at least three feet (90 centimeters) taller than you. Beginner surfers should always get a surfboard with extra flotation and stability to paddle for the wave (2.0lbs/L (0.9kg/L) weight to volume ratio).
</p>
<br>
<p ><span>What country is surfing most popular?</span>
    <ul class="ul">
        <li>Playa Grande, Costa Rica.</li>
        <li>Bundoran, Ireland.</li>
        <li>Jeffreys Bay, South Africa.</li>
        <li>Huntington Beach, CA.</li>
        <li><a class="a" href="https://www.travelchannel.com/interests/beaches/photos/worlds-best-surf-destinations">More...</a></li>
    </ul>
</p>
<br>
<p ><span>Is body surfing good exercise?</span>
    <br>

    Surfing is a great cardiovascular exercise. The workout you get through surfing builds up heart strength through a mixture of paddling, standing on the board and working your core muscles. We love the way it makes you feel but the impact it has on your overall fitness by improving your heart health is impressive.
</p>
<br>
<p ><span>How dangerous is surfing?</span>
    <br>

    While you hope to stay off of the ocean floor when surfing, sometimes a wave or a fall can drill you down to the bottom. Rocks and coral can feel like knives cutting into your feet, torso, or face and can leave severe rashes, open wounds, and bruises.
</p>
<br>
<p ><span>What is the largest wave ever ridden?</span>
    <br>

    An earthquake followed by a landslide in 1958 in Alaska's Lituya Bay generated a wave 100 feet high, the tallest tsunami ever documented. When the wave ran ashore, it snapped trees 1,700 feet upslope. Five deaths were recorded, but property damage was minimal because there were few cities or towns nearby.
</p><br>
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<!-- ALL JS FILES -->
<script src="../../Store/js/jquery-3.2.1.min.js"></script>
<script src="../../Store/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../../Store/js/bootsnav.js."></script>
    <script src="../../Store/js/jquery.superslides.min.js"></script>
    <script src="../../Store/js/custom.js"></script>
</body>
</html>