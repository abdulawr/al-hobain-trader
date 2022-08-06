<?php

include("conn.php");

if($con)
{
    $qry="SELECT dealer.name, dealer.address,dealer.cnic,dealer.mobile,DATE_FORMAT(dealer.date, '%d-%m-%Y') as 'date',location.name as 'loc' FROM dealer LEFT JOIN location on dealer.loc_id = location.id ORDER BY dealer.name ASC";
    $result=$con->query($qry);
    $response=[];
    while($row=$result->fetch_assoc())
    {
        array_push($response,$row);
    }

    echo json_encode($response);
}

?>