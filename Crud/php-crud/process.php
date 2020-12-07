<?php
session_start();

// $mysqli = new mysqli('localhost', 'ras', '@Kathuemmah77', 'crud') or die(mysqli_error($mysqli));
//  <!-- Connect to database-->
$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$location = '';

// Save Button
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or
    die($mysqli->error());

    //print message
    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";

    //redirect index.php
    header("location: index.php");

}
 // Delete
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data  WHERE id = $id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";

    //redirect index.php
    header("location: index.php");
}

//Edit
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
$update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    //check if data exists
   /* if(count($result)==1){
        $row = $result->fetch_array(); */
    if($result->num_rows){
        $row = $result->fetch_array();
        $name = $row['name'];
        $location = $row['location'];
    }
}

//update
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("UPDATE data SET name = '$name', location = '$location' WHERE id = $id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "warning";

    header('location: index.php');
}

