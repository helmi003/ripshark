<?php 
$data=mysqli_connect("localhost", "root", "", "ripshark");
session_start();
if(!empty($_SESSION["admin"])){
if($_SESSION["admin"]==true){
	$id=$_SESSION["admin"];
if(isset($_POST['test'])){
	
	$club_mail=$_POST['club_mail'];
	$sql1="SELECT * FROM club WHERE club_mail='$club_mail'";
	$result1=mysqli_query($data,$sql1);
	if (mysqli_num_rows($result1) > 0){
        $sql1="DELETE FROM my_clubs WHERE club_mail='$club_mail'";
	    $sql2="DELETE FROM session WHERE club_mail='$club_mail'";
	    if (mysqli_query($data, $sql1)){}
	    if (mysqli_query($data, $sql2)){}
        $sql4="DELETE FROM club WHERE club_mail='$club_mail'";
	    if (mysqli_query($data, $sql4)){
            echo '<script type="text/javascript">alert("Successfuly deleted");window.location ="../Forma.html"</script>';
			$action="supp the club : ".$club_name;
			$sql3="INSERT INTO manage (admin_mail, action) VALUES ('$id', '$action')";
			if (mysqli_query($data, $sql3)){}
        }
    }else {
        echo '<script type="text/javascript">alert("Non-existent club");</script>';
    }
}}}else{
	echo '<script type="text/javascript">alert("you need to sign up first");window.location ="../Forma.html";</script>';
}
?>

<!DOCTYPE>
<html>
<head>
<title> Supp Club </title>
<link rel="stylesheet" href="suppclub.css"/>
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
				<h3>Supp Club</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="suppclub.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="club_mail" type="email" class="form-control" placeholder="Club mail">
					</div>
                    <div class="form-group">
						<input type="submit" name="test" value="Test" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div> 
</body>
</html>