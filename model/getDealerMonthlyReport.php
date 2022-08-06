<?php

include("conn.php");

if(isset($_GET['id']))
{
 $journal="SELECT DATE_FORMAT(journal.date, '%d-%m-%Y') as 'date',b_price,p_ton,s_truck,s_total,ledger.credit,TIME_FORMAT(journal.time, '%h:%i:%s %p') as 'time',ledger.total_balance from journal LEFT JOIN ledger on journal.client_id=ledger.client_id && journal.date = ledger.date WHERE journal.client_id = {$_GET['id']} && Month(journal.date) = {$_GET['mm']} && Year(journal.date) = {$_GET['yy']} ORDER by journal.date,ledger.date ASC;";
 $ledger="SELECT DATE_FORMAT(ledger.date, '%d-%m-%Y') as 'date',b_price,p_ton,s_truck,s_total,ledger.credit,TIME_FORMAT(ledger.time, '%h:%i:%s %p') as 'time',ledger.total_balance from ledger LEFT JOIN journal on journal.client_id=ledger.client_id && day(journal.date) = day(ledger.date) WHERE ledger.client_id = {$_GET['id']} && Month(ledger.date) = {$_GET['mm']} && Year(ledger.date) = {$_GET['yy']} && journal.date is null ORDER by ledger.date ASC;";  
 $response=[];

$result1=$con->query($journal);
$result2=$con->query($ledger);
if($result1)
{
   while($row1=$result1->fetch_assoc())
   {
    array_push($response,$row1);
   }

   while($row1=$result2->fetch_assoc())
   {
    array_push($response,$row1);
   }

echo json_encode($response);

}
}

?>