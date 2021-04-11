<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
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
	 
	//apply string handling functions to prepare user input data -banuka
    $std_fullname = preg_replace("/[^A-Za-z .,'-]/", '', $std_fullname); //remove non-alphabet char
    $std_fullname = ucwords( trim( $std_fullname )); //trim & capitalize 1st letters
    $std_address = preg_replace("/[^A-Za-z0-9 .,'-]/", '', $std_address); //remove non-alphabet char
    $std_address = ucwords( trim( $std_address )); //trim & capitalize 1st letters

    //echo $std_fullname, $std_username,  $std_password, $std_grade, $std_gender, $std_roll, $std_dob, $std_address, $std_parent_contact;
	 
    
    if($std_fullname=="" or $std_username=="" or $std_password=="" or $std_grade=="" or $std_gender=="" or $std_roll=="" or $std_dob=="" or $std_address=="" or $std_parent_contact=="")
	 {
		 echo "<script>alert('Please fill all fields accurately!');</script>";
	 }
	 else
	 {
		 $add_student_done = $ravi->add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,
		 $std_gender,$std_parent_contact);
		 if($add_student_done==true)
		 {
            echo "<script>alert('Student Record added!');</script>";
			echo "<script>window.location = 'home.php?at=student-add';</script>";
		 }
		 else
		 {
			 echo "<script>alert('Student Add FAILED!');</script>";
		 }
		 
	 }
	 
 }
?>

<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="home.php">Home</a></li>
            <li class="active"><?php echo strtoupper($_GET['at']); ?> </li>
        </ol>
    </div>
    <!--//sub-heard-part-->

    <div class="bkbox">

        <div class="validation-form container">
            <!-- bootstrap 5 validation added by banuka -->
            <h2 class="inner-tittle ">REGISTER NEW STUDENT</h2>

            <form method="post" class="row g-3 needs-validation banukastform" novalidate>

                <div class="col-md-8 ">
                    <label class="form-label">Full Name*</label>
                    <input type="text" placeholder="Full Name" name="std_fullname" value="Sample Name"
                        class="form-control" required pattern="^[A-Za-z ,-.']{2,100}$"
                        title="2-100 characters expected">
                    <div class="invalid-feedback"> Special characters not allowed! </div>
                </div>

                <div class="col-md-4 gendercls">

                    <label class="form-label">&nbsp;</label>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-secondary active" for="gendlb" disabled> Gender* : </label>
                        <label class="btn btn-primary active">
                            <input type="radio" name="std_gender" value="Male" autocomplete="on" checked> Male
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="std_gender" value="Female" autocomplete="off"> Female
                        </label>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <label class="form-label">Registration No*</label>
                    <input type="number" placeholder="Username" name="std_username" value="12345678"
                        class="form-control" required min='10000000' max='99999999' title="8 characters expected">
                    <div class="invalid-feedback"> Registration No must be 8 characters in length! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Password*</label>
                    <input type="password" placeholder="Password" name="std_password" value="Samplepw1"
                        class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@£$!%*#?&_]{2,30}$"
                        title="Accept: AlphaNumeric & @£$!%*#?&_ length(2-30)">
                    <div class="invalid-feedback"> Passowrd must contain letters and numbers! </div>
                </div> <!-- reggex to expect 1 digit & 1 alphabet while accepting some special chars -->

                <div class="col-md-4 ">
                    <label class="form-label">Grade*</label>
                    <select name="std_grade" class="form-select" required>
                        <?php
						
						foreach($ravi->gradelist as $g){
						?>
                        <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>


                <div class="col-md-4 ">
                    <label class="form-label">Roll Number*</label>
                    <input type="number" placeholder="Roll No" name="std_roll" value="15" class="form-control" required
                        min="1" max="999" title="Value 1-999 expected">
                    <div class="invalid-feedback"> Roll Number must be under 999! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Date of Birth*</label>
                    <input type="date" placeholder="Birth Date" name="std_dob" class="form-control" value="1993-09-21"
                        required title="Birthday Expected">
                    <div class="invalid-feedback"> Birthday Required! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Address</label>
                    <input type="text" placeholder="Address" name="std_address" value="Address Here" class="form-control"
                        required pattern="^[A-Za-z\d @-_/,.]{2,100}$" title="Address expected length(2-100)">
                    <div class="invalid-feedback"> Address Required! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Contact No*</label>
                    <input type="tel" placeholder="Contact Number" name="std_parent_contact" value="123456789"
                        class="form-control" required pattern="^(\+)?[\d]{9,12}$" title="9-12 digits expected">
                    <div class="invalid-feedback"> Phone number must be 9-12 digits! </div>
                </div>

                <div class="clearfix"> </div>

                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-success" name="std_add_now">Add Student</button>
                    <button type="reset" class="btn btn-warning ">Reset Form</button>
                </div>
                <div class="clearfix"> </div>
            </form>

        </div>

    </div>
    <!--//bkbox-->
</div>
<!-- //outter-wp" -->

