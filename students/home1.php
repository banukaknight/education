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
                            <li><a href="#section-0"><i class="lnr lnr-bullhorn"></i>
                                    <span>Announcements</span></a></li>
                            <li><a href="#section-1"><i class="lnr lnr-briefcase"></i>
                                    <span>Information</span></a></li>
                            <li><a href="#section-2"><i class="lnr lnr-lighter"></i> <span>Change
                                        Password</span></a></li>
                            <li><a href="#section-3"><i class="lnr lnr-users"></i>
                                    <span>Teachers</span></a></li>
                            <li><a href="#section-4"><i class="lnr lnr-calendar-full"></i> <span>Time
                                        table</span></a></li>

                        </ul>
                    </nav>
                    <div class="content tab">

                        <section id="section-0">
                            <div class="row">

                                <?php 
                                $got_news = $ravi->get_news('Student');
                                if( $got_news->num_rows>0){
                                    echo "<h3>NEWS & UPDATES</h3>"; ?>

                                <div class="card col-md-6 col-lg-4">
                                    <div class="dark ">
                                        <div class="calendar ">
                                            <div class="calendar-header">
                                                <span class="month-picker" id="month-picker">February</span>
                                                <div class="year-picker">
                                                    <span class="year-change" id="prev-year">
                                                        <pre><</pre>
                                                    </span>
                                                    <span id="year">2021</span>
                                                    <span class="year-change" id="next-year">
                                                        <pre>></pre>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="calendar-week-day">
                                                    <div>Sun</div>
                                                    <div>Mon</div>
                                                    <div>Tue</div>
                                                    <div>Wed</div>
                                                    <div>Thu</div>
                                                    <div>Fri</div>
                                                    <div>Sat</div>
                                                </div>
                                                <div class="calendar-days"></div>
                                            </div>
                                            <div class="month-list"></div>
                                        </div>
                                    </div>
                                </div>

                                <?
                                    while($news_item = $got_news->fetch_assoc())	{
                                ?>
                                <div class="card col-md-6 col-lg-4">

                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $news_item['n_head']; ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $news_item['n_shead']; ?>
                                        </h6>
                                        <img class="card-img-top" src="<?php echo $news_item['n_image']; ?>"
                                            style="max-height:10em; max-width:100%">
                                        <p class="card-text"><?php echo $news_item['n_details']; ?></p>
                                        <p style="font-size:0.6em; float: right;">Published by:
                                            <?php echo $news_item['n_author'] ." <br>on: ". $news_item['n_date']; ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                    }//end while

                                }else{
                                    echo "<h3>No Announcements!</h3>"; ?>

                                <div class="card col-md-6 col-lg-4">
                                    <div class="dark ">
                                        <div class="calendar ">
                                            <div class="calendar-header">
                                                <span class="month-picker" id="month-picker">February</span>
                                                <div class="year-picker">
                                                    <span class="year-change" id="prev-year">
                                                        <pre><</pre>
                                                    </span>
                                                    <span id="year">2021</span>
                                                    <span class="year-change" id="next-year">
                                                        <pre>></pre>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="calendar-week-day">
                                                    <div>Sun</div>
                                                    <div>Mon</div>
                                                    <div>Tue</div>
                                                    <div>Wed</div>
                                                    <div>Thu</div>
                                                    <div>Fri</div>
                                                    <div>Sat</div>
                                                </div>
                                                <div class="calendar-days"></div>
                                            </div>
                                            <div class="month-list"></div>
                                        </div>
                                    </div>
                                </div>

                                <?php }  ?>
                            </div>
                        </section>


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
                                <form method="post" class="form-inline">
                                    <h3>Change Password</h3>
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

                                    <h2 class="inner-tittle ">Teachers Allocated to Subjects</h2>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject</th>
                                                <th>Faculty ID</th>
                                                <th>Faculty Name</th>
                                                <th>E-mail</th>
                                                <th>Contact</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
															$st_grade = $student_display['st_grade'];
															$sn = 1;
															$teacher_info_in_student = $ravi->get_allocations("Student",$st_grade);
																while($t_info = $teacher_info_in_student->fetch_assoc())		{ 
																		?>

                                            <tr>
                                                <th scope="row"><?php echo $sn; ?></th>
                                                <td><?php echo ucwords($t_info['sub_name']); ?></td>
                                                <td><?php echo ucwords($t_info['t_username']); ?></td>
                                                <td><?php echo $t_info['t_gender'] == "Male" ? "Mr. " : "Ms. "; echo ucwords($t_info['t_fullname']); ?>
                                                </td>
                                                <td><?php echo ucwords($t_info['t_email']); ?></td>
                                                <td><?php echo ucwords($t_info['t_contact']); ?></td>
                                            </tr>
                                            <?php $sn++; } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </section>


                        <section id="section-4">
                            <div class="graph" id="ttbg">
                                <div class="tables">
                                    <h2 class="inner-tittle ">Time Table for Grade:
                                        <?php echo  $student_display['st_grade']; ?>
                                    </h2>
                                    <table class="table table-hover table-condensed table-sm table-responsive">

                                        <thead>
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


</div>
<!--//outer-wp-->