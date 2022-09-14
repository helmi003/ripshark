<!DOCTYPE>
<html>
<head>
<title> Sail Surfing </title>
<meta charset="UTF-8">
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
                        <li class="nav-iteme"><a class="nav-link" href="../../Home7.php">Home</a></li>
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
                                <li><a href="SailSurfing.php">Sail surfing</a></li>
                                <li><a href="../kitesurfingA/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="../boardsurfingA/BoardSurfing.php">Board surfing</a></li>
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
    <ul class="ul">
        <li><a class="a" href="https://en.wikipedia.org/wiki/Newman_Darby">Newman Darby</a></li>
        <li><a class="a" href="https://en.wikipedia.org/wiki/Peter_Chilvers">Peter Chilvers</a></li>
        <li><a class="a" href="https://en.wikipedia.org/wiki/Jim_Drake_(engineer)">Jim Drake</a></li>
      </ul>
</p>
<p ><span>What are windsurfers made of?</span>
    <br>

    The boards can be made of Epoxy, Fibreglass, Expanded Polystyrene Foam, PVC or Carbon Sandwich in a way so that the top of it is hard and the bottom is slippery. There are one or more fins at the bottom of the board. There is also centerboard much like daggerboard in the middle of the surfboard.
</p>
<br>
<p ><span>How many windsurfers are there in the world?</span>
    <br>

    Currently, there are more than 1.2 million windsurfers in the United States--and millions more around the world--but the market has shrunk since the 1980s even as the sport has become more commonplace.
</p>
<br>
<p ><span>How fast do windsurfers go?</span>
    <br>

    Windsurfer Breaks Speed Record at Over 60 mph. Antoine Albeau is the fastest windsurfer in the world after posting a run at 53.27 knots in Namibia. Top speed is a benchmark that's sought across countless sports, but it's not something you often hear about when it comes to windsurfing.
</p>
<br>
<p ><span>Is Windsurfing still popular?</span>
    <br>

    Nowadays, windsurfing is thriving at a few places around the world: San Francisco, the Gorge, Tarifa in Spain, the Canary Islands. But in the US, there are virtually no sailing hotspots in the countless beach towns where the sport once thrived.
</p>
<br>
<p ><span>How much do windsurfers cost?</span>
    <br>

    A complete windsurfing package that includes board, sail, mast, boom, mast extension, universal joint, uphaul rope, harness, and wetsuit runs approximately $2000-$2500 for all new equipment. We also offer used a closeout gear that is less expensive.
</p>
<br>
<p ><span>Is windsurfing dangerous?</span>
    <br>

    Windsurfing is a potentially dangerous sport. In fact it is considered an extreme sport for a reason. That reason is mainly the fact that it is carried out in an environment we cannot control, namely the sea, lake, etc. Other sports offer security in terms of reduced risk of injury or equipment failure.
</p>
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