<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>30DaysOfPHP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<body>


  <form action="site.php" method="get">
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <input type="submit">
  </form>
  <br>
  your name is
  <?php
  echo  $_GET["name"];
  ?>
  <br>
  your age is
  <?php
  echo  $_GET["age"];
  ?>

  <!-- Scripts-->
  <script src="" async defer>
  </script>
</body>

</html>