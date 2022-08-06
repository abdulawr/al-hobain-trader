<?php $css="monthly_report.css"; include_once("controller/header.php")?>

<?php 
$title="Monthly";
$sub="Report Generator";
$array=array(false,false,false,false,true,false,false,false,false,false,false);
include_once("controller/links.php");
?>

          
            <div id="top" style="margin-top: 10px; margin-left:30px;">
            <input id="date" type="date">
             <button id="generate" onclick="Generate()">Generate</button>
             <button id="print" onclick="Print()">Print</button>
            </div>
            

            <div id="print_div" style="padding:20px; margin:15px auto; width:98%; background:white;">

            <div  style="margin: 0px auto; margin-top:0px; ">
             <h3 style="margin:0px; text-align:center;">DEALER TURN OVER AND CREDIT PROFORMA</h3>
             <h3 style="margin-top: 5px; margin-bottom:0px; text-align:center;"><b>Al-Hobaib Trader`s</b></h3>

             <label style="margin-left: 40px;" for="for_month">For the Month of </label>
             <input id="for_month" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center;">
            <div style="display: inline-block; float:right; margin-right:50px;">
             <label  for="for_date">Dated </label>
             <input id="for_date" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; ">
             </div>
            </div>

             <table id="table_data">
             <tr>
             <th>S.No</th>
             <th>Dealer Name</th>
             <th>Monthly Turn Over In Tons</th>
             <th>Monthly Turn Over In Ruppes</th>
             <th>Total Credit</th>
             <th>Contact No</th>
             </tr>

            
             </table>

             <hr>

            <div style="margin-top: 20px;">
             <label style="margin-left: 20px;" for="sum_tons">Sum Of Monthly Over Tons </label>
             <input id="sum_tons" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; width:130px;">

             <label style="margin-left: 20px;" for="sum_tons_rupees">Sum Of Monthly Turn Over In Ruppes </label>
             <input id="sum_tons_rupees" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; width:130px;">
            </div>
            
            <div style="margin-top: 20px;">
             <label style="margin-left: 20px;" for="sum_credit">Sum Of Total Credit </label>
             <input id="sum_credit" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; width:130px;">

             <label style="margin-left: 20px;" for="sum_profit">Sum Of Total Profit </label>
             <input id="sum_profit" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; width:130px;">
            </div>

            <div style="margin-top: 20px;">
             <label style="margin-left: 20px;" for="sum_lose">Sum Of Total Lose </label>
             <input id="sum_lose" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; width:130px;">

            </div>


            </div>
        </div>
<?php
$js="monthly_report.js";
        include_once("controller/footer.php")
        ?>