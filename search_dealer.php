<?php $css="search_dealer.css";  include_once("controller/header.php")?>

<?php 
$title="Search Dealer Details";
$sub="(By name)";
$array=array(false,false,false,false,false,false,false,false,true,false,false);
include_once("controller/links.php");
?>

            
            <input oninput="User_Suggestion()" id="search_suggest"  type="text " placeholder="Search "  style="width: 350px; height: 40px; padding-left: 10px; margin-left: 15px; border-radius: 10px; border: 1px solid lightgrey; margin-top: 15px; ">
                 <div id="livesearch" style="background:#f9f9f9;display:none;margin-top: 0px;  overflow-y: scroll;; position:absolute; width: 350px;height: auto; margin-bottom:20px; padding-left:10px; margin-left:15px;">
        
                </div>

        
            <div id="top" style="margin-top: 10px; margin-left:30px; display:inline-block;">
            <input id="date" type="date">
             <button id="generate" onclick="Generate()">Generate</button>
            </div>

            <button id="print" onclick="Print()">Print</button>

              

<div id="print_div" style="padding:20px; margin:15px auto; width:98%; background:white;">

<div  style="margin: 0px auto; margin-top:0px; ">
 <h1 style="margin:0px; text-align:center; font-weight:bold;">AL-HOBAIB TRADER`S</h1>
 <h4 style="margin:0px; margin-top:5px; text-align:center; font-weight:bold;">Distributor / Whole Saler of: Kohat Cement</h4>
 <p style="margin:0px;  text-align:center; font-weight:bold;">Flat # D-7, JK Shopping Mall, Arbab Road , University Road Peshawar</p>
 <p style="margin:0px;  text-align:center; font-weight:bold;">Office No: 091-5843270, Mob No: 0333-9263869 Email: rafiafridi04@gmail.com</p>  
 <h4 style="margin:0px;  text-align:center; font-weight:bold;">NTN / STRN # 3560403-4 / 2100356040316</h4>         

 <div style="margin-top: 10px;">
<div style="display: inline-block; margin-right:10px; margin-top:8px;">
 <label  for="dealer_name">Dealer Name </label>
 <input  id="dealer_name" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:0px; text-align:center; margin-bottom:12px;">
 </div>

 <div style="display: inline-block; margin-right:10px; margin-top:8px;">
 <label  for="dealer_contact">Contact </label>
 <input  id="dealer_contact" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:0px; text-align:center; margin-bottom:12px;">
 </div>

 <div style="display: inline-block; margin-right:10px; margin-top:8px;">
 <label  for="dealer_bal">Current Balance </label>
 <input  id="dealer_bal" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:0px; text-align:center; margin-bottom:12px;">
 </div>

 <div style="display: inline-block; margin-right:10px; margin-top:8px;">
 <label  for="generate_on">Generated On </label>
 <input  id="generate_on" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:0px; text-align:center; margin-bottom:12px;">
 </div>

 <div style="display: inline-block; margin-right:10px; margin-top:8px; display:none;">
 <input  id="dealer_id" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:0px; text-align:center; margin-bottom:12px;">
 </div>

 <div style="display: inline-block; margin-right:10px; margin-top:8px;">
 <label  for="for_month">For Month </label>
 <input  id="for_month" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:0px; text-align:center; margin-bottom:12px;">
 </div>
 </div>
</div >

 <table id="table_data">
 <tr>
 <th>Date</th>
 <th>Time</th>
 <th>Bage Price</th>
 <th>Tons</th>
 <th>Truck Price</th>
 <th>Debit</th>
 <th>Credit</th>
 <th>Total</th>
</tr>

 </table>

</div>

                
        

        <?php
        $js="search_dealer.js";
        include_once("controller/footer.php")
        ?>