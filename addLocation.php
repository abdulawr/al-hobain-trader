<?php $css="addLocation.css"; include_once("controller/header.php")?>

<?php 
$title="Add New Location";
$sub="(Enter only city name)";
$array=array(false,false,false,false,false,false,false,true,false,false,false);
include_once("controller/links.php");
?>


           <div style="margin-top: 40px; width: 100%; margin-left: 30px; ">
            <input id="location " required type="text " placeholder="Enter New Location Name "  style="width: 310px; height: 40px; padding-left: 10px; border-radius: 10px; border: 1px solid lightgrey; ">
            <button class="submits " onclick="Submit_Data() " style="margin-left: 20px; ">Submit</button>


            <div id="success " class="alert alert-success " style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Success!</strong> Location is successful added
              </div>

              <div id="danger " class="alert alert-danger "  style="width: 50%; margin-top: 20px; display: none; ">
                <strong>Danger!</strong> Location is not inserted try again
              </div>

        </div>
        </div>
        <!-- ./wrapper -->

        <?php
        $js="addLocation.js";
        include_once("controller/footer.php")
        ?>