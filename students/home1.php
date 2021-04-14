<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<div class="outter-wp">
    <!--/tabs-->
    <div class="tab-main">
        <!--/tabs-inner-->
        <div class="tab-inner">
            <div id="tabs" class="tabs">
                <h2 class="inner-tittle">Welcome,
                    <?php echo ucfirst($student_display['st_fullname']); ?> </h2>


                <div class="graph">
                    <nav>
                        <ul>
                            <li><a href="#section-1"><i class="lnr lnr-briefcase"></i>
                                    <span>Information</span></a></li>
                            <li><a href="#section-2"><i class="lnr lnr-lighter"></i> <span>Change
                                        Password</span></a></li>
                            <li><a href="#section-3"><i class="lnr lnr-users"></i>
                                    <span>Teachers</span></a></li>
                            <li><a href="#section-4"><i class="fa fa-flask"></i>
                                    <span>Subject</span></a></li>
                            <li><a href="#section-5"><i class="lnr lnr-chart-bars"></i>
                                    <span>Results</span></a></li>
                            <li><a href="#section-6"><i class="lnr lnr-calendar-full"></i> <span>Time
                                        table</span></a></li>
                            <li><a href="#section-7"><i class="fa fa-check-circle"></i>
                                    <span>Attendence</span></a></li>

                        </ul>
                    </nav>
                    <div class="content tab">
                        <section id="section-1">
                            <div class="mediabox">

                                <strong>Personal Information</strong>
                                <p> <strong>Name: </strong>
                                    <?php echo ucfirst($student_display['st_fullname']); ?>
                                </p>
                                <p><strong>Grade: </strong>
                                    <?php echo ucfirst($student_display['st_grade']); ?>
                                </p>
                                <p><strong>Roll No: </strong>
                                    <?php echo ucfirst($student_display['roll_no']); ?>
                                </p>
                                <p><strong>Gender: </strong>
                                    <?php echo ucfirst($student_display['st_gender']); ?>
                                </p>
                                <p> <strong>Date of Birth:</strong>
                                    <?php echo ucfirst($student_display['st_dob']); ?>
                                </p>

                            </div>
                            <div class="mediabox">
                                <strong>Contact Details</strong>

                                <p> <strong>Address:</strong>
                                    <?php echo ucfirst($student_display['st_address']); ?>
                                </p>
                                <p> <strong>Registration No:</strong>
                                    <?php echo ucfirst($student_display['st_username']); ?>
                                </p>
                                <p><strong>Contact: </strong>
                                    <?php echo ucfirst($student_display['st_parents_contact']); ?>
                                </p>
                            </div>

                        </section>
                        <section id="section-2">

                            <div class="col-md-12">
                                <?php 
												if(isset($_POST['change_password']))
												{
													
													$prev_password = $student_display['st_password'];
													$old_password = $_POST['old_password'];
													
													if($prev_password!=$old_password)
													{ 
														echo "<script>alert('Old Password not Matched');</script>";	
													}
													else
													{
														$st_username = $student_display['st_username'];
													$st_password_update = $_POST['new_password'];
														$update_success = $ravi->student_password_change($st_password_update,$st_username);
														print_r($update_success);
													
													if($update_success==true)
													{
													echo "<script>window.location = 'home.php?success';</script>";
													}
														else
														{
															echo "<script>alert('Unable to update password');</script>";
														}
													}
													
												}
										
												?>
                                <form method="post">
                                    <div class="input-group input-icon">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i> </span>
                                        <input type="password" class="form-control1 icon" name="old_password"
                                            placeholder="Old Password" required>

                                    </div>
                                    <div class="input-group input-icon">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i> </span>
                                        <input type="password" class="form-control1 icon"
                                            title="Accept: AlphaNumeric & @£$!%*#?&_ length(2-30)"
                                            placeholder="New Password" name="new_password" required
                                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@£$!%*#?&_]{2,30}$">

                                    </div>

                                    <button type="submit" name="change_password" class="btn btn-info">
                                        Change Password</button>
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
															$st_grade = $student_display['st_grade'];
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
															$st_grade = $student_display['st_grade'];
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
                                <h1>Results to be done</h1>
                            </div>
                            <div class="mediabox">

                            </div>
                            <div class="mediabox">

                            </div>
                        </section>

                        <section id="section-6">
                            <div class="graph" id="ttbg">
                                <div class="tables">

                                    <table class="table table-hover table-condensed table-sm table-responsive">
                                        <thead>
                                            <caption><b>Time Table for Grade:
                                                    <?php echo  $student_display['st_grade']; ?>
                                                </b></caption>
                                            <tr class="info">
                                                <th>#</th>
                                                <th>Time</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
															//retrieve timetable data by sanduni
															$st_grade = $student_display['st_grade'];
															$n = 1;
															$get_timetable = $ravi->get_timetable($st_grade);
															while($t_info = $get_timetable->fetch_assoc()) {
																		?>

                                            <tr <?php if($n==5){ echo "class='danger'"; } ?>>
                                                <th class="danger" scope="row"><?php echo $n; ?></th>
                                                <th class="info"><?php echo $t_info['time']; ?></th>
                                                <td><?php echo $t_info['Monday']; ?></td>
                                                <td><?php echo $t_info['Tuesday']; ?></td>
                                                <td><?php echo $t_info['Wednesday']; ?></td>
                                                <td><?php echo $t_info['Thursday']; ?></td>
                                                <td><?php echo $t_info['Friday']; ?></td>
                                            </tr>
                                            <?php $n++; } ?>


                                        <tbody>
                                    </table>



                                </div>
                            </div>
                        </section>


                        <section id="section-7">

                            <div class="graph">
                                <strong>Attendance Module (Automated) </strong> <br>

                                <?php  
/* Attendance marking code by Banuka Vidusanka */
	echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
	$attendance_success = $ravi->st_attendance($st_username);

	if($attendance_success==true)
		{
			echo "<script>alert('Attendance Marked!');</script>";
		}else{
			echo "<p>Attendence has been updated.</p>";
		}

	?>
                                <div class="tables tablediv" id="attnbg">
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
                                                <th scope="row"><?php echo $got_attendance['id']; ?>
                                                </th>
                                                <td><?php echo $got_attendance['st_ip']; ?></td>
                                                <td><?php echo $got_attendance['at_date']; ?></td>
                                                <td><?php echo $got_attendance['at_time']; ?></td>
                                                <td><?php echo substr($got_attendance['at_iddateh'], -2); ?>
                                                </td>
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

</div>
<!--//outer-wp-->