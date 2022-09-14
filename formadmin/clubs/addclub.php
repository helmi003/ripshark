<?php 
$data=mysqli_connect("localhost", "root", "", "ripshark");
session_start();
if(!empty($_SESSION["admin"])){
if($_SESSION["admin"]==true){
	$id=$_SESSION["admin"];
if(isset($_POST['test'])){
    $club_name=$_POST['club_name'];
	$club_mail=$_POST['club_mail'];
    $club_number=$_POST['club_number'];
    $club_adresse=$_POST['club_adresse'];
    $cat=$_POST['cat'];
    $type="";
    if ($cat=='bs'){
        $type='boardsurfing';
    }elseif ($cat=='ks') {
        $type='kitesurfing';
    }else {
        $type='sailsurfing';
    }
    $logo='http://localhost/php/ripshark/assets/'.$type.'/clubs'.'/'.$_POST['logo'];
    $description=$_POST['description'];
	$sql2="INSERT INTO club (club_name, club_mail, club_number, club_adresse, cat, logo, description) VALUES ('$club_name', '$club_mail', '$club_number','$club_adresse', '$cat', '$logo', '$description')";
	if (mysqli_query($data, $sql2)){
        // $file = fopen('contacts.csv','a');
        // $line = array ( 
        //         "$club_name",  
        //         "$club_mail",
        //         "$club_number",
        //         "$club_adresse", 
        //         "$cat, $logo",
        //         "$description"
        //         );
        // $file->fputcsv($line);
        // fclose($file);
		$action="added a new club : ".$club_name;
		$sql3="INSERT INTO manage (admin_mail, action) VALUES ('$id', '$action')";
		if (mysqli_query($data, $sql3)){}
        echo '<script type="text/javascript">alert("Successfuly inserted");window.location ="../Forma.html";</script>';
        header('Location: ../Forma.html');
    }
    else{
        echo '<script type="text/javascript">alert("club exist");</script>';
	}
}}}else{
	echo '<script type="text/javascript">alert("you need to sign up first");window.location ="../Forma.html";</script>';
}
?>

<!DOCTYPE>
<html>
<head>
<title> Insert Club </title>
<link rel="stylesheet" href="clubs2.css"/>
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
				<h3>New Club</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="addclub.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="club_name" type="text" class="form-control" placeholder="Club Name" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="club_mail" type="email" class="form-control" placeholder="Club mail" required>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="club_number" type="text" class="form-control" placeholder="Club number" required>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<textarea name="club_adresse" class="form-control"  rows="3" placeholder="Adresse"></textarea>
					</div>

                    <div class="input-group form-group">
					        <p> Categorie :</p>
						    <label for="bs" ><input type="radio" id="male" value="bs" name="cat">boardsurfing</label>
						    <label for="ks" ><input type="radio" id="female" value="ks" name="cat">kitesurfing</label>
						    <label for="ss" ><input type="radio" id="other" value="ss" name="cat">sailsurfing</label>
					</div>

                    <div class="input-group form-group">
                        Club logo : <input type="file" name="logo" accept="image/png, image/jpeg, image/jpg" required>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<textarea name="description" class="form-control"  rows="3" placeholder="Description"></textarea>
					</div>
					<div class="form-group">
						<input name="test" type="submit" value="Test" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>