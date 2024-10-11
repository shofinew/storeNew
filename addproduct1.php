<?php
      $con = mysqli_connect("localhost", "root", "", "store");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>addproduct1</title>
</head>
<body>
      <!-- <?php
      $sql="SELECT * FROM category";
      $exsql2 = mysqli_query($con, $sql);
      $data = mysqli_fetch_assoc($exsql2);
     echo $cateid = $data['CategoryID'];
     echo $catename = $data['CategoryNAME'];
      ?> -->


      <form action = "<?php $_SERVER['PHP_SELF']; ?>" method="GET">
            <input type="text" name="pname" placeholder="pname"><br><br>
            <input type="text" name="pcode" placeholder="pcode"><br><br>
            <select name="pcate" >
            <?php
           while ($data = mysqli_fetch_assoc($exsql2)){
            $cateid = $data['CategoryID'];
            $catename = $data['CategoryNAME'];
            echo "<option value='$cateid'>$catename</option>";
           }
            ?>

            </select><br><br>
            <input type="date" name="pdate" placeholder="pdate"><br><br>
            <input type="submit" value="submit">
      </form>

      <?php
      if(isset($_GET['pname'])){
      $pname = $_GET['pname'];
      $pcate = $_GET['pcate'];
      $pcode = $_GET['pcode'];
      $pdate = $_GET['pdate'];

      $con = mysqli_connect("localhost","root","","store");
      $sql = "INSERT INTO product(ProductNAME, ProductCATE, ProductCODE, ProductDATE)
      VALUES('$pname','$pcate', '$pcode', '$pdate')";

      $exsql1 = mysqli_query($con, $sql);
      if($exsql1){
            echo "data inserted";
      }else{
            echo mysqli_error($con);
      }
      }
      ?>
</body>
</html>