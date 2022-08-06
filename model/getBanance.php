<?php
include_once("conn.php");
$id=$_REQUEST['id'];
$qry="SELECT balance from balance where client_id={$id};";
if($con)
{
$result=$con->query($qry);
if($result)
{
    echo json_encode(array("response"=>$result->fetch_assoc()));
}
}
else{
    echo "Connection falid";
}


?>