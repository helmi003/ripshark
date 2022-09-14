<!DOCTYPE>
<html>
<head>
<title> BoardSurfing </title>
<link rel="stylesheet" href="BoardSurfing11.css"/>
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
                                <li><a href="../kitesurfing/KiteSurfing.php">Kite surfing</a></li>
                                <li><a href="BoardSurfing.php">Board surfing</a></li>
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
        <source src="../../../assets/boardsurfing/course/How to Surf.mp4" >
    </video>
</div>

<div class="content">
    <p>“Why did you get into surfing?” was a question I was asked recently and it took a second for me to actually collect my thoughts.
        I had only been surfing for 2 years, but I had become so absorbed in the sport that I had forgotten why I wanted to learn to surf in the first place.
        The truth is, it wasn’t easy to learn , in fact, learning to surf was one of the hardest things I’ve ever done. More often than not, I spent my time in the ocean rolling around in a washing machine set to “chew up and spit out.” </p>
    <img class="img" src="../../../assets/boardsurfing/course/course1.jpg">
</div>

<div class="content">
    <p>The reason I wanted to learn to surf was because I knew I needed to choose one thing that scared me, dive into it full on, and not stop when it got difficult. I’m the kind of person that will do a little bit of everything – a jack of all trades, master of none type. So I’ll drop things when I’m not interested in them anymore (or when it gets uncomfortable), and pick up whatever is new and shiny.</p>
    <p>I needed to get over my ego and be okay with the fact that I wasn’t going to be carving like Courtney Conlogue the first day I got in the water. I needed to work on my patience, perfectionism, and shift my perspective to understand that every single surfer starts exactly in the same place.</p>
</div>

<div class="content">
    <h1>Before you get in the water</h1>
    <img class="img" src="../../../assets/boardsurfing/course/course2.jpg">
</div>

<div class="content">
    <h2>Step 1 – First of all, don’t learn to surf all by yourself</h2>
    <p>No matter how easy you think it looks, never, ever approach surfing by yourself. Either get an experienced friend to teach you or go on a surf camp for beginners. This way, you’ll avoid injuring yourself or even putting your life in danger.</p>
</div>


<div class="content">
    <h2>Step 2 – Find a good teacher</h2>
    <p>If you decide to take surf lessons, research the teachers in advance. Make sure they are experienced and have good reviews. Sometimes, a good teacher won’t just teach you how to surf; they’ll also inspire you and make you fall in love with surfing.</p>
</div>

<div class="content">
    <h2>Step 3 – Find a beginner-friendly surf spot</h2>
    <p>Going to a beach that is appropriate for beginner surfers is crucial to your surfing success. Learn to surf on a beach known for good, steady waves and the whole learning process will be smoother. You’ll be upgrading your beach in no time!</p>
</div>

<div class="content">
    <h2>Step 4 – Warm up</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course3.jpg">
    <p>It is essential that you do a little warm-up before you enter the water. Stretching out your muscles and tendons will decrease the chances of muscle cramps and it will also increase your heart rate, thus oxygenating your blood and pumping you up for the action!</p>
</div>

<div class="content">
    <h2>Step 5 – Spend some time on dry land first</h2>
    <p>Now that you’re at the beach, don’t rush into the water. Spend some time on the beach and go through all the moves you plan on doing in the water. Check your surfing equipment</p>
</div>

<div class="content">
    <h2>Step 6 – Observe the water</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course4.jpg">
    <p>Before you make your way into the water, look at the waves and study them. See how and where they break. Keep your eye on the other surfers and see what they do. You should do this every single time before you go into the water, not just as a beginner surfer.</p>
</div>

<div class="content">
    <h2>Step 7 – Use a big surfboard</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course5.jpg">
    <p>This is one of the best beginner surfing tips you could ever follow. A large board will offer you a bigger surface to learn on and they’re also much better floatation devices.</p>
</div>

<div class="content">
    <h2>Step 8 – Soft-top surfboards also help</h2>
    <p>For some beginners, soft-top surfboards also help with the learning process. A large and soft-top surfboard is going to be gentle on your feet and posterior. Make no mistake, in the beginning, you’ll be spending a lot of time sitting on it, rather than standing!</p>
</div>

<div class="content">
    <h2>Step 9 – Always use a surf leash</h2>
    <p>This is more of a safety requirement rather than a tip. It will take you a while to get used to it and it might get in your way a few times, but a surf leash can potentially save your life, so make sure you are never without one!</p>
</div>

<div class="content">
    <h2>Step 10 – Don’t be afraid</h2>
    <p>This is more of a safety requirement rather than a tip. It will take you a while to get used to it and it might get in your way a few times, but a surf leash can potentially save your life, so make sure you are never without one!</p>
    <h2>In the water</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course6.jpg">
</div>

<div class="content">
    <h2>Step 11 – Pace yourself</h2>
    <p>Once you get into the water, you will need to pace yourself. We know how excited you may feel, but if you don’t pace yourself, you can risk injury. Remember, you have all the time in the world to learn to surf. The right way!</p>
</div>

<div class="content">
    <h2>Step 12 – Start small</h2>
    <p>We know this may be a piece of commonsensical advice, but it needs to be said: start small. </p>
    <br>
    <p>Tackle small waves before you attempt larger ones. Even though you may feel ready, unless your teacher says you’re ready, you’re not! Also, don’t even dream of tackling big waves until you’ve mastered regular surfing. </p>
</div>

<div class="content">
    <h2>Step 13 – Don’t get tangled with the big dogs</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course7.jpg">
    <p>This advice ties in with the previous one: don’t get tangled with the big dogs, which means pretty much to stay away from where the experienced surfers are surfing. As a beginner, you’re prone to making lots of mistakes, and you want to avoid getting in people’s way or, even worse, causing trouble.</p>
</div>

<div class="content">
    <h2>Step 14 – Practice sitting</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course8.jpg">
    <p>As weird as it may sound, sitting on a surfboard, while in the water, isn’t the easiest, nor the most comfortable thing in the world. You can either sit on the surfboard with your feet out of the water, which is not so comfortable, but safe; or you can dangle your feet in the water, which offers a lot more stability, but then you’re a bit more open to ocean wildlife. Which brings us to our next tip…</p>
</div>

<div class="content">
    <h2>Step 15 – Master the prone position</h2>
    <p>The prone position – lying down on your belly as if you’re paddling – is something you will need to master.</p>
    <br>
    <p>First, you need to get comfortable with it while on dry land. Lie on your surfboard, balanced and centered. Feel the surfboard, move around and try to master it before you venture out into the water.</p>
</div>

<div class="content">
    <h2>Step 16 – Practice your pop-up</h2>
    <p>Once you’ve mastered the prone position, you will need to learn how to pop-up. The pop out from the prone position should be swift and seamless. Think of push-ups, as the two are very similar. Practice while on land and continue to improve your technique in the water.</p>
</div>

<div class="content">
    <h2>Step 17 – Keep your feet moving</h2>
    <p>While in the water, you need to keep moving your feet. Shuffle them, move them around, while swimming or on the board. Just don’t let them dangle away as if they weren’t attached to your body. If you keep moving them, the chances of being stung, bit, or something along those lines is reduced.</p>
</div>

<div class="content">
    <h2>Step 18 – Work on your paddling technique</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course9.jpg">
    <p>Paddling is another thing you will need to practice until you get it right. The key is to find a rhythm and to keep it. This also requires you to be in shape, because it will be quite exhausting the first few times.</p>
</div>

<div class="content">
    <h2>Step 19 – Learn how to avoid nosediving</h2>
    <p>Before anything, you should know that you will probably nosedive (aka pearling) – when the nose of the surfboard dives underwater. It has happened to every surfer out there, and it’ll happen to you too! But you can learn to avoid it.</p>
    <br>
    <p>In order to avoid nosediving as much as possible, it is really important to learn how to position yourself on the surfboard. For example, if your weight is too far forward on the board, you’ll most likely nosedive. But this happens quite often during take-offs too, as well as when adjusting to a new surfboard. </p>
</div>

<div class="content">
    <h2>Step 20 – Get used to falling</h2>
    <p>If there’s one certainty when learning to surf, it’s the fact that you will be involved in a lot of wipeouts. You will fall, and fall, and fall… and then you’ll fall some more. Just remember that falling isn’t failing.</p>
    <br>
    <p>The waves will knock you down, you’ll get confused, and frustrated, and you’ll even get some bruises. All you need to remember is that it’s all part of the game.</p>
</div>

<div class="content">
    <h2>Step 21 – Learn how to wipeout</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course10.jpg">
    <p>That being said, now that you know that you will go through some wipeouts when learning to surf, it’s really important to learn how to fall. While you never know how a wave can knock you down, you can learn how to wipeout. Your instructor or an experienced surfer friend can teach you how to fall and hold your breath, when to surface, and when to stay under.</p>
</div>

<div class="content">
    <h2>Step 22 – Don’t bend your back</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course11.jpg">
    <p>When you’re on the wave, it is imperative that you bend your knees and not your back. If you bend your back, you’ll not only lose your, but you’ll also look like you don’t know what you’re doing. </p>
</div>

<div class="content">
    <h2>Step 23 – Stay perpendicular to the whitewater</h2>
    <img class="img" src="../../../assets/boardsurfing/course/course12.jpg">
    <p>This is probably one of the most useful tips you’ll ever need. When a breaking wave is ahead of you, then you can duck under it or go over it. No matter which one you choose, you need to stay perpendicular to the whitewater, the part of the wave that is breaking (which is white, hence its name). If you don’t, then you will be pulled under the wave and dragged to the shore.</p>
</div>

<div class="content">
    <h2>Step 24 – Listen to your body</h2>
    <p>Whatever you do, remember to listen to your body. If you are tired, bored or you simply aren’t feeling the surf session anymore, stop what you’re doing, head to the shore, and relax. You can always pick up where you left off the next day. No use in pushing yourself when you’re just starting off.</p>
</div>

<div class="content">
    <h2>Step 25 – Last but not least, have fun!</h2>
    <p>No matter what you do and where you are, if you’re not having fun, it’s not worth it. Always remember that awesome quote by Phil Edwards: “The best surfer out there is the one having the most fun!”</p>
</div>
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