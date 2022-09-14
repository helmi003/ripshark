<!DOCTYPE>
<html>
<head>
<title> kitesurfing </title>

<link rel="stylesheet" href="KiteSurfing11.css"/>
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
                                <li><a href="../sailsurfing/SailSurfing.php">Sail surfing</a></li>
                                <li><a href="KiteSurfing.php">Kite surfing</a></li>
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
    <h3>Are you a kitesurf beginner?</h3>
    <p>Kitesurfing is an impressive water sport that may seem inaccessible for most people to learn. In reality, there is no need for big muscles or to be a hotshot to become a good rider, you just need a little bit of willpower and to spend some time at a competent school to learn kitesurfing. In just a few days, you will know the basic safety rules, learn how to master the power of a kite and perform your first water start. Here are the 5 steps that you need, to start kitesurfing safely and ride your first waves.</p>
    <video  controls poster="../../../assets/thumbnail.jpg">
        <source src="../../../assets/kitesurfing/course/How to Kitesurf.mp4" >
    </video>
</div>

<div class="content">
    <h2>Step 1 – Learning to kitesurf = Observe the weather + know your equipment</h1>
    <p>When you arrive at a location it is essential to take the time to analyze the wind conditions, the state of the water and to identify any potential obstacles. First of all you have <span>to understand the wind</span>, that is to say, to know where it comes from and to evaluate its strength. These observations will allow you to choose the right size of kite according to the conditions.</p>
    <img class="img" src="../../../assets/kitesurfing/course/course2.jpg">
</div>

<div class="content">
    <p>Then, a look at the water will show the dangers upwind or downwind, and to spot obstacles such as rocks or boats moored on the water.</p>
    <br>
    <p>You must next learn how to lay out the lines correctly, inflate the wing and connect your bar. Use caution as a wing connected upside down becomes uncontrollable and an accident is likely! To avoid this, it is essential to know all the safety systems of the bar, and to be able to release the wing in case of an emergency.</p>
    <img class="img" src="../../../assets/kitesurfing/course/course2.jpg">
</div>

<div class="content">
    <h2>Step 2 – Handle the kite</h2>
    <p>It is normal to learn flying a kite in pairs: one person is handling the bar, and the other holds the wing and waits for the signal to launch. This can be done on land, but it is better to practice in the flat water to limit the impact of any falls. Once the wing is up, it must slowly climb along the edge of the wind window without generating power. A few round trips along the edge allow the handler to know the limits of the wind window.</p>
    <img class="img" src="../../../assets/kitesurfing/course/course3.jpg">
</div>

<div class="content">
    <p>Soon you will be able to use the traction of the wing by passing it in the intermediate zone and getting towed in the water or body dragged. Once you master the power of your wing, do not let it fall and know how to orient yourself, you can then proceed with a water start.</p>
</div>

<div class="content">
    <h2>Step 3 – Your first water-start</h2>
    <p>You will get up on the water and finally take the height! To try your first water- start, it is important to properly adjust the footstraps of the board beforehand, to allow it to be put on easily. Then, put the wing at the zenith, choose a direction, to right or left (it is easier to navigate on the edge where your foot is placed at the back of the board), and start flying the wing from right to left. You will begin to drift, your back to the wind, opposing resistance with your feet and board in water.</p>
    <p>Once confident and stable in this position, you can position the wing at 11 o’clock and dive it in the opposite window to generate maximum power and be able to get up on the board.</p>
    <p>Attention, do not try to hang on the bar and pull, otherwise the wing will lose all its power quickly. This is the principle of the push-and-pull of the bar. You can pull the bar during the water-start, so that the wing accelerates, but do not forget to release the bar once the wing is up.</p>
    <img class="img" src="../../../assets/kitesurfing/course/course4.jpg">
</div>

<div class="content">
    <h2>Step 4 – Make your first water start and go upwind</h2>
    <p>Once the waterstart is under control, you begin to surf on the water and ride your first edges. You have to practice and <span>find your balance</span>. The edges are going to be more and longer and do not go too far offshore, because if there is a problem, the situation can become complicated.</p>
    <p><span>Learning to kitesurf is also learning to ride on both sides</span> (even if it’s always easier on the good side). Good support and good body position will allow you little by little to go upwind. <span>Feel free to use the shoulders, pelvis and your vision to aim for a point you want to get</span> to and thus manage to reach it.(Here is a nice video about <a href="https://www.youtube.com/watch?v=ezcTqfN8YSE&ab_channel=TheHoxtonSpecial-Kitesurf%2CPaddleboard%2CYogaandCoffee">body position in kitesurf</a>)</p>
</div>

<div class="content">
    <h2>Step 5 – Become autonomous and manage your environment</h2>
    <p>Congratulations! Now you can go upwind on both sides. You will be able to familiarize yourself with other spots and start your jumps and transitions, or you try the waves. It is essential to be able to move among the kiters and know the rules of priority.</p>
    <p><span>kiter that leaves the beach has priority over who comes back from the open sea.</span> Always look before changing direction, most kite collisions occur because of lack of attention.</p>
    <p><span>The rider who has the right hand forward on the bar has priority over the water.</span> They must bring their wing up, and the other kiter must lower their wing, to be able to cross.</p>
    <p><span>When you arrive at a new spot, do not hesitate to seek advice from locals</span> or people who seem to know the place. They will readily inform you on the rules, obstacles and dangers. It’s a good way to make yourself known and to develop contacts. It can always be useful in case of problems on the water.</p>
</div>
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<script src="../../Store/js/jquery-3.2.1.min.js"></script>
<script src="../../Store/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../../Store/js/bootsnav.js."></script>
    <script src="../../Store/js/jquery.superslides.min.js"></script>
    <script src="../../Store/js/custom.js"></script>
</body>
</html>