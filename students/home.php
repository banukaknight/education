<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['st_user'])
{
	
	header("location:index.php");
}
else
{
	$st_username = $_SESSION['st_user'];
	$st_name = $ravi->student_info_select($st_username);
	
	$student_name_display = $st_name->fetch_assoc();
}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

	<!--//skycons-icons-->
</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">Welcome,
									<?php echo ucfirst($student_name_display['st_fullname']); ?> </h2>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Information</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>Change Password</span></a></li>
											<li><a href="#section-3" class="icon-food"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span>Teachers</span></a></li>
											<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i> <span>Subject</span></a></li>
											<li><a href="#section-5" > <i class="fa fa-line-chart" aria-hidden="true"></i> <span>Results</span></a></li>
											<li><a href="#section-7" > <i class="fa fa-check-circle" aria-hidden="true"></i><span>Attendence</span></a></li>
										
										</ul>
									</nav>
									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong>Personal Information</strong>
												<p> <strong>WELCOME</strong>,
													<?php echo ucfirst($student_name_display['st_fullname']); ?>
												</p>
												<p><strong>standard: </strong>
													<?php echo ucfirst($student_name_display['st_grade']); ?>
												</p>
												<p><strong>Roll No: </strong>
													<?php echo ucfirst($student_name_display['roll_no']); ?>
												</p>
												<p><strong>Gender: </strong>
													<?php echo ucfirst($student_name_display['st_gender']); ?>
												</p>
												<p> <strong>Date of Birth:</strong>
													<?php echo ucfirst($student_name_display['st_dob']); ?>
												</p>

											</div>
											<div class="mediabox">
												<strong>Contact Details</strong>

												<p> <strong>Address:</strong>
													<?php echo ucfirst($student_name_display['st_address']); ?>
												</p>
												<p> <strong>District:</strong>
													<?php echo ucfirst($student_name_display['st_district']); ?>
												</p>
												<p> <strong>Username:</strong>
													<?php echo ucfirst($student_name_display['st_username']); ?>
												</p>
											</div>
											<div class="mediabox">
												<strong>Parents Detail</strong>
												<p><strong>Father Name: </strong>
													<?php echo ucfirst($student_name_display['st_father']); ?>
												</p>
												<p><strong>Mother Name: </strong>
													<?php echo ucfirst($student_name_display['st_mother']); ?>
												</p>
												<p><strong>Parents Contact: </strong>
													<?php echo ucfirst($student_name_display['st_parents_contact']); ?>
												</p>
											</div>
										</section>
										<section id="section-2">
										
											
											<div class="col-md-12">
												<?php 
												if(isset($_POST['change_password']))
												{
													
													$prev_password = $student_name_display['st_password'];
													$old_password = $_POST['old_password'];
													
													if($prev_password!=$old_password)
													{ 
														echo "<script>alert('Old Password Does not Matched');</script>";	
													}
													else
													{
														$st_username = $student_name_display['st_username'];
													$st_password_update = $_POST['new_password'];
														$update_success = $ravi->student_password_change($st_password_update,$st_username);
														print_r($update_success);
													
													if($update_success==true)
													{
													echo "<script>window.location = 'home.php?success';</script>";
													}
														else
														{
															echo "<script>alert('cant update password');</script>";
														}
													}
													
												}
										
												?>
												<form method="post">
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input type="password" class="form-control1 icon" name="old_password" placeholder="Old Password">
													
												</div>
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input type="password" class="form-control1 icon" placeholder="New Password" name="new_password">
													
												</div>	
										
													<input type="submit" name="change_password" class="a_demo_four" value="Change Password">
													</form>
											</div>
										</section>
										<section id="section-3">
												<div class="graph">
															<div class="tables">
															
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>#</th> 
																			<th>Photo</th> 
																			<th>Teacher Name</th> 
																			<th>Subject</th>
																			<th>Email</th> 
																			<th>Time</th>
																		</tr> 
																	</thead> 
																	<tbody>
															<?php 
															$st_grade = $student_name_display['st_grade'];
															$sn = 1;
															$teacher_info_in_student = $ravi->teacher_info_instudent($st_grade);
																while($t_info = $teacher_info_in_student->fetch_assoc())		{ 
																		?>
																		
																		<tr>
																			<th scope="row"><?php echo $sn; ?></th>
																			<td></td>
																			<td><?php echo ucwords($t_info['t_fullname']); ?></td> 
																			<td><?php echo ucwords($t_info['subject_name']); ?></td> 
																			<td><?php echo strtolower($t_info['t_email']); ?></td> 
																			<td><?php echo $t_info['time']; ?></td>
																		</tr> 
																		<?php $sn++; } ?>
																	</tbody> 
																</table>
															</div>
												
													</div>
											
										
										</section>
										<section id="section-4">
											<div class="graph">
											<div class="tables">
															
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>#</th> 
																	 
																			<th>Teacher Name</th> 
																			<th>Subject</th>
																			
																		</tr> 
																	</thead> 
																	<tbody>
															<?php 
															$st_grade = $student_name_display['st_grade'];
															$sn = 1;
															$teacher_info_in_student = $ravi->teacher_info_instudent($st_grade);
																while($t_info = $teacher_info_in_student->fetch_assoc())		{ 
																		?>
																		
																		<tr>
																			<th scope="row"><?php echo $sn; ?></th>
																		
																			<td><?php echo ucwords($t_info['t_fullname']); ?></td> 
																			<td><?php echo ucwords($t_info['subject_name']); ?></td> 
																			
																		</tr> 
																		<?php $sn++; } ?>
																	</tbody> 
																</table>
															</div>
											</div>
										</section>
										<section id="section-5">
											<div class="mediabox">

											</div>
											<div class="mediabox">

											</div>
											<div class="mediabox">

											</div>
										</section>


										<section id="section-7">

											<div class="graph">
											<strong>Attendance Module (Automated) </strong> <br>

<?php  
/* Attendance marking code by Banuka Vidusanka */
	echo 'Logged in User IP Address - '.$_SERVER['REMOTE_ADDR'];  
	$attendance_success = $ravi->st_attendance($st_username);

	if($attendance_success==true)
		{
			echo "<script>alert('Attendance Marked!');</script>";
		}else{
			echo "<p>Attendence has been updated.</p>";
		}

	?>  
															<div class="tables">
															<h5>Attendance data of student id: <?php echo $st_username ?></h5>
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>#</th> 
																			<th>IP Address</th> 
																			<th>Date</th>
																			<th>Time</th> 
																			<th>Attendace for Hour</th>
																		</tr> 
																	</thead> 
																	<tbody>
															<?php 
															$st_attendance_data = $ravi->get_attendance($st_username);
																while($got_attendance = $st_attendance_data->fetch_assoc())		{ 
																		?>
																		
																		<tr>
																			<th scope="row"><?php echo $got_attendance['id']; ?></th>
																			<td><?php echo $got_attendance['st_ip']; ?></td> 
																			<td><?php echo $got_attendance['at_date']; ?></td> 
																			<td><?php echo $got_attendance['at_time']; ?></td> 
																			<td><?php echo substr($got_attendance['at_iddateh'], -2); ?></td>
																		</tr> 
																		
																		<?php  } ?>
																	</tbody> 
																</table>
															</div>
												
													</div>

										</section>



									</div>
									<!-- /content -->
								</div>
								<!-- /tabs -->

							</div>
							<script src="js/cbpFWTabs.js"></script>
							<script>
								new CBPFWTabs(document.getElementById('tabs'));
							</script>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--//tabs-inner-->


					<!--custom-widgets-->
					<div class="custom-widgets">
						<div class="row-one">
							<div class="col-md-3 widget">
								<div class="stats-left ">
									<h5>Today</h5>
									<h4> Users</h4>
								</div>
								<div class="stats-right">
									<label>90</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 widget states-mdl">
								<div class="stats-left">
									<h5>Today</h5>
									<h4>Visitors</h4>
								</div>
								<div class="stats-right">
									<label> 85</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 widget states-thrd">
								<div class="stats-left">
									<h5>Today</h5>
									<h4>Tasks</h4>
								</div>
								<div class="stats-right">
									<label>51</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 widget states-last">
								<div class="stats-left">
									<h5>Today</h5>
									<h4>Alerts</h4>
								</div>
								<div class="stats-right">
									<label>30</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--//custom-widgets-->

					<!--/charts-->
					<div class="charts">
						<div class="chrt-inner">
							<!--//weather-charts-->
							<div class="graph-visualization">
								<div class="col-md-6 map-1">
									<h3 class="sub-tittle">Profile </h3>


								</div>
								<div class="col-md-6 map-2">
									<div class="profile-nav alt">
										<section class="panel">
											<div class="user-heading alt clock-row terques-bg">
												<h3 class="sub-tittle clock">Easy Clock </h3>
											</div>
											<ul id="clock">
												<li id="sec"></li>
												<li id="hour"></li>
												<li id="min"></li>
											</ul>



										</section>

									</div>
								</div>
								<div class="clearfix"> </div>
							</div>


						</div>
						<!--/charts-inner-->
					</div>
					<!--//outer-wp-->
				</div>
				<!--footer section start-->
				<footer>
					<p>&copy 2018 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a> and Develop By Ravi Khadka</p>
				</footer>
				<!--footer section end-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<?php
				$st_gender = $student_name_display['st_gender'];
				if($st_gender == 'Male'){
					echo "<img src='images/picm.jpg'>";
				}else if($st_gender == 'Female'){
					echo "<img src='images/picf.jpg'>";
				}else{
					echo "<img src='images/pice.jpg'>";
				}
				
				?>

				<a href="index.html"><span class=" name-caret"><?php echo $student_name_display['st_fullname']; ?></span></a>
				<p>Student</p>
				<ul>
					<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>

			
				

				
	
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>