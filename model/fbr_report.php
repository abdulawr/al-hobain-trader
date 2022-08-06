<?php
include_once("conn.php");
$month=$_REQUEST['mm'];
$year=$_REQUEST['yyyy'];
$qry1="SELECT dealer.id as 'id',SUM(journal.p_ton) as 'ton' FROM journal INNER JOIN dealer on dealer.id = journal.client_id 
where month(journal.date) = {$month} && year(journal.date) = {$year} GROUP by journal.client_id";
$qry="SELECT (((journal.p_ton * 20) * fbr_rate.rate)+journal.s_total) as 'totals', dealer.id as 'id',DATE_FORMAT(journal.date, '%d-%m-%Y') as 'date', dealer.name,dealer.cnic,journal.p_ton,journal.b_price from dealer INNER JOIN journal on dealer.id = journal.client_id INNER JOIN fbr_rate WHERE month(journal.date) = '{$month}' && year(journal.date) = '{$year}' ORDER by journal.date,journal.time ASC;";

if($con)
{
$res=$con->query($qry1);
$search=[];
while($row2=$res->fetch_assoc())
{
    $search["{$row2['id']}"]=$row2["ton"];
}
$result=$con->query($qry);
$response=[];
if($result)
{
while($row=$result->fetch_assoc())
{
    if($search["{$row['id']}"] > 400)
    {
        $row["check"]="true";
    }
    else{
        $row["check"]="false"; 
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