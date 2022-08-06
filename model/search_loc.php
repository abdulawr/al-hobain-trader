<?php
include_once('conn.php');
$loc=$_GET['id'];
$qry="SELECT dealer.name,dealer.mobile,balance.balance from dealer INNER JOIN balance on dealer.id = balance.client_id WHERE dealer.loc_id = {$loc};";
if($con)
{
$response=array();
$result=$con->query($qry);
if($result)
{
    while($row=$result->fetch_assoc())
    {
        array_push($response,$row);
    }
    echo json_encode($response);
}
}
else{
    echo "Failed". $con->errorno;
}

?>