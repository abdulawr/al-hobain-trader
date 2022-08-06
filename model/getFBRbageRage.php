<?php
include("conn.php");
$qry="SELECT * from fbr_rate;";
$result=$con->query($qry);
$row=$result->fetch_assoc();
echo $row["rate"];
?>