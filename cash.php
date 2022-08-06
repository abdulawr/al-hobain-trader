<?php $css="cash.css"; include_once("controller/header.php")?>

<?php 
$title="Cash Book";
$sub="";
$array=array(false,false,true,false,false,false,false,false,false,false,false);
include_once("controller/links.php");
?>
<div id="success" class="alert alert-success " style="width: 70%; margin-top: 5px; padding:5px; margin-left:15px; display: none; margin-bottom:5px; ">
                <strong id="sub_text">Success!</strong> Dealer is successful added
              </div>
      <div style="background: white; padding-bottom:15px;">
            <div style="display: inline-block; margin-top:20px; margin-left:20px;">
             <label  for="r_total">Receipts Total </label>
             <input id="r_total" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; ">
             <label for="f_total" style="margin-left:25px;"  >Farword Total </label>
             <input id="f_total" type="text" readonly style="border:none; border-bottom:1px solid grey; padding-left:10px; text-align:center; ">
           
             <button onclick="Calculate()" class="submit"  style="margin-left: 25px;">Calculate</button>
             <button onclick="Submit_Record()" class="submit">Submit</button>
             <button onclick="Clear()" class="submit">Clear</button>
             </div>
      </div>

        <div class="containe-fulid" style="width: 100%; height: auto; ">
        <div class="row">
        <div  class="col-lg-6" style="padding:0px; ;height:100%; background:white; padding-bottom:20px; border-right:1px solid black;">
        <!-- Receive Side -->
        <h4  style="padding-bottom:5px; text-align:center; border-bottom:1px solid black;">Receipts Side</h4>
        <div id="rec_dev"></div>
        <button onclick="Add_REC()" class="submit" style="float: right; margin-top:20px;">Add</button>
        </div>

          <div class="col-lg-6" style="padding:0px;  height:100%; background:white; padding-bottom:20px;">
        <!-- Faward side -->
        <h4 style="padding-bottom:5px; text-align:center; border-bottom:1px solid black;">Farward Side</h4>
        <div id="far_dev"></div>
        <button onclick="Add_FAR()" class="submit" style="float: right; margin-top:20px;">Add</button>
        </div>
          </div>
        </div>
        <!-- ./wrapper -->

        <?php
        $js="cash.js";
        include_once("controller/footer.php")
        ?>