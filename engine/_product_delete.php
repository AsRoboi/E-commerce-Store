<?php
    require_once ("_db.php");
$sql = "DELETE FROM tbl_products WHERE id='".$_POST['id']."'";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: http://localhost/');
} else {
  echo "Error deleting record: " . $con->error;

}

$con->close();
?>
   
    


