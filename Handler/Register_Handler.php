<?php
include 'Connection.php';



$Email=$_REQUEST["Email"];
$Pass=$_REQUEST["Password"];
$CPass=$_REQUEST["CPassword"];

$Passh=password_hash($Pass,PASSWORD_DEFAULT);





$Q="INSERT INTO `user`(`Name`, `Password`) VALUES ('$Email','$Passh')";

$res=mysqli_query($con,$Q);

if($res)
{
    echo json_encode(array(
        "Message"=>true

    ));
    
}









// echo 1;

?>