<?php $css="journal.css"; include_once("controller/header.php")?> 
 
<?php 
$title="Journal";
$sub="Registrations Form";
$array=array(true,false,false,false,false,false,false,false,false,false,false);
include_once("controller/links.php");
?>

           
                <input oninput="User_Suggestion()" id="search_suggest"  type="text " placeholder="Search "  style="width: 400px; height: 40px; padding-left: 10px; margin-left: 65px; border-radius: 10px; border: 1px solid lightgrey; margin-top: 15px; ">
                 <div id="livesearch" style="background:#f9f9f9;display:none;margin-top: 0px;  overflow-y: scroll;; position:absolute; width: 400px;height: auto; margin-bottom:20px; padding-left:10px; margin-left:65px;">
                
                </div>

            <div id="success" class="alert alert-success " style="width: 45%; margin: 0px; display:none; margin-left:10px; height:35px; padding-top:6px; ">
                <strong>Success!</strong> Journal data is successful inserted
              </div>

              <div id="danger" class="alert alert-danger "  style="width: 50%; margin: 0px; display: none; margin-left:10px; height:35px; padding-top:6px;">
                <strong>Danger!</strong> Journal data is not inserted try again
              </div>
               

            <div class="container " style="width: 100%; height: 100%; margin: 15dp 0px; ">
            
                <div class="form-block " style="margin-top:15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 90%; background-color: white; margin: 10px auto; padding: 20px 35px; border-radius: 10px; ">
                   
                    <h3 style="margin-top: 0px; margin-bottom: 20px; ">Dealer Details</h3>

                    <div class="form-group " style="margin-top: 15px; ">
                        <input id="dealer_id" type="number " class="form-control basit " readonly placeholder="Dealer Id "   >
                        <input id="dealer_name" type="text " class="form-control basit2 " readonly placeholder="Dealer Name "  >
                     </div>
                   
                    <h3 style="margin-top: 0px; margin-bottom: 20px; ">Purchase Section</h3>

                    <div class="form-group " style="margin-top: 15px; ">
                        <input id="p_ton" oninput="P_Section_Calaculation() " type="number" class="form-control basit " placeholder="Enter Qty Ton " >
                        <input id="p_truck" oninput="P_Section_Calaculation() " type="number" class="form-control basit2 " placeholder="Enter Per Truck ">
                        <input id="p_total" type="number" class="form-control basit2 " placeholder="Enter Total " readonly>
                    </div>

                     <div class="form-group " style="margin-top: 15px; ">
                        <input id="bag_price" oninput="S_Section_Calaculation() " type="number" class="form-control basit " placeholder="Enter Bag Price ">
                        <input id="carrage" oninput="S_Section_Calaculation() " type="number" class="form-control basit2 " placeholder="Enter Carrage 200 Bags ">
                    </div>

                    
                     <h3 style="margin-top: 15px; margin-bottom: 20px; ">Sale Section</h3>
                    
                     <div class="form-group " style="margin-top: 15px; ">
                    
                        <input id="s_truck" type="number" class="form-control basit "  placeholder="Enter Per Truck " readonly>
                        <input id="s_total" type="number" class="form-control basit2 " placeholder="Enter Total " readonly>
                        <input id="s_date" type="text" class="form-control basit2 " placeholder="Date " readonly>
                     </div>

                     <div class="form-group " style="margin-top: 15px; " >
                        <input id="profit" type="number " class="form-control basit " placeholder="Profit " readonly>
                        <input id="lose" type="number " class="form-control basit2 " placeholder="Lose " readonly>
                      
                     </div>

                      <button onclick="On_Journal_Submit()" style="margin-bottom: 14px; width: 100px; "  class="btn btn-success ">Submit</button>
                    </div>
                   
                   
            </div>
        </div>
        <!-- ./wrapper -->

        <?php
        $js="journal.js";
        include_once("controller/footer.php")
        ?>