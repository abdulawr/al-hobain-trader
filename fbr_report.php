<?php $css="fbr_report.css"; include_once("controller/header.php")?>

<?php 
$title="FBR";
$sub="Report Generator";
$array=array(false,false,false,false,false,true,false,false,false,false,false);
include_once("controller/links.php");
?>

            
            <div id="top" style="margin-top: 10px; margin-left:30px;">
            <input id="date" type="date">
             <button id="generate" onclick="Generate()">Generate</button>
             <button id="print" onclick="Print()">Print</button>
            </div>
            

            <div id="print_div" style="padding:20px; margin:15px auto; width:98%; background:white;">

            <div  style="margin: 0px auto; margin-top:0px; ">
             <h1 style="margin:0px; text-align:center; font-weight:bold;">AL-HOBAIB TRADER`S</h1>
             <h4 style="margin:0px; margin-top:5px; text-align:center; font-weight:bold;">Distributor / Whole Saler of: Kohat Cement</h4>
             <p style="margin:0px;  text-align:center; font-weight:bold;">Flat # D-7, JK Shopping Mall, Arbab Road , University Road Peshawar</p>
             <p style="margin:0px;  text-align:center; font-weight:bold;">Office No: 091-5843270, Mob No: 0333-9263869 Email: rafiafridi04@gmail.com</p>  
             <h4 style="margin:0px;  text-align:center; font-weight:bold;">NTN / STRN # 3560403-4 / 2100356040316</h4>         

             
            <div style="display: inline-block; margin-right:50px; margin-top:8px;">
             <label  for="for_date">Generated On </label>
             <input  id="for_date" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; margin-bottom:12px;">
             </div>
             <div style="display: inline-block; margin-right:50px; margin-top:8px; float:right;">
             <label  for="for_month">For Month</label>
             <input  id="for_month" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; margin-bottom:12px;">
             </div>

            </div >

             <table id="table_data">
             <tr>
             <th>S.No</th>
             <th>Purchaser Name</th>
             <th>CNIC</th>
             <th>Rate</th>
             <th>Qty</th>
             <th>Amount</th>
             <th>Date</th>
            </tr>

             </table>

        </div>

<?php
        $js="fbr_report.js";
        include_once("controller/footer.php")
        ?>