<?php
$con = mysqli_connect("localhost","root","","store")
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>listofcategory1</title>
</head>
<body>
      <?php
      $sql = "SELECT * FROM category";
      $exsql = mysqli_query($con, $sql);
      echo "<table border='1'>
            <tr>
            <th>Category</th>
            <th>Date</th>
            <th>Action</th>
            <tr>";

     while( $data = mysqli_fetch_assoc($exsql)){
     $cname = $data['CategoryNAME'];
     $cdate = $data['CategoryDATE'];
     $cid = $data['CategoryID'];
     echo "<tr>
     <td>$cname</td>
     <td>$cdate</td>
     <td><a href='editcategory1.php?id=$cid'>Edit</td>
     </tr>";
     }
      ?>
</body>
</html>