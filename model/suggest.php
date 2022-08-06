<?php 
include_once("conn.php");
$name=$_REQUEST['name'];
if($con)
{
     if(isset($_GET['name']) && $_GET['name'] != null)
    { 
        $qry="SELECT DISTINCT(dealer.id),dealer.name,location.name as 'loc' from dealer INNER JOIN location on dealer.loc_id = location.id
        where dealer.name LIKE '{$name}%' limit 15;" ; 
        $result=$con->query($qry);
        $response=[];
        
        if($result != null)
        {
            while($row=$result->fetch_assoc())
            {
            array_push($response,$row);
            }
            echo json_encode(array("response"=>$response)); 
        }
        else{
            echo "No Suggestion";
        }
       
    }
 
}
else{
    die("connection failed : ".$con->connection_error);
} 



?>