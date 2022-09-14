<!DOCTYPE>
<html>
<head>
<title> New Account </title>
<link rel="stylesheet" href="signout.css"/>
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
                $_SESSION["admin"]="";
                if($_SESSION["admin"]==false){
            ?>
                <p>
                    Not connected yet
                </p>
                <a href="../Forma.html" class="btn float-left login_btn">Back Home</a>
                <a href="../signin/Formc.php" class="btn float-right login_btn">Log in</a>
                <?php
                    }
                ?>
                    
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>