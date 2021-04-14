<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>

<?php 
//attendence marking actual.
if(isset($_POST['submit_attendence'])){
    $tb_name = "at_g_". $_POST['at_grade'];
    //$t_username;
    $sesh_date = $_POST['sesh_date'];
    $sesh_info = $_POST['sesh_info'];

    $attendence_arr; //array to hold attndence details
    //get student list for grade
    $student_dis_admin=	$ravi->student_info_display_admin($_POST['at_grade']);
    while($student_info_admin =$student_dis_admin->fetch_assoc()) {
        $k = $student_info_admin['st_username'];
        $v = $_POST["$k"];
        $attendence_arr[$k] = $v;
    }

    $mark_attendence_done = $ravi->faculty_mark_attendence($tb_name, $t_username, $sesh_date, $sesh_info, $attendence_arr);
    if($mark_attendence_done==true){
        $ravi->alert_success("Attendence Marked!");
    }else{
        $ravi->alert_danger($ravi->connectdb->error);
    }
}
?>

<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="home.php">Home</a></li>
            <li class="active">
                <?php echo strtoupper($_GET['at']); ?>
            </li>
        </ol>
    </div>
    <!--//sub-heard-part-->

    <div class="bkbox">
        <h2 class="inner-tittle ">MARK STUDENT ATTENDENCE</h2>

        <form method="post" class="row g-3 needs-validation banukastform" novalidate>

            <label class="form-label">Select Grade:</label>
            <div class="row">
                <div class=" col-md-3 ">
                    <select name="std_grade" class="form-select" required>
                        <?php
						foreach($ravi->gradelist as $g){
						?>
                        <option value="<?php echo $g; ?>"
                            <?php if(isset($_POST['get_stlist']) && $_POST['std_grade']==$g ) { echo 'selected="selected"';} ?>>
                            <?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class=" col-md-3 ">
                    <button type="submit" name="get_stlist" class="btn btn-info"> GET Students List</button>

                </div>
            </div>

        </form>

        <?php 
	if(isset($_POST['get_stlist']))
	{
		$std_grade = $_POST['std_grade'];
	$student_dis_admin=	$ravi->student_info_display_admin($std_grade);
		$s_sn = 1;
	
?>

        <h1 class="inner-tittle">Grade - <?php echo $std_grade ?> : Students' Attendence</h1>

        <?php if($student_dis_admin->num_rows>0){ ?>

        <div class="">
            <form method="post" class="row g-3 needs-validation banukastform" novalidate>

                <div class="col-md-3 ">
                    <label class="form-label">Session Date*</label>
                    <input type="date" name="sesh_date" class="form-control" value="2021-12-12" required
                        title="Date of Session held">
                    <div class="invalid-feedback"> Please provide date session took place! </div>
                </div>

                <div class="col-md-6 ">

                    <label class="form-label">Session Info*</label>
                    <input type="text" name="sesh_info" class="form-control" placeholder="Session Topic" value="Topic"
                        required pattern="^[A-Za-z ,-.']{2,100}$" title="No special characteres allowed">
                    <div class="invalid-feedback"> Please fill Session Info! </div>
                </div>

                <div id="tablediv">
                    <table class=" table table-bordered table-sm table-responsive mytbl">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Registration No</th>
                                <th>Full Name</th>
                                <th>Roll No</th>
                                <th>Mark Attendence</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php while($student_info_admin =$student_dis_admin->fetch_assoc())	{ ?>
                            <tr>
                                <td> <?php
                                $st_gender = $student_info_admin['st_gender'];
                                if($st_gender == 'Male'){
                                    echo "<img class='gendpic' src='images/bk/picm.png'> ";
                                }else if($st_gender == 'Female'){
                                    echo "<img class='gendpic' src='images/bk/picf.png'> ";
                                }else{
                                    echo "<img class='gendpic' src='images/bk/pice.png'> ";
                                }
                            echo $s_sn; ?>
                                </td>
                                <td><?php echo $student_info_admin['st_username']; ?></td>
                                <td><?php echo $student_info_admin['st_fullname']; ?></td>
                                <td><?php echo $student_info_admin['roll_no'] ?></td>
                                <td>
                                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                        <label class="btn btn-sm btn-success ">
                                            <input type="radio" name="<?php echo $student_info_admin['st_username'] ?>"
                                                value="1" autocomplete="off"> Present
                                        </label>
                                        <label class="btn btn-sm  btn-danger active">
                                            <input type="radio" name="<?php echo $student_info_admin['st_username'] ?>"
                                                value="0" autocomplete="off" checked> Absent
                                        </label>
                                    </div>
                                </td>
                            </tr>

                            <?php $s_sn++; } ?>
                        </tbody>
                    </table>
                </div>
                <!--//tablediv-->
                <input type="hidden" name="at_grade" value="<?php echo $std_grade; ?>">
                <input type="submit" name="submit_attendence">
            </form>
        </div>

        <?php	} else {	 ?>
        <h3>No Student information in selected class</h3>
        <?php 	} }else{    ?>
        <br>
        <h3>Select a Grade to Mark Attendence</h3>
        <?php } ?>

    </div>
</div>