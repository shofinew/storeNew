<?php
$con = mysqli_connect("localhost","root","","store");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>list of category</title>
</head>
<body>
      <?php
      $sql = "SELECT * FROM category";
      $exsql = mysqli_query($con, $sql);
      if($exsql){
           while($row = mysqli_fetch_assoc($exsql)){
            echo $row['CategoryNAME'].' '.$row['CategoryDATE'].'<br><br>';
           } 
      }
      ?>
</body>
</html>