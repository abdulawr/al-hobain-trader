<?php
include_once("conn.php");

$dealer_id=$_REQUEST['id'];
$qty_ton=$_REQUEST['qty_ton'];
$p_total=$_REQUEST['p_total'];
$p_truck=$_REQUEST['p_truck'];
$bag_price=$_REQUEST['bag_price'];
$carrage=$_REQUEST['carrage'];
$s_truck=$_REQUEST['s_truck'];
$s_total=$_REQUEST['s_total'];
$profit=$_REQUEST['profit'];
$lose=$_REQUEST['lose'];
$date=$_REQUEST['date'];

$total=$s_total;
$qry="INSERT INTO balance (client_id, balance) VALUES ({$dealer_id},{$total}) ON DUPLICATE KEY UPDATE balance=(balance+$total);";
$qry .="INSERT INTO journal (client_id,date,p_ton,p_truck,p_total,b_price,carrage,s_truck,s_total,profit,lose) VALUES({$dealer_id},'{$date}',{$qty_ton},{$p_truck},{$p_total},'{$bag_price}','{$carrage}',{$s_truck},{$s_total},'{$profit}','{$lose}');";

if($con && isset($_REQUEST['date']))
{
    if($con->multi_query($qry))
    {
        echo "Successful";
    }
    else{
        echo "Faild";
    }
}

?>