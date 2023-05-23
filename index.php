
<?php
  session_start();
  include("header.html");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is the homepage <br>
  Stuff on homepage.

  <form action="index.php" method="post">
  username:
  <input type="text" name="username">
  password:
  <input type="text" name="password">
  <input type="submit" name="submit">
  </form>

</body>
</html>

<?php
include("footer.html");
include("cookie.php");

  foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
  }
  if($_POST){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

  }else{
    echo "post not set <br>";
  }

  echo "session stuff: <br>";
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
?>