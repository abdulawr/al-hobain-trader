<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Al Hobaib Trader`s</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
	<!-- /login-section -->

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">Al Hobaib Trader`s</h6>
							<div class="speci-login first-look">
								<img src="images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form action="" method="post">
								<input type="number" name="user" class="input-form" maxlength="4" size="4" placeholder="Username"
										required="required" />
								<input type="password" name="pass" class="input-form"
										placeholder="Password" required="required" />
								<button type="submit" class="loginhny-btn btn">Login</button>
							</form>
							<div id="danger" class="alert alert-danger "  style="color:white;width: 100%; margin-top: 20px; display: none; background:#DC143C; padding:10px;">
                              <strong>Warning!</strong>  Invalid username or password
                           </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<script>

	</script>
</body>

</html>

<?php 
include_once("model/conn.php");
$check="INSERT INTO access VALUES('true');";
if(isset($_POST['user']) && isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	$format="$2y$10$";
	$salt="afulsheuskeowncseiolsckdie";
	$newstr= $format . $salt;
	$pass= crypt($pass,$newstr);
	$qry="SELECT id,pass from login WHERE id={$_POST['user']} && pass='{$pass}';";
	if($con->query($qry)->num_rows > 0)
	{
	 echo '<script>location.assign("journal.php");</script>';
	 if($_POST['user'] == "0001")
	 {
		 $con->query($check);
	 }
	}
	else
	{
     echo '<script>document.getElementById("danger").style.display="block";</script>';
	}
}

?>