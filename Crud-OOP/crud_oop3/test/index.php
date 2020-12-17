<?php
include "action.php";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Hello, world!</title>

</head>

<body>



  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Stock</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">Enter Details</div>
          <div class="panel-body">
            <?php
              if(isset($_GET["update"])){
//                  if(isset($_GET["id"])){
//                      $id = $_GET["id"];
//                  }
                  $id = $_GET["id"] ?? null;
                  $where = array(
                          "id"=>$id,
                  );
                  if (isset($obj)) {
                      $myrow = $obj->select_record("medicines", $where);
                      ?>
            <!--Breaking point-->

            <form method="post" action="action.php">
              <table class="table table-hover">
                <tr>

                  <td><input type="hidden" name="id" value="<?php echo  $id?>"></td>
                </tr>
                  <tr>
                      <td>Medicine Name</td>
                      <td><input type="text" name="name" class="form-control" value="<?php echo $myrow["m_name"]?>"
                                 placeholder="Enter Name"></td>
                  </tr>

                <tr>
                  <td>Quantity</td>
                  <td><input type="text" name="qty" class="form-control" value="<?php echo $myrow["qty"]?>"
                      placeholder="Enter Quantity"></td>
                </tr>

                <tr>

                  <td colspan="2"><input type="submit" class="btn btn-primary" name="edit" value="Update"></td>
                </tr>
              </table>
            </form>
            <?php

                  }
              } else {
                  ?>
            <form method="post" action="action.php">
              <table class="table table-hover">
                <tr>
                  <td>Medicine Name</td>
                  <td><input type="text" name="name" class="form-control" placeholder="Enter Name"></td>
                </tr>

                <tr>
                  <td>Quantity</td>
                  <td><input type="text" name="qty" class="form-control" placeholder="Enter Quantity"></td>
                </tr>

                <tr>

                  <td colspan="2" style="align"><input type="submit" class="btn btn-primary" name="submit"
                      value="Store"></td>
                </tr>
              </table>
            </form>

            <?php


              }
              ?>


          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"></div>
        <table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>Medicine Name</th>
            <th>Available Stock</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
          <?php
            if (isset($obj)) {
                $myrow = $obj->fetch_record("medicines");
            }
            foreach ($myrow as $row){
                //breaking point+
                ?>
          <tr>
            <th><?php echo $row["id"]; ?></th>
            <th><?php echo $row["m_name"]; ?></th>
            <th><b><?php echo $row["qty"]; ?></b></th>
            <th><a href="index.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></th>
            <th><a href="action.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></th>
          </tr>
          <?php
            }

            ?>

        </table>
        <div class="col-md-2"></div>
      </div>
    </div>

  </div>




  <!--Scripts-->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>