
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
    
  </body>
</html>

<?php
 
    $username = " Dan Var ";

    echo strtolower($username) . "<br>";
    echo strtoupper($username) . "<br>";
    echo trim($username) . "<br>";
    echo str_pad($username, 19, "0") . "<br>";
    $usernameReplaced = str_replace("D","V",$username);
    echo $usernameReplaced . "<br>";
    $usernameReverserd = strrev($username);
    echo $usernameReverserd . "<br>";
    

    
?>

