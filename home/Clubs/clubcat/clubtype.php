<!DOCTYPE>
<html>
<head>
<title> board surfing Clubs </title>
<link rel="stylesheet" href="clubtype.css"/>
<link rel="shortcut icon" href="../../Store/images/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="div1">
  <?php
    session_start();
      $con=mysqli_connect("localhost", "root", "", "ripshark");
      $type=$_GET["type"];
      $query = "SELECT * FROM club where `cat`='$type'";
      $result = mysqli_query($con, $query);
      if((mysqli_num_rows($result) > 0)){
        while($row = mysqli_fetch_array($result)){
          ?>  
          <form method="post" action="clubtype.php?action=add&id=<?php echo $row["club_mail"]; ?>">
            <div>
              <a href="clubname.php?id=<?php echo $row["club_mail"]; ?>"><img type="submit" name='<?php $_SESSION["club_mail"]=$row["club_mail"]; ?>' src="<?php echo $row["logo"]; ?>"></a>
	            <h2><?php echo $row["club_name"]; ?></h2>
            </div>
          </form>
  <?php
      }  
    }
  ?>
</div>
<a href="../clubs.php" class="button" style="vertical-align:middle"><span>Previous </span></a>
</body>
</html>