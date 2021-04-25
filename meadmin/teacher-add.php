<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php 
 if(isset($_POST['add_teacher_info']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	  $add_t_fullname = $_POST['add_t_fullname'];
	 $add_t_address = $_POST['add_t_address'];
	 $add_t_email = $_POST['add_t_email'];
	 $add_t_username = $_POST['add_t_username'];
	 $add_t_pass = $_POST['add_t_pass'];
	 //$add_t_father = $_POST['add_t_father'];
	 //$add_t_mother = $_POST['add_t_mother'];
	 $add_t_dob = $_POST['add_t_dob'];
	 //$add_t_qualification = $_POST['add_t_qualification'];
	 $add_t_contact = $_POST['add_t_contact'];
	 $add_t_staff = $_POST['add_t_staff'];
	 $add_t_gender = $_POST['add_t_gender'];

	//apply string handling functions to prepare user input data -banuka
    $add_t_fullname = preg_replace("/[^A-Za-z .,'-]/", '', $add_t_fullname); //remove non-alphabet char
    $add_t_fullname = ucwords( trim( $add_t_fullname )); //trim & capitalize 1st letters
    $add_t_address = preg_replace("/[^A-Za-z0-9 .,'-]/", '', $add_t_address); //remove non-alphabet char
    $add_t_address = ucwords( trim( $add_t_address )); //trim & capitalize 1st letters

	 if($add_t_fullname=="" OR $add_t_address=="" OR $add_t_email=="" OR $add_t_username=="" OR $add_t_pass=="" OR $add_t_dob=="" OR $add_t_contact=="" OR $add_t_staff=="" OR $add_t_gender=="")
	 {
		$ravi->alert_danger("Form not completed!");
	 }
	 else
	 {
	 
	 $add_done = $ravi->add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_dob,$add_t_contact,$add_t_staff,$add_t_gender);
	 if($add_done==true)
	 {
        $ravi->alert_success("Teacher Record Added!");
		 //echo "<script>window.location='home.php?teacher=teacher-information';</script>";
	 }
	 else
	 {
		$ravi->alert_danger("Adding Teacher Unsuccesful");
	 }
 }
 }
?>

<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.html">Home</a></li>
            <li class="active"><?php echo strtoupper($_GET['at']); ?>
            </li>
        </ol>
    </div>
    <!--//sub-heard-part-->

    <div class="bkbox">
        <div class="form-body">
            <h2 class="inner-tittle"> REGISTER NEW TEACHER </h2>

            <form method="post" class="row g-3 needs-validation banukastform" novalidate>

                <div class="col-md-8 ">
                    <label class="form-label">Full Name*</label>
                    <input type="text" placeholder="Full Name" name="add_t_fullname" value="Sample Name"
                        class="form-control" required pattern="^[A-Za-z ,-.']{2,100}$"
                        title="2-100 characters expected">
                    <div class="invalid-feedback"> Special characters not allowed! </div>
                </div>

                <div class="col-md-4 gendercls">
                    <label class="form-label">&nbsp;</label>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-secondary active" for="gendlb" disabled> Gender* : </label>
                        <label class="btn btn-primary active">
                            <input type="radio" name="add_t_gender" value="Male" autocomplete="on" checked> Male
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="add_t_gender" value="Female" autocomplete="off"> Female
                        </label>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Registration No*</label>
                    <input type="number" placeholder="Username" name="add_t_username" value="12345678"
                        class="form-control" required min='1000' max='99999999' title="4-8 characters expected">
                    <div class="invalid-feedback"> Registration No must be 4-8 characters in length! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Password*</label>
                    <input type="password" placeholder="Password" name="add_t_pass" value="pw1"
                        class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@£$!%*#?&_]{2,30}$"
                        title="Accept: AlphaNumeric & @£$!%*#?&_ length(2-30)">
                    <div class="invalid-feedback"> Passowrd must contain letters and numbers! </div>
                </div> <!-- reggex to expect 1 digit & 1 alphabet while accepting some special chars -->

                <div class="col-md-6 ">
                    <label class="form-label">Address*</label>
                    <input type="text" placeholder="Address" name="add_t_address" value="Sri Lanka" class="form-control"
                        required pattern="^[A-Za-z\d @-_/,.]{2,100}$" title="Address expected length(2-100)">
                    <div class="invalid-feedback"> Address Required! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Contact No*</label>
                    <input type="tel" placeholder="Contact Number" name="add_t_contact" value="123456789"
                        class="form-control" required pattern="^(\+)?[\d]{9,12}$" title="9-12 digits expected">
                    <div class="invalid-feedback"> Phone number must be 9-12 digits! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">E-Mail*</label>
                    <input type="email" placeholder="E-Mail" name="add_t_email" value="sampleemail@gmail.com"
                        class="form-control" required maxlength="50" title="E-mail Address expected">
                    <div class="invalid-feedback"> E-Mail Address Required! </div>
                </div>


                <div class="col-md-4 ">
                    <label class="form-label">Date of Birth*</label>
                    <input type="date" placeholder="Birth Date" name="add_t_dob" class="form-control" value="1993-09-21"
                        required title="Birthday Expected">
                    <div class="invalid-feedback"> Birthday Required! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Staff Type*</label>
                    <select name="add_t_staff" class="form-select" required>
                        <?php
						foreach($ravi->stafflist as $g){
						?>
                        <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" name="add_teacher_info">Add Teacher</button>
                    <button type="reset" class="btn btn-warning">Reset Form</button>
                </div>
            </form>
        </div>

    </div>
    <!--//bkbox-->

</div>
<!-- //outter-wp" -->
