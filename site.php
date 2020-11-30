<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>30DaysOfPHP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
<h2> PHP Basics</h2>
</header>
<hr>

<center>
<form action="site.php" method="post">

Name: <input type="text" name = "student" ><br>

<input type="submit">

</form>

<?php
$grades = array("Jim" => "A+", "Pam" => "B-", "Karen" => "C+");

echo $grades[$_POST["student"]];

?>


</center>


    <!-- Scripts-->
    <script src="" async defer>
    </script>
</body>

</html>
