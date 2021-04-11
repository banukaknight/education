<?php 
session_start();

if(@$_SESSION['t_user'])
{
	header("location:home.php");
}
 include "../setting/config.php";
if(isset($_POST['faculty_signin']))
{
 	$t_username = $_POST['t_username'];
	$t_password = $_POST['t_password']; 
	
	if($t_username=="" || $t_password=="")
	{
      echo "<script>alert('Please Fill Properly');</script>";
	}
	 else
	 {
		$go = $ravi->faculty_login_check($t_username,$t_password);
		if($go==1)
		{
			$_SESSION['t_user'] = $t_username;
			header("location:home.php");
		}
		else
		{
			echo "<script>alert('login failed');</script>";
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
<!DOCTYPE HTML>
<html>
<head>
<title>Faculty Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Edu-app web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top" style="background-image: url('../images/bg/slogin.jpg'); background-size: cover;">
													<h2 class="inner-tittle page">Faculty Login</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner" style="text-shadow: 2px 2px 5px white;">Login</h3>
																<form method="post">
																		<input type="text" class="text" name="t_username" placeholder="Username">
																		<input type="password" placeholder="Password" name="t_password">
																		<div class="submit"><input type="submit" value="Login" name="faculty_signin"></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11" style="text-shadow: 2px 2px 5px white;"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
																			
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
															<a class="read fourth" href="index.html">Return to Home</a>
															</div>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>