<?php $css="view_cash.css"; include_once("controller/header.php")?>

<?php 
$title="Cash Book";
$sub="(view record store on specific date)";
$array=array(false,false,false,true,false,false,false,false,false,false,false);
include_once("controller/links.php");
?>


<div id="top" style="margin-top: 10px; margin-left:30px;">
            <input id="date" type="date">
             <button id="generate" class="submit" onclick="Generate()">Generate</button>
            </div>

      <div style="background: white; padding-bottom:15px; margin-top:10px;">
            <div style="display: inline-block; margin-top:20px; margin-left:20px;">
             <label  for="r_total">Receipts Total </label>
             <input id="r_total" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; ">
             <label for="f_total" style="margin-left:25px;"  >Farword Total </label>
             <input id="f_total" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; ">
             <label for="date_input" style="margin-left:25px;"  >Date </label>
             <input id="date_input" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center;  width:180px;">
           
             </div>
      </div>

        <div class="containe-fulid" style="width: 100%; height: auto; ">
        <div class="row">
        <div  class="col-lg-6" style="padding:0px; ;height:100%; background:white; padding-bottom:20px; border-right:1px solid black;">
        <!-- Receive Side -->
        <h4  style="padding-bottom:5px; text-align:center; border-bottom:1px solid black;">Receipts Side</h4>
        <div id="rec_dev">
        
        </div>
        </div>

          <div class="col-lg-6" style="padding:0px;  height:100%; background:white; padding-bottom:20px;">
        <!-- Faward side -->
        <h4 style="padding-bottom:5px; text-align:center; border-bottom:1px solid black;">Farward Side</h4>
        <div id="far_dev"></div>
        </div>
          </div>
        </div>

<?php
 $js="view_cash.js";
include_once("controller/footer.php")
?>