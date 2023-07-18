<?php
include 'Connection.php';

$Name=$_REQUEST["Name"];

$q="SELECT * FROM `user` WHERE NAME='$Name'";

$res=mysqli_query($con,$q);
$Pass="";

while($row=mysqli_fetch_assoc($res))
{
  $Pass=$row["Password"];

}


if(password_verify($_REQUEST["Password"],$Pass))
{
    session_start();

    $_SESSION["User"]=$Name;
echo    json_encode(
        array(
            "Message"=>true
        )
        );

}
else
{
    echo    json_encode(
        array(
            "Message"=>false
        )
        );

}
// echo    json_encode(
//         array(
//             "Message"=>$Pass
//         )
//         );

// if($res)
// {
// echo    json_encode(
//         array(
//             "Message"=>true
//         )
//         );
// }




?>