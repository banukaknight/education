<?php 
session_start();
//if(!$_SESSION['meadmin'])
//{
//	header("location:home.php");
//}
 include "../setting/config.php";

if(isset($_POST['admin_signin']))
{
	$admin_username = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_password']);
	if($admin_username=="" AND $admin_password=="")
	{
		echo "<script>alert('Enter Your Username & Password');</script>";
	}
	else
	{
		$melogin = $ravi->meadmin_check($admin_username,$admin_password);
		if($melogin==1)
		{
		$_SESSION['meadmin'] = 	$admin_username;
			header("location:home.php");
		}else
		{
			echo "<script>alert('Email Or Password does not matched');</script>";
		}
	}
}
?>
<!--
Initial Template by: W3layouts © 2016
Prior development by: Ravi Khadka © 2018
Capstone development by: Banuka | Checki | Samrin | Sanduni | Kavindu
Capstone for: Lovely Professional University © 2021
Project Guidence: Ms. Sonam Kaler
-->
<!doctype html>
<html lang="en">

<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="Edu-app web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/login_style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bk/login_bg.jpg); background-repeat: repeat-y; ">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<a href="../"><h2 class="heading-section">Mo/Yudaganawa Vidyalaya</h2></a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Admin Login</h3>
						<form  method="post">
							<div class="form-group">
								<input name="admin_username" type="text" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input name="admin_password" id="password-field" type="password" class="form-control" placeholder="Password"
									required>
								<span toggle="#password-field"
									class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button name="admin_signin" type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="../" style="color: #fff">Return to Home</a>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		(function ($) {
			"use strict";
			var fullHeight = function () {

				$('.js-fullheight').css('height', $(window).height());
				$(window).resize(function () {
					$('.js-fullheight').css('height', $(window).height());
				});
			};
			fullHeight();
			$(".toggle-password").click(function () {
				$(this).toggleClass("fa-eye fa-eye-slash");
				var input = $($(this).attr("toggle"));
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
		})(jQuery);
	</script>

</body>

</html>