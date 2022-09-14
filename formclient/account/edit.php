<!DOCTYPE>
<html>
<head>
<title> New Account </title>
<link rel="stylesheet" href="edit2.css"/>
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
                $data=mysqli_connect("localhost", "root", "", "ripshark");
                if(isset($_POST['mail'])){
                    $pdp=$_POST['myfile'];
                    $username=$_POST['name'];
                    $lastname=$_POST['last_name'];
                    $mail=$_POST['mail'];
                    $password=$_POST['password'];
                    $confirm=$_POST['confirm'];
                    $adresse=$_POST['adresse'];
                    $gender=$_POST['gender'];
                    $sql1="SELECT * FROM user WHERE mail='$mail'";
	                $result1=mysqli_query($data,$sql1);
	                if (mysqli_num_rows($result1) > 0){
                    if($confirm==$password){
                        $sql2="UPDATE user set `name`='$username', `last_name`='$lastname', `mail`='$mail', `password`='$password' ,`adresse`='$adresse' ,`gender`='$gender' ,`pdp`='$pdp' WHERE mail='$mail'";
                        if (mysqli_query($data, $sql2)){
                            header("Location: account.php");
                        }
                        else{
                            echo '<script type="text/javascript">alert("Incorrect Password");window.location ="edit.php"</script>';
                        }
                    }
                    }
                }
 
            ?>
				<form method="POST" action="#">

                    <label for="myfile">Profile image : <input type="file" id="myfile" name="myfile"></label>
                    
                    <br>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="name" type="text" class="form-control" placeholder="First Name">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="last_name" type="text" class="form-control" placeholder="Last Name">
					</div>

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
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="confirm" type="password" class="form-control" placeholder="Confirm Password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-house-user"></i></span>
						</div>
						<textarea name="adresse" class="form-control"  rows="3" placeholder="Adresse" required></textarea>
					</div>
					<div class="input-group form-group">
					<p> Gender :</p>
						<label for="male" ><input type="radio" id="male" value="m" name="gender">male</label>
						<label for="female" ><input type="radio" id="female" value="f" name="gender">female</label>
						<label for="other" ><input type="radio" id="other" value="o" name="gender">other</label>
					</div>
                    <div class="form-group">
                        <a href="../../home/Home7.php" class="btn float-left login_btn">Back Home</a>
					    <input type="submit" value="Confirm" class="btn float-right login_btn">
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>