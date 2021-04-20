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
                    <?php echo ucfirst($faculty_display['t_fullname']); ?> </h2>


                <div class="graph">
                    <nav>
                        <ul>
                            <li><a href="#section-1"><i class="lnr lnr-briefcase"></i>
                                    <span>Information</span></a></li>
                            <li><a href="#section-2"><i class="lnr lnr-lighter"></i> <span>Change
                                        Password</span></a></li>

                            <li><a href="#section-3"><i class="fa fa-flask"></i>
                                    <span>Subjects</span></a></li>

                        </ul>
                    </nav>
                    <div class="content tab">
                        <section id="section-1">
                            <div class="mediabox">

                                <strong>Personal Information</strong>
                                <p> <strong>Name: </strong>
                                    <?php echo ucfirst($faculty_display['t_fullname']); ?>
                                </p>
                                <p><strong>Gender: </strong>
                                    <?php echo ucfirst($faculty_display['t_gender']); ?>
                                </p>
                                <p> <strong>Date of Birth:</strong>
                                    <?php echo ucfirst($faculty_display['t_dob']); ?>
                                </p>

                            </div>
                            <div class="mediabox">
                                <strong>Contact Details</strong>

                                <p> <strong>Address:</strong>
                                    <?php echo ucfirst($faculty_display['t_address']); ?>
                                </p>
                                <p> <strong>Registration No:</strong>
                                    <?php echo ucfirst($faculty_display['t_username']); ?>
                                </p>
                                <p><strong>Contact: </strong>
                                    <?php echo ucfirst($faculty_display['t_contact']); ?>
                                </p>
                                <p><strong>Email: </strong>
                                    <?php echo ucfirst($faculty_display['t_email']); ?>
                                </p>
                            </div>

                        </section>
                        <section id="section-2">

                            <div class="col-md-12">
                                <?php 
												if(isset($_POST['change_password']))
												{
													
													$prev_password = $faculty_display['t_pass'];
													$old_password = $_POST['old_password'];
													
													if($prev_password!=$old_password)
													{ 
														//echo "<script>alert('Old Password not Matched');</script>";	
                                                        $ravi->alertFunc("Old Password not Matched!");
													}
													else
													{
														$t_username = $faculty_display['t_username'];
													    $t_password_update = $_POST['new_password'];
														$update_success = $ravi->faculty_password_change($t_password_update,$t_username);
														
                                                        if($update_success==true)
                                                        {
                                                            $ravi->alertFunc("Password Updated!");
                                                        }
														else
														{
															$ravi->alertFunc("Unable to update Password!");
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

                                    <h2 class="inner-tittle ">Gradevise Subjects Assigned to Faculty</h2>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject</th>
                                                <th>Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
															//$t_username;
															$sn = 1;
															$subject_info_in_faculty = $ravi->fc_sub_info($t_username);
																while($t_info = $subject_info_in_faculty->fetch_assoc())		{ 
																		?>

                                            <tr>
                                                <th scope="row"><?php echo $sn; ?></th>
                                                <td><?php echo ucwords($t_info['sub_name']); ?></td>
                                                <td><?php echo ucwords($t_info['st_grade']); ?></td>
                                            </tr>
                                            <?php $sn++; } ?>
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


</div>