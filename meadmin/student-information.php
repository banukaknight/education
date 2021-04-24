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
            <li><a href="home.php">Home</a></li>
            <li class="active"><?php if(isset($_GET['at'])){ echo strtoupper($page=$_GET['at']); } ?></li>
        </ol>
    </div>
    <!--//sub-heard-part-->

    <div class="bkbox">
        <h2 class="inner-tittle">DISPLAY STUDENT INFORMATION</h2>

        <form method="post">

            <label class="form-label">Select Grade:</label>

            <div class="row">
                <div class=" col-md-2 ">
                    <select name="std_grade" class="form-select" required>
                        <?php
						
						foreach($ravi->gradelist as $g){
						?>
                        <option value="<?php echo $g; ?>"
                            <?php if(isset($_POST['students_info']) && $_POST['std_grade']==$g ) { echo 'selected="selected"';} ?>>
                            <?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class=" col ">
                    <button type="submit" name="students_info" class=" btn btn-warning">Class Students</button>
                    <button type="submit" name="all_st" class="btn btn-info">All Students</button>
                </div>
            </div>
        </form>

        <div class="clearfix"> </div>

        <?php					
          if(isset($_POST['students_info'])){
                $std_grade = $_POST['std_grade'];
                $student_dis_admin=	$ravi->student_info_display_admin($std_grade);
                echo "<h2 class='inner-tittle'>Grade - $std_grade : Students' Information</h2>";
            // }elseif(isset($_POST['all_st'])){
            }else{
                //all_student_info_display_admin (DEFAULT)
                $student_dis_admin=	$ravi->all_student_info_display_admin();
                echo "<h2 class='inner-tittle'>All Student Information</h2>";
            }
            $s_sn = 1;

            if($student_dis_admin->num_rows>0){
			?>

        <div class="tables">
            <table class=" table table-bordered table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gender</th>
                        <th>Registration</th>
                        <th>Full Name</th>
                        <th>DOB</th>
                        <th>Grade</th>
                        <th>Roll No</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($student_info_admin =$student_dis_admin->fetch_assoc())	{ ?>

                    <tr>
                        <td><?php echo $s_sn; ?></td>
                        <td>
                            <?php
                                $st_gender = $student_info_admin['st_gender'];
                                if($st_gender == 'Male'){
                                    echo "<img class='gendpic' src='images/bk/picm.png'> ";
                                }else if($st_gender == 'Female'){
                                    echo "<img class='gendpic' src='images/bk/picf.png'> ";
                                }else{
                                    echo "<img class='gendpic' src='images/bk/pice.png'> ";
                                }
                                echo $st_gender;
                            ?>
                        </td>
                        <td><?php echo $student_info_admin['st_username']; ?></td>
                        <td><?php echo $student_info_admin['st_fullname']; ?></td>
                        <td><?php echo $student_info_admin['st_dob']; ?></td>
                        <td><?php echo $student_info_admin['st_grade'] ?></td>
                        <td><?php echo $student_info_admin['roll_no'] ?></td>
                        <td><?php echo $student_info_admin['st_parents_contact']; ?></td>
                    </tr>
                    <?php $s_sn++; } ?>
                </tbody>
            </table>
            <?php    } else {	 ?>
            <br>
            <h3>No Student information in selected class</h3>
            <?php 	} ?>

        </div>
    </div>

</div>
<!--//outer-wp-->