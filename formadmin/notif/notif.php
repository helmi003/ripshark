<!DOCTYPE>
<html>
<head>
<title> Notifications </title>
<link rel="stylesheet" href="notif1.css"/>
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
				<h3>Notifications</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					<div class="input-group form-group">
                        <?php 
                            $data=mysqli_connect("localhost", "root", "", "ripshark");
                            $sql1="SELECT * FROM contact_us";
	                        $result1=mysqli_query($data,$sql1);
		                    if (mysqli_num_rows($result1) >0){
			                    while($row1 = mysqli_fetch_array($result1)){
                                    $sql2="SELECT * FROM user JOIN contact_us ON user.mail=contact_us.mail";
                                    $result2=mysqli_query($data,$sql2);
                                    if (mysqli_num_rows($result2) >= 0){
                                        while($row2 = mysqli_fetch_array($result2)){
                                            $name=$row2["name"]." ".$row2["last_name"];
                                        }
                                    }
					                ?>
                                    <h3>Subject : <?php echo $row1["subject"]; ?></h3>

                                    <p>message from <?php echo $name.": ".$row1["msg"] ?></p>
                                    <?php
				                }
                            }else {
                                ?>
                                <p>there's no notifications yet</p>
                                <?php
                            }
                        ?>
						<p></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div> 
</body>
</html>