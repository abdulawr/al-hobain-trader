<?php
 include_once("conn.php");
 $con->query("DELETE FROM access;"); 
 echo '<script>location.assign("../index.php");</script>';
?>