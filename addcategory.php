<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>addcategory</title>
</head>
<body>
      <form action = "addcategory.php" method="POST">
            <input type="text" name="name" placeholder="categoryname"><br><br>
            <input type="date" name="date" placeholder="categorydate"><br><br>
            <input type="submit" value="submit">
      </form>

      <?php
      $_SERVER['REQUEST_METHOD']==="POST";
      $categoryname = $_POST['name'];
      $categorydate = $_POST['date'];

      $con = mysqli_connect("localhost","root","","store");
      $sql = "INSERT INTO category(CategoryNAME, CategoryDATE)VALUES('$categoryname','$categorydate')";
      $exsql = mysqli_query($con, $sql);
      if($exsql){
            echo "data inserted";
      }else{
            echo mysqli_error($con);
      }
      ?>
</body>
</html>