<?php
$con = mysqli_connect("localhost","root","","store")
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>addcategory1</title>
</head>
<body>
      <?php
      if(isset($_GET['cname'])){
            $cname = $_GET['cname'];
            $cdate = $_GET['cdate'];

      $sql = "INSERT INTO category(CategoryNAME,CategoryDATE)value('$cname','$cdate')";

      $exsql = mysqli_query($con, $sql);
      if($exsql){
            echo "data inserted";
      }else{
            echo mysqli_error($con);
      }
      }
      
      ?>


      <form action="addcategory1.php" method="GET">
      <input type="text" name="cname"><br><br>
      <input type="date" name="cdate"><br><br>
      <input type="submit" value="submit"><br><br>
      </form>
      
</body>
</html>