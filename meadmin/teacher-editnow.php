<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php 

 $teacher_id = $_GET['teacherid'];
 $edit_teacher_info = $ravi->edit_teacherid($teacher_id);
	$edit_teacher_display = $edit_teacher_info->fetch_assoc();


if(isset($_POST['up_teacher']))
{
	
	
	$up_fullname = $_POST['up_fullname'];
	$up_address = $_POST['up_address'];
	$up_email = $_POST['up_email'];
	//$up_father = $_POST['up_father'];
	//$up_mother = $_POST['up_mother'];
	$up_dob = $_POST['up_dob'];
	//$up_qualification = $_POST['up_qualification'];
	$up_contact = $_POST['up_contact'];
	//$up_staff = $_POST['up_staff'];
	$up_gender = $_POST['up_gender'];
	
	$update_done = $ravi->update_teacher_info($up_fullname,$up_address,$up_email,$up_dob,$up_contact,$up_gender,$teacher_id);
	if($update_done==true)
	{
		echo "<script>window.location='home.php?at=teacher-information';</script>";
		echo "<script>alert('Teacher Edit SUCCESFUL!');</script>";
	}
	else
	{
		echo "<script>alert('Cannot update Information');</script>";
	}
}
?>


<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="home.php">Home</a></li>
            <li class="active"><?php if(isset($_GET['at'])){ echo strtoupper($page=$_GET['at']); } ?>
            </li>
        </ol>
    </div>
    <!--//sub-heard-part-->


    <div class="bkbox">
        <div class="form-body">
            <h2 class="inner-tittle">UPDATE TEACHER RECORD: <?php echo $edit_teacher_display['t_username']; ?> </h2>
            <form method="post" class="row g-3 needs-validation banukastform" novalidate>

                <div class="col-md-8 ">
                    <label class="form-label">Full Name*</label>
                    <input type="text" placeholder="Full Name" name="up_fullname"
                        value="<?php echo $edit_teacher_display['t_fullname']; ?>" class="form-control" required
                        pattern="^[A-Za-z ,-.']{2,100}$" title="2-100 characters expected">
                    <div class="invalid-feedback"> Special characters not allowed! </div>
                </div>

                <div class="col-md-4 gendercls">
                    <label class="form-label">&nbsp;</label>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-secondary active" for="gendlb" disabled> Gender* : </label>
                        <label
                            class="btn btn-primary <?php if($edit_teacher_display['t_gender']=="Male" ) { echo 'active';} ?> ">
                            <input type="radio" name="up_gender" value="Male" autocomplete="on"
                                <?php if($edit_teacher_display['t_gender']=="Male" ) { echo 'checked="checked"';} ?>>
                            Male
                        </label>
                        <label
                            class="btn btn-primary <?php if($edit_teacher_display['t_gender']=="Female" ) { echo 'active';} ?> ">
                            <input type="radio" name="up_gender" value="Female" autocomplete="off"
                                <?php if($edit_teacher_display['t_gender']=="Female" ) { echo 'checked="checked"';} ?>>
                            Female
                        </label>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Registration No*</label>
                    <input type="number" placeholder="Username" name="up_username"
                        value="<?php echo $edit_teacher_display['t_username']; ?>" readonly class="form-control"
                        required min='1000' max='99999999' title="Cannot change!">
                    <div class="invalid-feedback"> Registration No must be 4-8 characters in length! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Password*</label>
                    <input type="password" placeholder="Password" name="up_password" value="Samplepw1"
                        class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@£$!%*#?&_]{2,30}$"
                        title="Accept: AlphaNumeric & @£$!%*#?&_ length(2-30)">
                    <div class="invalid-feedback"> Passowrd must contain letters and numbers! </div>
                </div> <!-- reggex to expect 1 digit & 1 alphabet while accepting some special chars -->

                <div class="col-md-6 ">
                    <label class="form-label">Address*</label>
                    <input type="text" placeholder="Address" name="up_address"
                        value="<?php echo $edit_teacher_display['t_address']; ?>" class="form-control" required
                        pattern="^[A-Za-z\d @-_/,.]{2,100}$" title="Address expected length(2-100)">
                    <div class="invalid-feedback"> Address Required! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Contact No*</label>
                    <input type="tel" placeholder="Contact Number" name="up_contact"
                        value="<?php echo $edit_teacher_display['t_contact']; ?>" class="form-control" required
                        pattern="^(\+)?[\d]{9,12}$" title="9-12 digits expected">
                    <div class="invalid-feedback"> Phone number must be 9-12 digits! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">E-Mail*</label>
                    <input type="email" placeholder="E-Mail" name="up_email"
                        value="<?php echo $edit_teacher_display['t_email']; ?>" class="form-control" required
                        maxlength="50" title="E-mail Address expected">
                    <div class="invalid-feedback"> E-Mail Address Required! </div>
                </div>


                <div class="col-md-4 ">
                    <label class="form-label">Date of Birth*</label>
                    <input type="date" placeholder="Birth Date" name="up_dob" class="form-control"
                        value="<?php echo $edit_teacher_display['t_dob']; ?>" required title="Birthday Expected">
                    <div class="invalid-feedback"> Birthday Required! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Staff Type*</label>
                    <select name="up_staff" class="form-select" required disabled>
                        <?php
						foreach($ravi->stafflist as $g){
						?>
                        <option value="<?php echo $g; ?>"
                            <?php if($edit_teacher_display['t_staff_type']==$g ) { echo 'selected="selected"';} ?>>
                            <?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="up_teacher">Update Teacher</button>
                    <button type="reset" class="btn btn-warning">Reset Form</button>
                </div>

            </form>
        </div>

    </div>
    <!-- //bkbox-->

</div>
<!-- //outter-wp -->