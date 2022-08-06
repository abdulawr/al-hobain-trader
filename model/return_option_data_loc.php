<?php
include_once("conn.php");

if($con)
{
    $qry="SELECT * from location;";
    $result=$con->query($qry);
    $response=[];
    if($result)
    {
        while($row=$result->fetch_assoc())
     array_push($response,$row);
    } 
echo json_encode(array("response"=>$response));

}


?>