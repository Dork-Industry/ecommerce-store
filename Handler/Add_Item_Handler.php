<?php
include 'Connection.php';


$Name=$_REQUEST["Name1"];
$Comp=$_REQUEST["ComName"];
$StartPrice=$_REQUEST["SPrice"];
$Categorie=$_REQUEST["Categorie"];


if(strcmp($_GET["Name"],"Gold")==0)
{

    $q="INSERT INTO `gold_item`(`Name`, `ComName`, `StartPrice`, `Caetgorie`) VALUES ('$Name','$Comp','$StartPrice','$Categorie')";


    $res=mysqli_query($con,$q);

    if($res)
    {

        echo json_encode(array(
            "Message"=>true
        ));

    }
}
else if(strcmp($_GET["Name"],"Diamond")==0)
{

    $q="INSERT INTO `diamond_item`(`Name`, `ComName`, `StartPrice`, `Caetgorie`) VALUES ('$Name','$Comp','$StartPrice','$Categorie')";


    $res=mysqli_query($con,$q);

    if($res)
    {

        echo json_encode(array(
            "Message"=>true
        ));

    }
}

else if(strcmp($_GET["Name"],"Silver")==0)
{

    $q="INSERT INTO `silver_item`(`Name`, `ComName`, `StartPrice`, `Caetgorie`) VALUES ('$Name','$Comp','$StartPrice','$Categorie')";


    $res=mysqli_query($con,$q);

    if($res)
    {

        echo json_encode(array(
            "Message"=>true
        ));

    }
}


else if(strcmp($_GET["Name"],"Platinum")==0)
{

    $q="INSERT INTO `platinum_item`(`Name`, `ComName`, `StartPrice`, `Caetgorie`) VALUES ('$Name','$Comp','$StartPrice','$Categorie')";


    $res=mysqli_query($con,$q);

    if($res)
    {

        echo json_encode(array(
            "Message"=>true
        ));

    }
}





// echo json_encode(
//     array(
//         "Message"=>$_GET["Name"]
//     )
//     );

?>