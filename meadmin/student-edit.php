<?php 
 
 if(isset($_POST['std_add_now']))
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
	 
	 if($std_fullname=="" or $std_username=="" or $std_password=="" or $std_grade=="" or $std_gender=="" or $std_roll=="" or $std_dob=="" or $std_address=="" or $std_parent_contact=="")
	 {
		 echo "<script>alert('please fill form and Add Student');</script>";
	 }
	 else
	 {
		 
		 $add_student_done = $ravi->add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,
		 $std_gender,$std_parent_contact);
		 if($add_student_done==true)
		 {
			echo "<script>window.location = 'home.php?ravi=student-information';</script>";
		 }
		 else
		 {
			 echo "<script>alert('Student Add FAILED!');</script>";
		 }
		 
	 }
	 
 }
?>


<div class=" col-md-6">
    <form method="post">

        <label class="form-label">Student Registration:</label>
        <select name="std_id" class="form-select" required>
            <?php
                        $opt = $ravi->all_student_info_display_admin(); //get all students
						while($op=$opt->fetch_assoc()) {
						?>
            <option value="<?php echo $op['st_username']; ?>"><?php echo $op['st_username']; ?></option>

            <?php } ?>
            
        </select>
        <input type="submit" name="students_info" class="btn" value="Display Student Info">

    </form>
</div>
<div class="clearfix"> </div>

<?php
										
                                        if(isset($_POST['students_info']))
                                        {
                                            $std_id = $_POST['std_id'];
                                        $st_info =$ravi->student_info_select($std_id);
	                                    $st_info_display = $st_info->fetch_assoc();
                                            //$s_sn = 1;
                                    ?>

<div class="forms-main">

    <div class="graph-form">
        <div class="validation-form container">
            <!-- bootstrap 5 validation added by banuka -->
            <h2 class="inner-tittle ">EDIT STUDENT</h2>
            <form method="post" class="row g-3 needs-validation banukastform" novalidate>
                <div class="col-md-8 ">
                    <label class="form-label">Full Name*</label>
                    <input type="text" placeholder="Full Name" name="std_fullname" value="<?php echo $st_info_display['st_fullname']; ?>"
                        class="form-control" required minlength="2" maxlength="100" title="2-100 characters expected">
                    <div class="invalid-feedback"> Name must be atleast 2 characters in length! </div>
                </div>

                <div class="col-md-4 gendercls">

                <?php $st_info_display['st_gender']; ?>
                    <label class="form-label">&nbsp;</label>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-secondary active" for="gendlb" disabled> Gender* : </label>
                        <label class="btn btn-primary active">
                            <input type="radio" name="std_gender" value="Male" autocomplete="off" <?php if($st_info_display['st_gender']=="Male" ) { echo 'checked="checked"';} ?> > Male
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="std_gender" value="Female" autocomplete="on" <?php if($st_info_display['st_gender']=="Female" ) { echo 'checked="checked"';} ?> > Female
                        </label>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <label class="form-label">Registration No*</label>
                    <input type="number" placeholder="Username" name="std_username" value="<?php echo $st_info_display['st_username']; ?>"
                        class="form-control" required min='10000000' max='99999999' title="8 characters expected">
                    <div class="invalid-feedback"> Registration No must be 8 characters in length! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Password*</label>
                    <input type="password" placeholder="Password" name="std_password" value="<?php echo $st_info_display['st_password']; ?>"
                        class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@£$!%*#?&_]{2,}$"
                        title="Accept: AlphaNumeric & @£$!%*#?&_">
                    <div class="invalid-feedback"> Passowrd must contain letters and numbers! </div>
                </div> <!-- reggex to expect 1 digit & 1 alphabet while accepting some special chars -->

                <div class="col-md-4 ">
                    <label class="form-label">Grade*</label>
                    <select name="std_grade" class="form-select" required>
                        <?php
						foreach($ravi->gradelist as $g){
						?>
                        <option value="<?php echo $g; ?>" <?php if($st_info_display['st_grade']==$g ) { echo 'selected="selected"';} ?> > 
                        <?php echo $g; ?> </option>
                        <?php } ?>
                    </select>
                </div>


                <div class="col-md-4 ">
                    <label class="form-label">Roll Number*</label>
                    <input type="number" placeholder="Roll No" name="std_roll" value="<?php echo $st_info_display['roll_no']; ?>" class="form-control" required
                        min="1" max="999" title="Value 1-999 expected">
                    <div class="invalid-feedback"> Roll Number must be under 999! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Date of Birth*</label>
                    <input type="date" placeholder="Birth Date" name="std_dob" class="form-control" value="<?php echo $st_info_display['st_dob']; ?>"
                        required title="Birthday Expected">
                    <div class="invalid-feedback"> Birthday Required! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Address</label>
                    <input type="text" placeholder="Address" name="std_address" value="<?php echo $st_info_display['st_address']; ?>" class="form-control"
                        required pattern="^[A-Za-z\d @-_/,.]{2,100}$" title="Address expected">
                    <div class="invalid-feedback"> Address Required! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Contact No*</label>
                    <input type="text" placeholder="Contact Number" name="std_parent_contact" value="<?php echo $st_info_display['st_parents_contact']; ?>"
                        class="form-control" required pattern="^(\+)?[\d]{9,12}$" title="9-12 digits expected">
                    <div class="invalid-feedback"> Phone number must be 9-12 digits! </div>
                </div>

                <div class="clearfix"> </div>

                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" name="std_add_now">Add Student</button>
                    <button type="reset" class="btn btn-warning btn-sm">Reset Form</button>
                </div>
                <div class="clearfix"> </div>
            </form>

            <!---->
        </div>

    </div>
</div>
<!--//forms main-->

<?php } ?>



<script>
//bootstrap validation code by banuka
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>