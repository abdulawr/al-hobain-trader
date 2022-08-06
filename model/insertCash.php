<?php
include("conn.php");

if(isset($_GET['json']) && isset($_GET['date']) && isset($_GET['r_bal']) && isset($_GET['f_bal']))
{
 $qry1="INSERT INTO cash_balance(date,r_balance,f_balance) VALUES('{$_GET['date']}',{$_GET['r_bal']},{$_GET['f_bal']});";
 $check=$con->query($qry1);
 $json=json_decode($_GET['json']);
 $id=$con->insert_id;
 for($i=0; $i<sizeof($json); $i++)
 {
     $prod=$con->prepare("INSERT INTO cash_book(date,name,value,type,bal_id) value(?,?,?,?,?);");
     $name=$json[$i]->name;
     $value=$json[$i]->value;
     $type=$json[$i]->type;
     $date=$_GET["date"];
     $bal_id=$id;

     $prod->bind_param("sssss",$date,$name,$value,$type,$bal_id);
     $prod->execute();
 }
 if(!$con->error)
 {
     echo "successfull";
 }
}
else{
    echo "Data is not sended";
}

?>