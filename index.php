
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

  <label for="radius">radius:</label>
  <input type="number" name="radius" id="radius">

  <input type="submit" value="calculate">


</form> <br>



    

</body>
</html>

<?php
  $radius = $_POST["radius"];
  $circumference = round(2 * pi() * $radius,2);

  if($radius){

    echo "Circumference is {$circumference} cm <br>";
  }

?>

