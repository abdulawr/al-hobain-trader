<?php
include_once("conn.php");
$mm=$_GET['mm'];
$yyyy=$_GET['yyyy'];
$journal="SELECT dealer.id, dealer.name,SUM(journal.p_ton) as 'ton',SUM(journal.s_total) as 'total',dealer.mobile FROM dealer  INNER JOIN journal on dealer.id=journal.client_id WHERE month(journal.date) = '{$mm}' and year(journal.date) = '{$yyyy}' GROUP BY (dealer.id);";
$ledger="SELECT ledger.client_id as 'id',SUM(ledger.credit) as 'credit' from ledger WHERE month(ledger.date) = '{$mm}' && year(ledger.date) = '{$yyyy}' GROUP by (ledger.client_id);";

if($con)
{
$result1=$con->query($journal);
$result2=$con->query($ledger);
$response=[];
if($result1 and $result2)
{
$search=[];
while($row2=$result2->fetch_assoc())
{
$search["{$row2['id']}"]=$row2;
}
 while($row=$result1->fetch_assoc())
{   
   if(isset($search["{$row['id']}"]))
   {
       $row['credit']=$search["{$row['id']}"]['credit'];
   }
   else{
       $row['credit']=0;
   }
   array_push($response,$row);
}

echo json_encode($response);
}
else{
    echo "Failed". $con->errno;
}
}

?>