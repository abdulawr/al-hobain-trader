<?php
include_once("conn.php");
$name=ucwords($_GET['name']);
$qry="INSERT INTO location (name) VALUES('{$name}');";
if($con)
{
    if($con->query($qry))
    {
        echo "Successful";
    }
    else{
        echo "Faild";
    }
}

?>