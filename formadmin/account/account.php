<!DOCTYPE>
<html>
<head>
<title> New Account </title>
<link rel="stylesheet" href="account2.css"/>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="UTF-8"/>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-body">
            <?php 
                session_start();
                $data=mysqli_connect("localhost", "root", "", "ripshark");
                session_start();
                if(!empty($_SESSION["admin"])){
                    if($_SESSION["admin"]==true){
	                    $id=$_SESSION["admin"];

                    $sql1="SELECT * FROM user where mail='$id'";
                    $result1 = mysqli_query($data, $sql1);  
                    if(mysqli_num_rows($result1) > 0){  
                        while($row = mysqli_fetch_array($result1)){
 
            ?>
				<form method="POST" action="#">
                <div class="center">
                    <img src="<?php
                                    if($row["pdp"]==""){
                                        echo "../../assets/no-image.png";
                                    }
                                    else{
                                        echo "../../assets/".$row["pdp"];
                                    }
                            ?>" class="img-fluid" alt="Image">
                    <h3><?php echo $row["name"]; ?> <?php echo $row["last_name"]; ?></h3>
                </div>
                <p>
                    <i style="font-size:24px" class="fa">&#xf2b9;</i> Mail : <?php echo $row["mail"]; ?>
                </p>
                <p>
                    <i style='font-size:24px' class='fas'>&#xf2bb;</i> Address : <?php echo $row["adresse"]; ?>
                </p>
                <p>
                <i style='font-size:24px' class='fas fa-globe-africa'></i> Club(s) : <?php  
                                                                                            }
                                                                                        }
                                                                                        $sql2="SELECT * FROM my_clubs JOIN user ON user.mail = my_clubs.mail where mail='$id'";
                                                                                        $sql3="SELECT * FROM my_clubs JOIN club ON club.club_mail = my_clubs.club_mail where mail='$id'";
                                                                                        $result2 = mysqli_query($data, $sql3);
                                                                                        $nb=0;
                                                                                        if(mysqli_num_rows($result2) > 0){ 
                                                                                            while($row2 = mysqli_fetch_array($result2)){
                                                                                                $nb=$nb+1;
                                                                                                if($nb<mysqli_num_rows($result2)){
                                                                                                    echo $row2["club_name"]."/";
                                                                                                }
                                                                                                else{
                                                                                                    echo $row2["club_name"];
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                        else{
                                                                                            echo "There is no clubs joined yet";
                                                                                        }
                                                                                    }
                                                                                    ?>
                </p>
                <div class="form-group">
                <a href="edit.php" class="btn float-right login_btn">Edit</a>
                <a href="signout.php" class="btn float-right float-left  login_btn">Log out</a>
                <a href="../../home/Home7.php" class="btn float-left login_btn">Back Home</a>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>