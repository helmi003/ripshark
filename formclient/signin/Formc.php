<?php 
session_start();
$data=mysqli_connect("localhost", "root", "", "ripshark");
if(isset($_POST['mail'])){
    
    $password=$_POST['password'];
    $mail=$_POST['mail'];
    
    $sql="SELECT * from user where password='".$password."'AND mail='".$mail."' limit 1";
    $result=mysqli_query($data,$sql);
    
    if(mysqli_num_rows($result)==1){
		$_SESSION["mail"]=$mail;
        header("Location: ../../home/Home7.php");
    }
    else{
		echo '<script type="text/javascript">alert("Incorrect informations");window.location ="Formc.php"</script>';
    }
        
}
?>

<!DOCTYPE>
<html>
<head>
<title> Form </title>
<link rel="stylesheet" href="Formc.css"/>
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
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a href="https://www.facebook.com/helmi.benromdhane.9" alt="facebook"><i class="fab fa-facebook-square" style='color:#4267B2'></i></a></span>
					<span><a href="https://www.instagram.com/helmi_b.r/" alt="instagram"><i class="fab fa-instagram" style='color:#833AB4'></i></a></span>
					<span><a href="#" alt="twitter"><i class="fab fa-twitter-square" style='color:#1DA1F2'></a></i></span>
					<span><a href="https://www.youtube.com/channel/UCxWtOWllR119xfhTG98CFGQ" alt="youtube"><i class="fab fa-youtube" style='color:#FF0000'></i></a></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input name="mail" type="mail" class="form-control" placeholder="E-mail" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="Password" >
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
						<a href="../../home/Home7.php" class="btn float-left login_btn">Back home</a>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="newaccount.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div> 
</body>
</html>