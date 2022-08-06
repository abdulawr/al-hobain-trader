<?php
include("conn.php");

if(isset($_GET['date']))
{
    $qry="SELECT cash_book.name,cash_book.value,cash_book.type,cash_balance.r_balance,cash_balance.f_balance from cash_book INNER JOIN cash_balance on cash_book.date=cash_balance.date WHERE cash_book.time = cash_balance.time && cash_book.date = '{$_GET['date']}';";
    $response=[];
    $result=$con->query($qry);
    while($row=$result->fetch_assoc())
    {
        array_push($response,$row);
    }
    echo json_encode($response);
}

?>