<?php

if(isset($_GET['id']))
{
    include("conn.php");
    $qry="SELECT mobile from dealer WHERE id = {$_GET['id']};";
    $result=$con->query($qry);
    $row=$result->fetch_assoc();
    echo $row["mobile"];
}

?>