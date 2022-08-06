<?php
include("conn.php");
$mm=$_GET['mm'];
$yyyy=$_GET['yyyy'];
$qry1="SELECT SUM(profit) as 'profit',SUM(lose) as 'lose',SUM(p_ton) as 'ton',SUM(s_total) as 'total_rupee' from journal WHERE month(date) = {$mm} && year(date) = {$yyyy};";
$qry2="SELECT SUM(credit) as 'credit' from ledger WHERE month(date) = {$mm} && year(date) = {$yyyy};";

if($con)
{
    $result1=$con->query($qry1);
    $result2=$con->query($qry2);
    $row1=$result1->fetch_assoc();
    $row2=$result2->fetch_assoc();
    $response=["profit"=>$row1["profit"],"lose"=>$row1["lose"],"ton"=>$row1["ton"],"total_rupee"=>$row1["total_rupee"],"credit"=>$row2["credit"]];
    echo json_encode($response); 
}
echo $con->error;

?>