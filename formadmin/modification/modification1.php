<?php 
$data=mysqli_connect("localhost", "root", "", "ripshark");

if(isset($_POST['ids'])){
	
	$ids=$_POST['ids'];
	$date=$_POST['date'];
	$start=$_POST['start'];
	$nbheures=$_POST['nbheures'];
	$sql1="SELECT * FROM session WHERE ids='$ids'";
	$result1=mysqli_query($data,$sql1);
	if (mysqli_num_rows($result1) > 0){
	$sql2="UPDATE session set date='$date' , start='$start' , nbheures='$nbheures' WHERE ids='$ids'";
	if (mysqli_query($data, $sql2)){
        echo '<script type="text/javascript">alert("Successfuly modified");window.location ="../Forma.html"</script>';
    }
	}else{
        echo '<script type="text/javascript">alert("Incorrect informations");</script>';
	}
}
?>

<!DOCTYPE>
<html>
<head>
<title> Modify </title>
<link rel="stylesheet" href="modification.css"/>
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
				<h3>Modify Session</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input name="ids" type="number" class="form-control" placeholder="Session ID" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</div>
						<input name="date" type="date" class="form-control" placeholder="Date">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-clock"></i></span>
						</div>
						<input name="start" type="text" class="form-control" placeholder="start">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-hourglass-end"></i></span>
						</div>
						<input name="nbheures" type="number" class="form-control" placeholder="Hour Numbers">
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