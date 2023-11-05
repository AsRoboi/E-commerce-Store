<?php 
 require_once ("_db.php");

$status= array("State"=>"Initialized","Results"=>"false");
$disclaimer= array("Copyright"=>"2022","disclaimer"=>"The information contained on the Service is for general information purposes only.","
The Company assumes no responsibility for errors or omissions in the contents of the Service.In no event shall the Company be liable for 
any special, direct, indirect, consequential, or incidental","damages or any damages whatsoever, whether in an action of contract, negligence 
or other tort, arising out of or in connection with the use of the Service or the contents of the Service."," The Company reserves the right to 
make additions, deletions, or modifications to the contents on the Service at any time without prior notice.",
"Contact"=>"aashikahamed8@gmail.com");



if(isset($_GET["Key"]) && $_GET['Key']== "eda56b717efb6ebe6841c557b89f7eb6"){
 $sql = 'SELECT * from tbl_products WHERE  category = "Computer Accessories"';
 $result = mysqli_query($con,$sql);
 echo'$results';
if($result){ header("Content-Type:JSON");try{
      
    $i=0;
    while($row = mysqli_fetch_assoc($result)){
        $response[$i]['pname']=$row['pname'];
        $response[$i]['brand']=$row['brand'];
        $response[$i]['price']=$row['price'];
        $response[$i]['descr']=$row['descr'];
      
        $i++;
        $status= array("State"=>"Success","Results"=>"true");
    }   

        
        
    }catch(exception $e){
            $status[]= array("State"=>"Failed","Results"=>"false");
    }
}}else{
    $status=array("State"=>"Anauthorized","Results"=>"false");
    $data = array("Error"=>"Invalid API Key Submitted");}
    



    
$reply=array("Status"=>$status,"Results"=>$response,"disclaimer"=>$disclaimer);
   
header('Content-Type:application/json; charset=utf-8');
echo json_encode($reply);

?>
