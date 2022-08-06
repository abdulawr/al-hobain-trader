<?php $css="addLocation.css"; include_once("controller/header.php")?>

<?php 
$title="Update FBR Rate";
$sub="(Change FBR rate per bage just enter new value and click update)";
$array=array(false,false,false,false,false,false,false,false,false,false,false);
include_once("controller/links.php");
?>

          <div style="width: 98%; height:auto;">
          <center>
              
          <div style="margin-top: 30px;">
            <input id="fbr_rate" required type="text "  style="width: 310px; height: 40px; padding-left: 10px; border-radius: 10px; border: 1px solid lightgrey; ">
            <button class="submit" onclick="Update()" style="margin-left: 20px; ">Update</button>
            </div>


            <div id="success " class="alert alert-success " style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Success!</strong> Location is successful added
              </div>

              <div id="danger " class="alert alert-danger "  style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Danger!</strong> Location is not inserted try again
              </div>

          </center>

          </div>

          <?php
        $js="addLocation.js";
        include_once("controller/footer.php")
        ?>