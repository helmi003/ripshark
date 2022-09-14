<?php 
$data=mysqli_connect("localhost", "root", "", "ripshark");

if(isset($_POST['idc'])){
	
	$idc=$_POST['idc'];
	$sql1="SELECT * from coach WHERE idc='$idc'";
	$result1=mysqli_query($data,$sql1);
	if (mysqli_num_rows($result1) > 0){
		$sql2="DELETE FROM session WHERE idc='$idc'";
		if (mysqli_query($data, $sql2)){}
		$sql3="DELETE FROM coach WHERE idc='$idc'";
		if (mysqli_query($data, $sql3)){
			echo '<script type="text/javascript">alert("Successfuly deleted coach");window.location ="../Forma.html"</script>';
		}
	}
	else{
		echo '<script type="text/javascript">alert("Non-existent Coach")</script>';
	}
}
?>

<!DOCTYPE>
<html>
<head>
<title> Suppresion Coach </title>
<link rel="stylesheet" href="suppc1.css"/>
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
				<h3>Supp Coach</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input name="idc" type="number" class="form-control" placeholder="Coach ID" required>
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