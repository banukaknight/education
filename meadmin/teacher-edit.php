<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="home.php">Home</a></li>
            <li class="active">
                <?php if(isset($_GET['ravi'])){ echo strtoupper($page=$_GET['ravi']); } ?>
            </li>
        </ol>
    </div>
    <!--//sub-heard-part-->
    <div class="bkbox">
        <h2 class="inner-tittle">
            EDIT & DELETE TEACHER RECORDS
        </h2>


        <div class="tables">


            <table class="table table-bordered table-responsive" id="stinfo">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>F.Name</th>
                        <th>U.Name</th>
                        <th>DOB</th>
                        <th>Contact</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $teacher_dis_admin = $ravi->teacher_info_display_admin();
													$t_sn = 1;
													while($teacher_info_admin =$teacher_dis_admin->fetch_assoc())					{
														
																		?>


                    <tr>
                        <th scope="row">
                            <?php echo $t_sn; ?>
                        </th>
                        <td>
                            <?php echo $teacher_info_admin['t_fullname']; ?>
                        </td>
                        <td>
                            <?php echo $teacher_info_admin['t_username']; ?>
                        </td>
                        <td>
                            <?php echo $teacher_info_admin['t_dob']; ?>
                        </td>
                        <td>
                            <?php echo $teacher_info_admin['t_contact']; ?>
                        </td>
                        <td>
                            <?php echo $teacher_info_admin['t_gender']; ?>
                        </td>
                        <td>

                            <a href="home.php?ravi=teacher-editnow&teacherid=<?php echo $teacher_info_admin['t_id']; ?>"
                                class="btn btn-danger actbtn">Edit</a>
                            <a href="home.php?ravi=teacher-del&teacherid=<?php echo $teacher_info_admin['t_id']; ?>"
                                class="btn btn-warning actbtn">Delete</a>

                        </td>
                    </tr>
                    <?php $t_sn++; } ?>
                </tbody>

            </table>

        </div>
    </div>
    <!-- //bkbox -->

</div>
<!--//graph-visual-->