<?php
include_once("conn.php");
$id=$_REQUEST['id'];
$date=$_REQUEST['date'];
$credit=$_REQUEST['credit'];
$part=$_REQUEST['part'];
$balance=$_REQUEST['total'];
$qry="UPDATE balance SET balance={$balance} where client_id = {$id};";
$qry .= "INSERT INTO ledger(client_id,date,partic,credit,balance) VALUES({$id},'{$date}','{$part}',{$credit},{$_REQUEST['bal']});";
if($con)
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