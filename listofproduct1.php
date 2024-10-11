<?php
$con = mysqli_connect("localhost","root","","store");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>list of product</title>
</head>
<body>
      <?php
      $sql = "SELECT * FROM product";
      $exsql = mysqli_query($con, $sql);

      
      if($exsql){
            echo "<table border='1'>
            <tr>
            <th>pname</th>
            <th>category</th>
            <th>pcode</th>
            <th>Action</th>
            <tr>";
            while($row = mysqli_fetch_assoc($exsql)){
            $pid = $row['ProductID'];
            $pname = $row['ProductNAME'];
            $pcate = $row['ProductCATE'];
            $pcode = $row['ProductCODE'];
            
            echo "<tr>
            <td>$pid</td>
            <td>$pname</td>
            <td>$pcate</td>
            <td><a href='editproduct.php ? id=$pid'>Edit</td>
            </tr>";
      } 

      echo "</table>";
}
      ?>
</body>
</html>