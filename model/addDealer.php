<?php
include_once("conn.php");

if($con)
{
if(isset($_GET['submit']))
{
if($_GET['submit'] == "Submit")
{
    $qry="INSERT INTO dealer(name,address,loc_id,cnic,mobile,date) VALUES('{$_GET['name']}','{$_GET['add']}','{$_GET['loc']}','{$_GET['cnic']}','{$_GET['mobile']}','{$_GET['date']}');";
    if($con->query($qry))
    {
        echo "Successful";
    }
    else{
       echo "Faild";
    }
}
elseif($_GET['submit'] == "Update" && isset($_GET['ids'])){
    $qry="UPDATE dealer SET name ='{$_GET['name']}',address='{$_GET['add']}',cnic='{$_GET['cnic']}',mobile='{$_GET['mobile']}' WHERE id={$_GET['ids']};";
    if($con->query($qry))
    {
        echo "Successful";
    }
    else{
       echo "Faild";
    }
}
}

}

?>