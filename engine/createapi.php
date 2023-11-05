<?php
require_once('_db.php');
/* $sql = "INSERT INTO contact (username) VALUES(";
    $sql.= "'$username')";
    $result = mysqli_query($con,$sql);
  //execute the SQL command in PHP
  echo' $result';
  if ($con->query($sql) === TRUE) {

    header('Location:http://localhost/');
  } else {
    echo "Error" . $con->error;
  
  } */

$sql = "INSERT INTO `api users`(`username`,  `password1`)VALUES ('" . $_POST['username'] . "', '" . $_POST['password1'] . "'";
    $result = mysqli_query($con,$sql);
    $result = mysqli_query($con,$sql);
  //execute the SQL command in PHP

  if ($con->query($sql) === TRUE) {

    header('Location:http://localhost/');
  } else {
    echo "Error" . $con->error;
  
  }

$con->close();

?>