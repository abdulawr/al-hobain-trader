<?php $css="add_dealer.css"; include_once("controller/header.php")?>

<?php 
$title="Add Dealer";
$sub="Registrations Form";
$array=array(false,false,false,false,false,false,true,false,false,false,false);
include_once("controller/links.php");
?>

 
<input oninput="User_Suggestion()" id="search_suggest"  type="text " placeholder="Search "  style="width: 400px; height: 40px; padding-left: 10px; margin-left: 65px; border-radius: 10px; border: 1px solid lightgrey; margin-top: 15px; ">
                 <div id="livesearch" style="background:#f9f9f9;display:none;margin-top: 0px;  overflow-y: scroll;; position:absolute; width: 400px;height: auto; margin-bottom:20px; padding-left:10px; margin-left:65px;">
        
                </div>


            <div class="container " style="width: 100%; height: 100%; margin: 15dp 0px; ">
            
                <div class="form-block " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 90%; background-color: white; margin: 20px auto; padding: 20px 35px; border-radius: 10px; ">
                   
                    <h3 style="margin-top: 0px; margin-bottom: 20px; ">Add Details</h3>

                    <div class="form-group " style="margin-top: 15px; ">
                    <input type="number" style="display:none;" required class="form-control basit "  placeholder="Dealer ID" id="ids">
                        <input type="text " required class="form-control basit "  placeholder="Enter Dealer Name " id="d_name ">
                        <input type="number " required maxlength="12 " id="d_mobile " class="form-control basit2 "  placeholder="Enter Mobile "  name="p_truck " onkeyup=" var date=this.value; if (date.match(/^\d{4}$/) !==null) { this.value=date +
                            '-'; } else if(date.match(/^\d{7}\$/) !==null) { this.value=date + '-'; } ">
                     </div>
                    <div class="form-group " style="margin-top: 15px; ">
                        <input id="d_cnic " type="number " required maxlength="14 " class="form-control basit " placeholder="Enter CNIC " name="p_cnic " onkeyup=" var date=this.value; if (date.match(/^\d{5}$/) !==null) { this.value=date + '-'; } else
                            if(date.match(/^\d{7}\$/) !==null) { this.value=date + '-'; } ">
                        <select aria-placeholder="Select one " required id="select_option_header " class="form-control basit2 " style="padding-left: 10dp; ">
                           <option id="kamran " readonly>Select One.....</option>                           
                        </select>
                     </div>

                     <div class="form-group " style="margin-top: 15px; ">
                        <input type="text " required class="form-control basit " id="d_add " placeholder="Enter Address ">
                     </div>                   
                   
                      <button id="updatesubbutton" style="margin-bottom: 14px; width: 100px; " onclick="Submit_Dealer() " class="btn btn-success " >Submit</button>
                    </div>

                    
            <div id="success " class="alert alert-success " style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Success!</strong> Dealer is successful added
              </div>

              <div id="danger " class="alert alert-danger "  style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Danger!</strong> Dealer is not inserted try again
              </div>
                   
            </div>


        </div>


<?php
       $js="add_dealer.js";
        include_once("controller/footer.php")
        ?>