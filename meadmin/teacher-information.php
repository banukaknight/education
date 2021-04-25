<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>

<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.php">Home</a></li>
            <li class="active"><?php if(isset($_GET['at'])){ echo strtoupper($page=$_GET['at']); } ?></li>
        </ol>
    </div>
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">

        <div class="bkbox">

            <h2 class="inner-tittle ">TEACHER INFORMATION</h2>
            <div class="tables">

                <table class="table table-bordered mytbl ">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gender</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>DOB</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $teacher_dis_admin = $ravi->teacher_info_display_admin();
                        $t_sn = 1;
                        while($teacher_info_admin = $teacher_dis_admin->fetch_assoc())		{
                          ?>

                        <tr>
                            <th scope="row"><?php echo $t_sn; ?></th>
                            <th>
                                <?php
										$t_gender = $teacher_info_admin['t_gender'];
										if($t_gender == 'Male'){
											echo "<img class='gendpic' src='images/bk/picm.png'> ";
										}else if($t_gender == 'Female'){
											echo "<img class='gendpic' src='images/bk/picf.png'> ";
										}else{
											echo "<img class='gendpic' src='images/bk/pice.png'> ";
										}
										echo $t_gender;
										?>
                            </th>
                            <td><?php echo $teacher_info_admin['t_fullname']; ?></td>
                            <td><?php echo $teacher_info_admin['t_email']; ?></td>
                            <td><?php echo $teacher_info_admin['t_username']; ?></td>
                            <td><?php echo $teacher_info_admin['t_dob']; ?></td>
                            <td><?php echo $teacher_info_admin['t_contact']; ?></td>

                        </tr>
                        <?php $t_sn++; } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!--//graph-visual-->
</div>