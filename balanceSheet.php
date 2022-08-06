<?php $css="addLocation.css"; include_once("controller/header.php")?>

<?php 
$title="Change Your Password";
$sub="(You will need to provide ID and old password to change password";
$array=array(false,false,false,false,false,false,false,false,false,false,false);
include_once("controller/links.php");
?>

          <div style="width: 98%; height:auto;">
          <center>
              <div style="background: white; margin-top:50px; width:55%; border-radius:10px; padding:30px;">
              <input id="id" maxlength="4" type="number" placeholder="Enter your id" style="width: 80%; height:35px; padding-left:15px;">
              <br>
              <input id="old_pass" type="password" placeholder="Enter your old password" style="width: 80%; height:35px; padding-left:15px; margin-top:15px;">
              <br>
              <input id="new_pass" type="text" placeholder="Enter new password" style="width: 80%; height:35px; padding-left:15px; margin-top:15px;">
              <br>
              <button class="submit" onclick="Update()" style="margin-left: 20px; margin-top:25px; width:30%;">Update</button>
              </div>

              <div id="success" class="alert alert-success " style="width: 50%; margin-top: 20px; display: none;">
                <strong>Success!</strong> Password is successfully changed
              </div>

              <div id="danger" class="alert alert-danger "  style="width: 50%; margin-top: 20px; display: none;">
                <strong>Danger!</strong> Invalid id or password is provided
              </div>

          </center>

          </div>

        <?php
        $js="balance.js";
        include_once("controller/footer.php")
        ?>