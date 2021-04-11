<?php 
include "../../setting/config.php";
 session_start();
if(!$_SESSION['t_user'])
{
	header("location:../index.php");
}
else
{
	$t_username = $_SESSION['t_user'];
	$t_name = $ravi->teacher_info($t_username,"Teacher");
	$faculty_display = $t_name->fetch_assoc();
    echo "logged in";
}

?>


<form method="post">


    <label class="form-label">Select Grade:</label>
    <div class=" col-md-4 ">
        <select name="std_grade" class="form-select" required>
            <?php
						foreach($ravi->gradelist as $g){
						?>
            <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
            <?php } ?>
        </select>
    </div>


    Session Date <input type="date">
    Session info <input type="text">
    <input type="submit" name="get_stlist"> GET Students List

</form>

<?php 
	if(isset($_POST['get_stlist']))
	{
		$std_grade = $_POST['std_grade'];
	$student_dis_admin=	$ravi->student_info_display_admin($std_grade);
		$s_sn = 1;
	
?>

<h1>Grade - <?php echo $std_grade ?> : Students' Information</h1>
<div class="tables">
    <table class=" table table-bordered table-sm table-responsive" id="stinfo">

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

            <?php 
			if($student_dis_admin->num_rows>0){
				while($student_info_admin =$student_dis_admin->fetch_assoc())	{ ?>

            <tr>
                <td><?php echo $s_sn; ?></td>
                <td><?php echo $student_info_admin['st_username']; ?></td>
                <td><?php echo $student_info_admin['st_fullname']; ?></td>
                <td><?php echo $student_info_admin['roll_no'] ?></td>
                <td>
                    <input type="checkbox">Present
                </td>
            </tr>

            <?php $s_sn++; }?>
            Submit Attendence
            <?php		echo "test";	
		} else {
										 ?>
            No Student information in selected class
            
            <?php 
										} }
										?>