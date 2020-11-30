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
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
  </form>

  Answer:
  <?php echo $_GET["num1"] +  $_GET["num2"] ?>


  <!-- Scripts-->
  <script src="" async defer>
  </script>
</body>

</html>