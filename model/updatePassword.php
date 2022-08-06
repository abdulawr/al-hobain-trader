<?php
include("conn.php");

if(isset($_GET['id']))
{
    $check="SELECT id,pass FROM login WHERE id={$_GET['id']};";
    $result=$con->query($check);
    $row=$result->fetch_assoc();

    $oldPass=$_GET['old_pass'];
    $format="$2y$10$";
	$salt="afulsheuskeowncseiolsckdie";
	$newstr= $format . $salt;
    $oldPass= crypt($oldPass,$newstr);

    $newPass=$_GET['new_pass'];
    $newPass= crypt($newPass,$newstr);
    
    if($_GET['id'] == $row['id'] && $oldPass == $row['pass'])
    {
        $qry="UPDATE login SET pass = '{$newPass}' WHERE id = {$_GET['id']} && pass = '{$oldPass}';";
        $con->query($qry);
        echo "success";
    }
    else
    {
        echo "failed";
    }
}

?>