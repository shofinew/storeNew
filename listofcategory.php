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
            echo "<table border='1'>
            <tr>
            <th>Category</th>
            <th>Date</th>
            <th>Action</th>
            <tr>";
            while($row = mysqli_fetch_assoc($exsql)){
            $categoryid = $row['CategoryID'];
            $categoryname = $row['CategoryNAME'];
            $categorydate = $row['CategoryDATE'];
            
            echo "<tr>
            <td>$categoryname</td>
            <td>$categorydate</td>
            <td><a href='editcategory.php?id=$categoryid'>Edit</td>
            </tr>";
      } 

}
echo "</table>";
      ?>
</body>
</html>