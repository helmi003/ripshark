<!DOCTYPE>
<html>
<head>
<title> SailSurfing </title>
<link rel="stylesheet" href="SailSurfing11.css"/>
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
    <p>So we are now able to windsurf in one direction, maybe even in both. If not yet, you can read up on <a class="a" href="turning.php">how to turn in windsurfing</a>. Now we want to know how to windsurf towards a specific point. Before we start it is important to clarify that we will not be using the terms right or left as this will change depending in which direction we are sailing in. We will be using towards the “front or back of the board” and “into/towards the wind” and “away from the wind”.</p>
    <video  controls poster="../../../assets/thumbnail.jpg">
        <source src="../../../assets/sailsurfing/course/Start Windsurfing.mp4" >
    </video>
</div>

<div class="content">
    <p>First we must understand why we move forwards in the first place. When we look at the windsurfer from the side and from the top we see this.</p>
    <img class="img" src="../../../assets/sailsurfing/course/course1.jpg">
</div>

<div class="content">
    <p>The sail has a general pressure point. The arrows are forces. The green one is the wind pushing the sail which is our propulsive force. However, if we didn’t have the counteracting force (red arrow) acting through the centre-board (and later on only the fin) we would just drift downwind. Since both arrows are in line, the board stays on course and only moves in the line of the blue arrow. However, if we were to incline the sail forward (or slightly towards the wind), the arrows are no longer in line. This causes a lever which turns the board downwind so that both arrows are lined up again.</p>
    <img class="img" src="../../../assets/sailsurfing/course/course2.jpg">
</div>

<div class="content">
    <p>The same thing occurs when we lean the sail back (or away from the wind). Only that in this case the board turns into the wind as the arrows are disalligned in the other direction.</p>
    <img class="img" src="../../../assets/sailsurfing/course/course3.jpg">
</div>

<div class="content">
    <p><span class="recap">Recap:</span>
        <br>
        Incline the sail forward to turn the board downwind.
        <br>
        Incline the sail backwards to turn the board upwind.</p>
        <img class="img" src="../../../assets/sailsurfing/course/course4.jpg">
</div>

<div class="content">
    <h2>Now let’s get to the individual courses :</h2>
    <ul class="ul">
        <li><span>Close hauled:</span> This is the course going closest to the wind. If we turn any more into the wind, we stall and lose speed until we stop completely and fall in backwards due to lack of power in the sail.</li>
        <li><span>Close reach:</span> This is anywhere between close hauled and beam reach. We are sailing upwind in any case.</li>
        <li><span>Beam Reach:</span> Here we are sailing 90º to the wind direction.</li>
        <li><span>Broad Reach:</span> This course includes any angle between beam reach and running. In any case we are going downwind.</li>
        <li><span>Running:</span> This course describes going downwind or close to it. We are sailing in the direction in which the wind is blowing..</li>
    </ul>
    <img class="img" src="../../../assets/sailsurfing/course/course5.jpg">
</div class="content">
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<script src="../../Store/js/jquery-3.2.1.min.js"></script>
<script src="../../Store/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../../Store/js/bootsnav.js."></script>
    <script src="../../Store/js/jquery.superslides.min.js"></script>
    <script src="../../Store/js/custom.js"></script>
</body>
</html>