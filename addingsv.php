<html>
	<head>
	


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
<form method="post">
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="assignvs.php">BACK <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-0em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>HIRING OF SUPERVISOR!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>ADD-Account</h2>
												
												<div class="row form-group">
													<div class="col-md-15">
													
										
														
													<label for="fullname">Full name: </label>
														<input type="text" name="fname"id="fname" class="form-control" required>
														
														<label for="fullname">Username: </label>
														<input type="text" name="username"id="username" class="form-control" required>

									
														
														<label for="fullname">Contact No.: </label>
														<input type="text" name="cnumber"id="cnumber" class="form-control" required>
														
														
														<label for="fullname">Set Password: </label>
														<input type="password" name="password" id="password" class="form-control"required>
														
														<label for="fullname">Confirm Password: </label>
														<input type="password" name="cpassword" id="cpassword" class="form-control"required>
														<br>
														<center><input type="submit" id="submit"  name="submit" value="Create Account"></center>
													</div>
													
												</div>
												


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


<?php
$db = mysqli_connect("localhost","projsadx","Satsuki016","projsadx_projsad");	
if(isset($_POST['submit']))
{
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password != $cpassword){
	echo "<font color='red'><center>Password not matched.</center></font>";
	return;

}

	$email=$_POST['username'];
	$fname=$_POST['fname'];
	$cnumber=$_POST['cnumber'];
	$password=$_POST['password'];
	$sql="insert into supervisor (supervisor_name,susername,spassword,scontact) values('$fname','$email','$password','$cnumber')";
	if(mysqli_query($db,$sql))
	{
	echo "<font color='green'><center>New supervisor Added.</font></center>";
	}
	else
	{
		echo "<font color='red'><center>New supervisor not hired!</font></center>";
	}
	
	
	
	
}

?>
