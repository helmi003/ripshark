<!DOCTYPE>
<html>
<head>
<title> Kite Surfing </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="KiteSurfing2.css"/>
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
                                <li><a href="KiteSurfing.php">Kite surfing</a></li>
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
    <br>

    Two brothers: <a class="a" href="https://www.surfertoday.com/kiteboarding/the-history-of-kiteboarding-began-25-years-ago-with-the-legaignoux-brothers">Bruno Legaignoux and Dominique Legaignoux</a>
</p>
<br>
<p ><span>How dangerous is kitesurfing?</span>
    <br>

    Here are some facts they found: The average number of injuries per 1000 hours is 7 for kitesurfing. The average number of injuries per 1000 hours is much higher in other sports. American football for instance has an average of 36 injuries per 1000 hours.
</p>
<br>
<p ><span>Is kitesurfing a good workout?</span>
    <br>

    Although you can easily kitesurf without being an athletic person at all, kitesurfing can give you a very intense workout depending on wind and water conditions and on your riding style. It's more a muscular than aerobic kind of workout, heavily exercising your core muscles and lower back, quads and calves.
</p>
<br>
<p ><span>How much does kitesurfing cost?</span>
    <br>

    For the most part, you can get started with the sport of kiteboarding by investing somewhere in the ballpark of $1,000 to $3,000 in equipment. The price will vary greatly based primarily on the newness of the gear you choose.
</p>
<br>
<p ><span>Is surfing good for weight loss?</span>
    <br>

    While “losing weight” may be a misnomer since muscle is heavier than fat, surfing will definitely help you burn fat and excess calories. The average surfer burns 400 calories an hour while surfing. Since surfing is so fun, you're likely to spend more time doing it opposed to other grueling or boring forms of exercise.
</p>
<br>
<p ><span>Why are surfers so happy?</span>
    <br>

    Surfers release a lot of adrenaline and endorphins while they are riding the waves. These hormones cause an increase in heart rate and blood pressure. A surge of adrenaline makes you feel very alive. Endorphins resemble opiates in their chemical structure and have analgesic properties.
</p>
<br>
<p ><span>How high can kite surfers jump?</span>
    <br>

    Nick Jacobsen achieved the world record for the highest kite jump measured by WOO Sports on February 19, 2017 in Cape Town, South Africa, during a session with 40-knot winds. Jacobsen's jump reached 28.6 meters high, with an airtime of 8.5 seconds.
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