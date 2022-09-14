<?php 
$data=mysqli_connect("localhost", "root", "", "ripshark");

if(isset($_POST['mail'])){
	$club_mail=$_POST['club_mail'];
	$mail=$_POST['mail'];
	$idc=$_POST['idc'];
	$date=$_POST['date'];
	$start=$_POST['start'];
	$nbheures=$_POST['nbheures'];
	$sql1="SELECT * FROM session";
	$sql2="SELECT * FROM coach where idc='$idc'";
	$sql3="SELECT * FROM my_clubs where club_mail='$club_mail' and mail='$mail'";
	$result2=mysqli_query($data,$sql2);
	$result3=mysqli_query($data,$sql3);
	if(mysqli_num_rows($result2) ==0){
		echo '<script type="text/javascript">alert("Coach does not exist");window.location ="inserts.php"</script>';
	}elseif(mysqli_num_rows($result3) ==0){
		echo '<script type="text/javascript">alert("invalid user , club or he is not a member yet")</script>';
	}else{
		$result1=mysqli_query($data,$sql1);
		$ids=mysqli_num_rows($result1)+1;
		if (mysqli_num_rows($result1) >= 0){
			while($row1 = mysqli_fetch_array($result1)){
				if((($row1['mail']==$mail)&&($row1['idc']==$idc)&&($row1['club_mail']==$club_mail))&&(($row1['date']==$date)&&($row1['start']==$start))){
					echo '<script type="text/javascript">alert("already inserted")</script>';
					break;
				}
			}
			$sql4="INSERT INTO session (`ids`, `club_mail`, `mail`, `idc`, `date`, `start`, `nbheures`) VALUES ('$ids', '$club_mail', '$mail', '$idc','$date', '$start', '$nbheures')";
			if (mysqli_query($data, $sql4)){
        		echo '<script type="text/javascript">alert("Successfuly inserted");window.location ="../Forma.html"</script>';
			}
		}
	}
}
?>

<!DOCTYPE>
<html>
<head>
<title> Insert Session </title>
<link rel="stylesheet" href="ins11.css"/>
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
				<h3>New Session</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input name="club_mail" type="mail" class="form-control" placeholder="Club E-mail" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input name="mail" type="mail" class="form-control" placeholder="User E-mail" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input name="idc" type="number" class="form-control" placeholder="Coach ID" required>
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
						<input name="start" type="text" class="form-control" placeholder="Start">
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