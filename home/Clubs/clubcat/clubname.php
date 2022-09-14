<!DOCTYPE html>
<html>
<head>
<title> Club </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="clubname.css"/>
<link rel="shortcut icon" href="../../Store/images/favicon.ico" type="image/x-icon">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <?php
        session_start();
        $con =mysqli_connect("localhost", "root", "", "ripshark");
        $club_mail=$_GET["id"];
        if($club_mail==true)
        {
            $query1 = "SELECT * FROM club where `club_mail`='$club_mail'";
            $result1 = mysqli_query($con, $query1);
            $query2 = "SELECT * FROM my_clubs";
            $result2 = mysqli_query($con, $query2);
            if((mysqli_num_rows($result1) > 0)){  
            while($row = mysqli_fetch_array($result1)){
                $type=$row["cat"];
                if(isset($_POST['join'])){
                    if($_SESSION["mail"]){
                        $mail=$_SESSION["mail"];
                        if((mysqli_num_rows($result2) >= 0)){  
                            while($row2 = mysqli_fetch_array($result2)){
                                if(($mail==$row2['mail'])&&($club_mail==$row2['club_mail'])){
                                    echo "<script type='text/javascript'>alert('You already joined this club');window.location ='clubtype.php?type=$type'</script>";
                                    exit();
                                }
                            }
                        }
                        $id=mysqli_num_rows($result2)+1;
                        
                        $sql1="INSERT INTO my_clubs (id, mail, club_mail) VALUES ('$id', '$mail', '$club_mail')";
                        if (mysqli_query($con, $sql1 )){
                            echo "<script type='text/javascript'>alert('You are a member now')</script>";
                        }
                    }
                    else{
                        echo '<script type="text/javascript">alert("You need to Connect first");window.location ="../../../formclient/signin/Formc.php"</script>';
                    }
                }
            ?>
            <form method="post" action="clubname.php?action=add&id=<?php echo $row["club_mail"]; ?>">
<div>
    <div class="div2">
        <div class="container">
            <img class="image" src="<?php echo $row["logo"]; ?>">
            <div class="middle">
            <input name="join" type="submit" value="Join" class="button" style="vertical-align:middle">
            </div>
        </div>
        <div>
            <h3>____Informations____</h3>
            <p>
                <i style='font-size:24px' class='fas'>&#xf879;</i> Tel : (+216) <?php echo $row["club_number"]; ?><br /><br />
                <i style="font-size:24px" class="fa">&#xf2b9;</i> Mail : <?php echo $row["club_mail"]; ?>
            </p>
            <p><i style='font-size:24px' class='fas'>&#xf2bb;</i> Address:
                <?php echo $row["club_adresse"]; ?>
            </p>
        </div>
    </div>
    <h1><?php echo $row["club_name"]; ?></h1>
</div>
<div class="div2">
    <?php echo $row["description"]; ?>
</div>
        </form>
    
<h2>If you wanna join the club Click the button over the image</h2>
<a href="clubtype.php?type=<?php echo $row["cat"]; ?>" class="button" style="vertical-align:middle"><span>Previous </span></a>
<?php

            }
        }
    }  
    ?>
</body>
</html>