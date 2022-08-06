<?php
include_once("conn.php");
if($con && isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
$bal=$_REQUEST['bal'];
$qry="INSERT INTO balance(client_id,balance) VALUES({$id},{$bal});";
    if($con->query($qry))
    {
        echo "Successful";
    }
    else{
        echo "Faild";
    }
}
else{
    echo "Faild"; 
}

?>