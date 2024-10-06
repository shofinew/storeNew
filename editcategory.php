<?php
$con = mysqli_connect("localhost","root","","store");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>editcategory</title>
</head>
<body>
      <?php
      if(isset($_GET['id'])){
            $getid = $_GET['id'];

           $sql = "SELECT * FROM category WHERE CategoryID=$getid";
           $exsqle = mysqli_query($con,$sql);
           $data = mysqli_fetch_assoc($exsqle);
           $CategoryID = $data['CategoryID'];
           $CategoryNAME = $data['CategoryNAME'];
           $CategoryDATE = $data['CategoryDATE'];

      }

      $name = $_GET['name'];
      $date = $_GET['date'];
      $id = $_GET['id'];
     
      ?>
      <form action = "editcategory.php" method="GET">
            <input type="text" name="name" value="<?php echo $CategoryNAME ?>" ><br><br>
            <input type="date" name="date" value="<?php echo $CategoryDATE ?>"><br><br>
            <input type="text" name="id" value="<?php echo $CategoryID ?>" hidden>
            <input type="submit" value="submit">
      </form>

      <?php
      
      ?>
</body>
</html>