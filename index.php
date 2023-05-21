
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  
  <form action="index.php" method="post">

    <label for="quantity">x</label>
    <input type="text" name="x">

    <input type="submit" value="total">


  </form>



    

</body>
</html>

<?php
  $x = $_POST["x"];
  echo $x;
?>

