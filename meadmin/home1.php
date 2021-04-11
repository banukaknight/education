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
                <h2 class="inner-tittle">Welcome, <?php echo $info_display['t_fullname']; ?> </h2>
                <div class="graph">
                    <nav>
                        <ul>
                            <li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i>
                                    <span>Information</span></a></li>
                            <li><a href="#section-2" class="icon-food"><i class="fa fa-cutlery"></i>
                                    <span>Teachers</span></a></li>

                        </ul>
                    </nav>
                    <div class="content tab">
                        <section id="section-1">
                            <div class="mediabox">
                                <strong>Personal Information</strong>
                                <p> <strong>Welcome,</strong>
                                    <?php echo $info_display['t_fullname']; ?>
                                </p>
                                <p> <strong>Username:</strong>
                                    <?php echo $info_display['t_username']; ?>
                                </p>
                                <p> <strong>Gender:</strong>
                                    <?php echo $info_display['t_gender']; ?>
                                </p>
                                <p> <strong>DOB:</strong>
                                    <?php echo $info_display['t_dob']; ?>
                                </p>
                            </div>
                            <div class="mediabox">
                                <strong>Contact Details</strong>
                                <p> <strong>Phone:</strong>
                                    <?php echo $info_display['t_contact']; ?>
                                </p>
                                <p> <strong>Email:</strong>
                                    <?php echo $info_display['t_email']; ?>
                                </p>
                                <p> <strong>Address:</strong>
                                    <?php echo $info_display['t_address']; ?>
                                </p>

                            </div>
                        </section>

                        <section id="section-2">

                            <div class="tables">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th></th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>DOB</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $teacher_dis_admin = $ravi->teacher_info_display_admin();
													$t_sn = 1;
													while($teacher_info_admin =$teacher_dis_admin->fetch_assoc())					{
														
													
																		?>


                                        <tr>
                                            <th scope="row"><?php echo $t_sn; ?></th>
                                            <td>
                                                <?php
										$st_gender = $teacher_info_admin['t_gender'];
										if($st_gender == 'Male'){
											echo "<img class='gendpic' src='images/bk/picm.png'> ";
										}else if($st_gender == 'Female'){
											echo "<img class='gendpic' src='images/bk/picf.png'> ";
										}else{
											echo "<img class='gendpic' src='images/bk/pice.png'> ";
										}
									?>
                                            </td>
                                            <td><?php echo $teacher_info_admin['t_fullname']; ?></td>
                                            <td><?php echo $teacher_info_admin['t_address']; ?></td>
                                            <td><?php echo $teacher_info_admin['t_email']; ?></td>
                                            <td><?php echo $teacher_info_admin['t_username']; ?></td>
                                            <td><?php echo $teacher_info_admin['t_dob']; ?></td>
                                            <td><?php echo $teacher_info_admin['t_contact']; ?></td>

                                        </tr>
                                        <?php $t_sn++; } ?>
                                    </tbody>
                                </table>
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
                    <h5>Total</h5>
                    <h4> Students</h4>
                </div>
                <div class="stats-right">
                    <label>90</label>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 widget states-mdl">
                <div class="stats-left">
                    <h5>Total</h5>
                    <h4>Teachers</h4>
                </div>
                <div class="stats-right">
                    <label> 85</label>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 widget states-thrd">
                <div class="stats-left">
                    <h5>Total</h5>
                    <h4>Courses</h4>
                </div>
                <div class="stats-right">
                    <label>51</label>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 widget states-last">
                <div class="stats-left">
                    <h5>Total</h5>
                    <h4>Passout</h4>
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