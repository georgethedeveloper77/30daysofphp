<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>

<body>
  <?php require_once 'process.php';?>
  <!-- Connect to database-->
  <?php
$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
// <!----run query--->
$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
//pre_r($result);
//pre_r($result->fetch_assoc()); // <!----fetch_assoc method to pull data from database...thus create a while loop--->
  ?>

  <div class="row justify-content-center">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Location</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <?php
      /*this is pulling records from database & store them on table...note :*/
          while ($row = $result->fetch_assoc()):  
          ?>
      <tr>
        <!-- printing actual values-->
        <td> <?php echo $row['name'];?> </td>
        <td> <?php echo $row['location'];?> </td>
        <td></td>
      </tr>
      <?php endwhile;?>
    </table>
  </div>
  <?php
function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

  <div class="row justify-content-center">
    <form action="process.php" method="POST">

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="Enter Your name">
      </div>

      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="Enter Location">
      </div>

      <div class="form-group">
        <button type="submit " class="btn btn-primary" name="save">Save</button>
      </div>

    </form>
  </div>


  <!-- Scripts-->
  <script src="" async defer></script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

</body>

</html>