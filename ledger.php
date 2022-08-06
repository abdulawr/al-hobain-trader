<?php $css="ledger.css"; include_once("controller/header.php")?>

<?php 
$title="Ledger";
$sub="Registrations Form";
$array=array(false,true,false,false,false,false,false,false,false,false,false);
include_once("controller/links.php");
?>

          <!--Search Form-->
               <input oninput="User_Suggestion()" id="search_suggest"  type="text " placeholder="Search "  style="width: 400px; height: 40px; padding-left: 10px; margin-left: 65px; border-radius: 10px; border: 1px solid lightgrey; margin-top: 15px; ">
                 <div id="livesearch" style="background:#f9f9f9;display:none;margin-top: 0px;  overflow-y: scroll;; position:absolute; width: 400px;height: auto; margin-bottom:20px; padding-left:10px; margin-left:65px;">
                
                </div>


            <div class="container " style="width: 100%; height: 100%; margin: 15dp 0px; ">
            
                <div  class="form-block " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 90%; background-color: white; margin: 20px auto; padding: 20px 35px; border-radius: 10px; ">
                   
                    <h3 style="margin-top: 0px; margin-bottom: 20px; ">Dealer Details</h3>

                    <div class="form-group " style="margin-top: 15px; ">
                        <input id="dealer_id" type="number" class="form-control basit " readonly placeholder="Dealer Id ">
                        <input id="dealer_name" type="text" class="form-control basit2 " readonly placeholder="Dealer Name ">
                        <input id="s_date" type="text" class="form-control basit2 " readonly >
                     </div>

                     <h3 style="margin-top: 0px; margin-bottom: 20px; ">Ledger Details</h3>

                    <div class="form-group " style="margin-top: 15px; ">
                        <input id="part"  type="text" class="form-control basit "  placeholder="Enter Particular">
                        <input id="credit" type="number" class="form-control basit2 " placeholder="Enter Credit">
                        <input id="balance" type="number" class="form-control basit2 " placeholder="Balance" readonly>                       
                     </div>
                   
                   
                      <button onclick="On_Submitt_Data()" style="margin-bottom: 14px; width: 100px; "  class="btn btn-success ">Submit</button>
                </div>

                <div id="success" class="alert alert-success " style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Success!</strong> Ledger Data is successful added
              </div>

              <div id="danger" class="alert alert-danger "  style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Danger!</strong> Ledger Date is not inserted try again
              </div>
                   
            </div>
        </div>
        <!-- ./wrapper -->

        <?php
        $js="ledger.js";
        include_once("controller/footer.php")
        ?>