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
    Color: <input type="text" name="color">
    <br>
    Plural Noun: <input type="text" name="pluralNoun">
    <br>
    Celbritye: <input type="text" name="celebrity">
    <br>

    <input type="submit"></form>

    Answer:
    <?php
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];

echo "Rose are $color <br>";
echo "$pluralNoun are blue <br>";
echo "i love $celebrity <br>";
?>


    <!-- Scripts-->
    <script src="" async defer>
    </script>
</body>

</html>