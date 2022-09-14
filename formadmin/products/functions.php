<?php
  include("connection.php");
if(isset($_POST["Import"])){
  $con = getdb();
    $filename=$_FILES["file"]["tmp_name"];    
    if($_FILES["file"]["size"] > 0){
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT into product (`id`,`name`,`type`,`description`,`price`,`url`) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                   $result = mysqli_query($con, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
        }
           }
      
           fclose($file);  
    }
}
function get_all_records(){
  $con = getdb();
  $Sql = "SELECT * FROM product";
  $result = mysqli_query($con, $Sql);  
  if (mysqli_num_rows($result) > 0) {
   echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
           <thead><tr><th>id</th>
                        <th>name</th>
                        <th>type</th>
                        <th>description</th>
                        <th>price</th>
                        <th>url</th>
                      </tr></thead><tbody>";
   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>" . $row['id']."</td>
                 <td>" . $row['name']."</td>
                 <td>" . $row['type']."</td>
                 <td>" . $row['description']."</td>
                 <td>" . $row['price']."</td>
                 <td>" . $row['url']."</td>
              </tr>";        
   }
  
   echo "</tbody></table></div>";
   
} else {
   echo "you have no records";
}
}

if(isset($_POST["Export"])){
  $con = getdb();
  header('Content-Type: text/csv; charset=utf-8');  
  header('Content-Disposition: attachment; filename=products.csv');  
  $output = fopen("php://output", "w");  
  fputcsv($output, array('id', 'name', 'type', 'description', 'price', 'url'));  
  $query = "SELECT * from product";  
  $result = mysqli_query($con, $query);  
  while($row = mysqli_fetch_assoc($result))  
  {  
       fputcsv($output, $row);  
  }  
  fclose($output);  
}


if(isset($_POST["Import2"])){
  $con = getdb();
  $filename2=$_FILES["file"]["tmp_name"];    
  if($_FILES["file"]["size"] > 0){
      $file2 = fopen($filename2, "r");
        while (($getData2 = fgetcsv($file2, 10000, ",")) !== FALSE)
         {
           $sql2 = "INSERT into club (`club_name`,`club_mail`,`club_number`,`club_adresse`,`cat`,`logo`,`description`) 
                 values ('".$getData2[0]."','".$getData2[1]."','".$getData2[2]."','".$getData2[3]."','".$getData2[4]."','".$getData2[5]."','".$getData2[6]."')";
                 $result2 = mysqli_query($con, $sql2);
      if(!isset($result2))
      {
        echo "<script type=\"text/javascript\">
            alert(\"Invalid File:Please Upload CSV File.\");
            window.location = \"clubsA.php\"
            </script>";    
      }
      else {
          echo "<script type=\"text/javascript\">
          alert(\"CSV File has been successfully Imported.\");
          window.location = \"clubsA.php\"
        </script>";
      }
         }
    
         fclose($file2);  
  }
}
function get_all_clubs(){
  $con = getdb();
  $Sql = "SELECT * FROM club";
  $result = mysqli_query($con, $Sql);  
  if (mysqli_num_rows($result) > 0) {
   echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
          <thead><tr>
                        <th>name</th>
                        <th>mail</th>
                        <th>number</th>
                        <th>adresse</th>
                        <th>cat</th>
                        <th>logo</th>
                        <th>description</th>
                  </tr>
          </thead><tbody>";
   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>" . $row['club_name']."</td>
                 <td>" . $row['club_mail']."</td>
                 <td>" . $row['club_number']."</td>
                 <td>" . $row['club_adresse']."</td>
                 <td>" . $row['cat']."</td>
                 <td>" . $row['logo']."</td>
                 <td>" . $row['description']."</td>
              </tr>";        
   }
  
   echo "</tbody></table></div>";
   
} else {
   echo "you have no clubs";
}
}


if(isset($_POST["Export2"])){
  $con = getdb();
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=club.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('name', 'mail', 'number', 'adresse', 'cat', 'logo', 'description'));  
    $query = "SELECT * from club";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);  
}



if(isset($_POST["Import3"])){
  $con = getdb();
  $filename3=$_FILES["file"]["tmp_name"];    
  if($_FILES["file"]["size"] > 0){
      $file3 = fopen($filename3, "r");
        while (($getData3 = fgetcsv($file3, 10000, ",")) !== FALSE)
         {
           $sql3 = "INSERT into prod_detail (`id_prod`,`id`,`stock`,`sold`) 
                 values ('".$getData3[0]."','".$getData3[1]."','".$getData3[2]."','".$getData3[3]."')";
                 $result3 = mysqli_query($con, $sql3);
      if(!isset($result3))
      {
        echo "<script type=\"text/javascript\">
            alert(\"Invalid File:Please Upload CSV File.\");
            window.location = \"../prod_detail/prod_detail.php\"
            </script>";    
      }
      else {
          echo "<script type=\"text/javascript\">
          alert(\"CSV File has been successfully Imported.\");
          window.location = \"../prod_detail/prod_detail.php\"
        </script>";
      }
         }
    
         fclose($file3);  
  }
}
function get_all_details(){
  $con = getdb();
  $Sql3 = "SELECT * FROM prod_detail";
  $result3 = mysqli_query($con, $Sql3);  
  if (mysqli_num_rows($result3) > 0) {
   echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
          <thead><tr>
                        <th>id_prod</th>
                        <th>id</th>
                        <th>stock</th>
                        <th>sold</th>
                  </tr>
          </thead><tbody>";
   while($row3 = mysqli_fetch_assoc($result3)) {
       echo "<tr><td>" . $row3['id_prod']."</td>
                 <td>" . $row3['id']."</td>
                 <td>" . $row3['stock']."</td>
                 <td>" . $row3['sold']."</td>
              </tr>";        
   }
  
   echo "</tbody></table></div>";
   
} else {
   echo "you have no product details";
}
}


if(isset($_POST["Export3"])){
  $con = getdb();
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=prod_detail.csv');  
    $output3 = fopen("php://output", "w");
    fputcsv($output, array('id_prod', 'id', 'stock', 'sold'));  
    $query3 = "SELECT * from prod_detail";  
    $result = mysqli_query($con, $query3);  
    while($row3 = mysqli_fetch_assoc($result3))  
    {  
         fputcsv($output3, $row3);  
    }  
    fclose($output3);  
}
?>