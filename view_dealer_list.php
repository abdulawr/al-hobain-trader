<?php $css="view_dealer_list.css"; include_once("controller/header.php")?>

<?php 
$title="All Dealer List";
$sub="(Print all dealer info)";
$array=array(false,false,false,false,false,false,false,false,false,false,true);
include_once("controller/links.php");
?>


<div id="top" style="margin-top: 10px; margin-left:30px;">
             <button id="print" onclick="Print()">Print</button>
            </div>
            

            <div id="print_div" style="padding:20px; margin:15px auto; width:98%; background:white;">

            <div  style="margin: 0px auto; margin-top:0px; ">
             <h1 style="margin:0px; text-align:center; font-weight:bold;">AL-HOBAIB TRADER`S</h1>
             <h4 style="margin:0px; margin-top:5px; text-align:center; font-weight:bold;">Distributor / Whole Saler of: Kohat Cement</h4>
             <p style="margin:0px;  text-align:center; font-weight:bold;">Flat # D-7, JK Shopping Mall, Arbab Road , University Road Peshawar</p>
             <p style="margin:0px;  text-align:center; font-weight:bold;">Office No: 091-5843270, Mob No: 0333-9263869 Email: rafiafridi04@gmail.com</p>  
             <h4 style="margin:0px;  text-align:center; font-weight:bold;">NTN / STRN # 3560403-4 / 2100356040316</h4>         

             

            </div >

             <table id="table_data">
             <tr>
             <th>S.No</th>
             <th>Dealer Name</th>
             <th>CNIC</th>
             <th>Mobile</th>
             <th>Address</th>
             <th>City</th>
             <th>Date</th>
            </tr>

             </table>

        </div>
        
      

        <?php
        $js="view_dealer_list.js";
        include_once("controller/footer.php")
        ?>