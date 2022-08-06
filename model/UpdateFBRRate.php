<?php
 include("conn.php");
if(isset($_GET["val"]))
{
    $qry="UPDATE fbr_rate SET rate = {$_GET['val']};";
    $con->query($qry);
}
else{
$qry="select * from fbr_rate";
$result=$con->query($qry);
$row=$result->fetch_assoc();
echo $row["rate"];
}


?>