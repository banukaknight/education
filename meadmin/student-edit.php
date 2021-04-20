<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php 
 
 if(isset($_POST['std_edit_now']))
 {
	 // $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
	 $std_fullname = $_POST['std_fullname'];
	 $std_username = $_POST['std_username'];
	 $std_password = $_POST['std_password'];
	 $std_grade = $_POST['std_grade'];
	 $std_roll = $_POST['std_roll'];
	 $std_dob = $_POST['std_dob'];
	 $std_address = $_POST['std_address'];
	//  $std_district = $_POST['std_district'];
	 $std_gender = $_POST['std_gender'];
	//  $std_father = $_POST['std_father'];
	//  $std_mother= $_POST['std_mother'];
	 $std_parent_contact = $_POST['std_parent_contact'];
	 
	//apply string handling functions to prepare user input data -banuka
    $std_fullname = preg_replace("/[^A-Za-z .,'-]/", '', $std_fullname); //remove non-alphabet char
    $std_fullname = ucwords( trim( $std_fullname )); //trim & capitalize 1st letters
    $std_address = preg_replace("/[^A-Za-z0-9 .,'-]/", '', $std_address); //remove non-alphabet char
    $std_address = ucwords( trim( $std_address )); //trim & capitalize 1st letters


	 if($std_fullname=="" or $std_username=="" or $std_password=="" or $std_grade=="" or $std_gender=="" or $std_roll=="" or $std_dob=="" or $std_address=="" or $std_parent_contact=="")
	 {
        $ravi->alert_danger("Form not filled properly!");
	 }
	 else
	 {
		 
		 $add_student_done = $ravi->update_student_adm($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_gender,$std_parent_contact);
		 if($add_student_done==true)
		 {
            $ravi->alert_success("Student Edit SUCCESFUL!");
			//echo "<script>window.location = 'home.php?at=student-information';</script>";
		 }
		 else
		 {
			$ravi->alert_danger("Student Edit FAILED!");
		 }
		 
	 }
	 
 }

 // code to delete student record from db -banuka
if(isset($_POST['std_delete_now'])){
    $std_username = $_POST['std_username'];
    $del_done = $ravi->delete_student($std_username);
    if($del_done==true)
    {
        echo "<script>window.location = 'home.php?at=student-information'; alert('Deleted Student Record');</script>";	
    }
    else
    {
        echo "<script>window.location='home.php?at=student-edit'; alert('Unable to delete Student Record');</script>";
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
        <h2 class="inner-tittle ">EDIT STUDENT</h2>

        <form method="post">

            <label class="form-label">Select Student Registration:</label>
            <div class="row">
                <div class=" col-md-6">
                    <select name="std_id" class="form-select" required>
                        <?php
                        $opt = $ravi->all_student_info_display_admin(); //get all students
						while($op=$opt->fetch_assoc()) {
						?>
                        <option value="<?php echo $op['st_username']; ?>"
                            <?php if(isset($_POST['students_info']) && $_POST['std_id']==$op['st_username'] ) { echo 'selected="selected"';} ?>>
                            <?php echo $op['st_username'] ." - G:". $op['st_grade'] ." - ". $op['st_fullname']; ?>
                        </option>

                        <?php } ?>

                    </select>

                </div>

                <div class=" col-md-6">
                    <Button type="submit" name="students_info" class="btn btn-info">Display Student Info</button>
                </div>
            </div>
        </form>
        <div class="clearfix"> </div>

        <?php						
            if(isset($_POST['students_info']))
            {
                $std_id = $_POST['std_id'];
            $st_info =$ravi->student_info_select($std_id);
            $st_info_display = $st_info->fetch_assoc();
                //$s_sn = 1;
        ?>


        <div class="graph">
            <div class="validation-form container">
                <!-- bootstrap 5 validation added by banuka -->
                <h3 class="inner-tittle ">UPDATE STUDENT RECORD: <?php echo $st_info_display['st_username']; ?> </h3>

                <form method="post" class="row g-3 needs-validation banukastform" novalidate>
                    <div class="col-md-8 ">
                        <label class="form-label">Full Name*</label>
                        <input type="text" placeholder="Full Name" name="std_fullname"
                            value="<?php echo $st_info_display['st_fullname']; ?>" class="form-control" required
                            minlength="2" maxlength="100" title="2-100 characters expected">
                        <div class="invalid-feedback"> Name must be atleast 2 characters in length! </div>
                    </div>

                    <div class="col-md-4 gendercls">
                        <?php echo $st_info_display['st_gender']; ?>
                        <?php $st_info_display['st_gender']; ?>
                        <label class="form-label">&nbsp;</label>
                        <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                            <label class="btn btn-secondary active" for="gendlb" disabled> Gender* : </label>
                            <label
                                class="btn btn-primary <?php if($st_info_display['st_gender']=="Male" ) { echo 'active';} ?> ">
                                <input type="radio" name="std_gender" value="Male" autocomplete="off"
                                    <?php if($st_info_display['st_gender']=="Male" ) { echo 'checked="checked"';} ?>>
                                Male
                            </label>
                            <label
                                class="btn btn-primary <?php if($st_info_display['st_gender']=="Female" ) { echo 'active';} ?> ">
                                <input type="radio" name="std_gender" value="Female" autocomplete="off"
                                    <?php if($st_info_display['st_gender']=="Female" ) { echo 'checked="checked"';} ?>>
                                Female
                            </label>
                        </div>
                    </div>


                    <div class="col-md-6 ">
                        <label class="form-label">Registration No*</label>
                        <input type="number" placeholder="Username" name="std_username"
                            value="<?php echo $st_info_display['st_username']; ?>" class="form-control" required
                            min='10000000' max='99999999' title="CANNOT CHANGE" readonly>
                        <div class="invalid-feedback"> Registration No must be 8 characters in length! </div>
                    </div>

                    <div class="col-md-6 ">
                        <label class="form-label">Password*</label>
                        <input type="password" placeholder="Password" name="std_password"
                            value="<?php echo $st_info_display['st_password']; ?>" class="form-control" required
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@£$!%*#?&_]{2,}$"
                            title="Accept: AlphaNumeric & @£$!%*#?&_">
                        <div class="invalid-feedback"> Passowrd must contain letters and numbers! </div>
                    </div> <!-- reggex to expect 1 digit & 1 alphabet while accepting some special chars -->

                    <div class="col-md-4 ">
                        <label class="form-label">Grade*</label>
                        <select name="std_grade" class="form-select" required>
                            <?php
						foreach($ravi->gradelist as $g){
						?>
                            <option value="<?php echo $g; ?>"
                                <?php if($st_info_display['st_grade']==$g ) { echo 'selected="selected"';} ?>>
                                <?php echo $g; ?> </option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="col-md-4 ">
                        <label class="form-label">Roll Number*</label>
                        <input type="number" placeholder="Roll No" name="std_roll"
                            value="<?php echo $st_info_display['roll_no']; ?>" class="form-control" required min="1"
                            max="999" title="Value 1-999 expected">
                        <div class="invalid-feedback"> Roll Number must be under 999! </div>
                    </div>

                    <div class="col-md-4 ">
                        <label class="form-label">Date of Birth*</label>
                        <input type="date" placeholder="Birth Date" name="std_dob" class="form-control"
                            value="<?php echo $st_info_display['st_dob']; ?>" required title="Birthday Expected">
                        <div class="invalid-feedback"> Birthday Required! </div>
                    </div>

                    <div class="col-md-6 ">
                        <label class="form-label">Address</label>
                        <input type="text" placeholder="Address" name="std_address"
                            value="<?php echo $st_info_display['st_address']; ?>" class="form-control" required
                            pattern="^[A-Za-z\d @-_/,.]{2,100}$" title="Address expected">
                        <div class="invalid-feedback"> Address Required! </div>
                    </div>

                    <div class="col-md-6 ">
                        <label class="form-label">Contact No*</label>
                        <input type="text" placeholder="Contact Number" name="std_parent_contact"
                            value="<?php echo $st_info_display['st_parents_contact']; ?>" class="form-control" required
                            pattern="^(\+)?[\d]{9,12}$" title="9-12 digits expected">
                        <div class="invalid-feedback"> Phone number must be 9-12 digits! </div>
                    </div>

                    <div class="clearfix"> </div>

                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-primary" name="std_edit_now">Update Student</button>
                        <button type="reset" class="btn btn-warning">Reset Data</button>
                        <button type="submit" class="btn btn-danger" name="std_delete_now">Remove Student</button>


                    </div>
                    <div class="clearfix"> </div>
                </form>

                <!---->
            </div>

        </div>
        <!--//forms main-->

        <?php } ?>

    </div>
</div>