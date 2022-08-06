<?php
include("conn.php");
if(isset($_GET['id']))
{
$qry="SELECT * from dealer WHERE id = {$_GET['id']};";
$result=$con->query($qry);
if($result)
{
    echo json_encode($result->fetch_assoc());
}
}


?>