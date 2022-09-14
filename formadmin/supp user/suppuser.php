<?php 
$data=mysqli_connect("localhost", "root", "", "ripshark");

if(isset($_POST['mail'])){
	
	$mail=$_POST['mail'];
	$sql1="SELECT * FROM user WHERE mail='$mail'";
	$result1=mysqli_query($data,$sql1);
	if (mysqli_num_rows($result1) > 0){
		$sql2="DELETE FROM session WHERE mail='$mail'";
		$sql3="DELETE FROM contact_us WHERE mail='$mail'";
		$sql4="DELETE FROM feedback WHERE mail='$mail'";
		$sql5="DELETE FROM wishlist WHERE mail='$mail'";
		$sql6="DELETE FROM cart WHERE mail='$mail'";
		if (mysqli_query($data, $sql2)){}
		if (mysqli_query($data, $sql3)){}
		if (mysqli_query($data, $sql4)){}
		if (mysqli_query($data, $sql5)){}
		if (mysqli_query($data, $sql6)){}
		$sql6="DELETE FROM user WHERE mail='$mail'";
		if (mysqli_query($data, $sql6)){
			echo '<script type="text/javascript">alert("Successfuly deleted user");window.location ="../Forma.html"</script>';
		}
		
	}
	else{
		echo '<script type="text/javascript">alert("Non-existent user")</script>';
	}
}
?>

<!DOCTYPE>
<html>
<head>
<title> Suppresion Client </title>
<link rel="stylesheet" href="suppc2.css"/>
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
				<h3>Supp User</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input name="mail" type="mail" class="form-control" placeholder="User E-mail" required>
					</div>
					<div class="form-group">
						<input type="submit" value="Test" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div> 
</body>
</html>