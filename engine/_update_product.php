<?php
    require_once ("_db.php");
    $sql = "UPDATE tbl_products
    SET  pname='".$_POST['pname']."', brand= '".$_POST['brand']."',price= ".$_POST['price'].",
    discount=".$_POST['discount'].",descr='".$_POST['descr']."',filename='".md5($_POST['pname'])."-img.jpg' WHERE id=".$_POST['id'] ;
echo "$results";
   /*  $sql = "ALTER `tbl_products` (`id`, `pname`, `brand`, `price`, `discount`, `descr`, `filename`) VALUES"
     (Null,'".$_POST['pname']."', '".$_POST['brand']."', ".$_POST['price'].", ".$_POST['discount'].",'".$_POST['descr']."','".md5($_POST['pname'])."-img.jpg')";
 */
    $target_dir = "d:Development/Web/HTDOCS/resources/products/";
    $target_file = $target_dir . basename(md5($_POST['pname'])."-img.jpg");
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
    }
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        header('Location: http://localhost/');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
   

?>
