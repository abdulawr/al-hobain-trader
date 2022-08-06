<?php $css="searchLocation.css"; include_once("controller/header.php")?>

<?php 
$title="Search";
$sub="Dealer Through Location";
$array=array(false,false,false,false,false,false,false,false,false,true,false);
include_once("controller/links.php");
?>


            <div style="width: 100%;">
            <select aria-placeholder="Select one " required id="select_option_header" class="form-control basit2 " style="padding-left: 10dp; width:350px; height:40px; margin-top: 10px; margin-left: 60px;">
            <option id="kamran " readonly>Select One.....</option>                           
            </select>
            <button id="generate" onclick="Generate()">Generate</button>
            <button id="print" onclick="Print()">Print</button>
            </div>



            <div id="print_div" style="padding:20px; margin:15px auto; width:98%; background:white;">

<div  style="margin: 0px auto; margin-top:0px; ">
 <h1 style="margin-top: 5px; margin-bottom:0px; text-align:center;"><b>Al-Hobaib Trader`s</b></h1>

 <label style="margin-left: 40px;" for="for_month">Location </label>
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
 <th>Balance</th>
 <th>Contact No</th>
 <th>Credit</th>
 </tr>


 </table>

</div>



</div>


        <!-- ./wrapper -->

        <?php
        $js="search_location.js";
        include_once("controller/footer.php")
        ?>