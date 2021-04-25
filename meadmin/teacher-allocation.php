<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php 
 if(isset($_POST['btn_allocate']))
 {
    $fc_username = $_POST['fc_username'];
    $fc_grade = $_POST['fc_grade'];
    $fc_subject = $_POST['fc_subject'];

    if($fc_username=="" OR $fc_grade=="" OR $fc_subject==""){
        $ravi->alert_danger("Unable to Allocate Faculty!");
    }else{
        $add_done = $ravi->allocate_teacher($fc_username,$fc_subject,$fc_grade);
        if($add_done==true)
        {
           $ravi->alert_success("Faculty Allocation Record Added!");
            //echo "<script>window.location='home.php?teacher=teacher-information';</script>";
        }
        else
        {
           $ravi->alert_danger("Adding Record Unsuccesful");
        }
    }

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
        <h2 class="inner-tittle">FACULTY/SUBJECT ALLOCATION</h2>

        <form method="post">

            <div class="row">
                <div class=" col-lg-6 ">
                    <label class="form-label">Select Faculty:</label>
                    <select name="fc_username" class="form-select" required>
                        <?php
						$teacher_dis_admin = $ravi->teacher_info_display_admin();
						while($t_info = $teacher_dis_admin->fetch_assoc()){
						?>
                        <option value="<?php echo $t_info['t_username']; ?>">
                            <?php echo $t_info['t_username'] ." - ". $t_info['t_fullname']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row">
            <div class=" col-lg-3 col-md-6">
                <label class="form-label">Select Grade:</label>
                <select name="fc_grade" class="form-select" required>
                    <?php
						
						foreach($ravi->gradelist as $g){
						?>
                    <option value="<?php echo $g; ?>">
                        <?php echo $g; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class=" col-lg-3 col-md-6">
                <label class="form-label">Select Subject:</label>
                <select name="fc_subject" class="form-select" required>
                    <?php
						
						foreach($ravi->subjectlist as $s){
						?>
                    <option value="<?php echo $s; ?>">
                        <?php echo $s; ?></option>
                    <?php } ?>
                </select>
            </div>
            </div>

            <div class=" col "> 
                <button type="submit" name="btn_allocate" class=" btn btn-primary">Allocate Faculty</button>
            </div>
        </form>

        <div class="clearfix"> </div>
<br>
        <div class="tables">

                <table class="table table-bordered mytbl table-striped">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Faculty ID</th>
                            <th>Faculty Name</th>
                            <th>Grade</th>
                            <th>Subject Allocated</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $allocation_records = $ravi->get_allocations();
                        $t_sn = 1;
                        while($row = $allocation_records->fetch_assoc()){
					?>
                        <tr>
                            <th scope="row"><?php echo $t_sn; ?></th>
                            <td><?php echo $row['t_username']; ?></td>
                            <td><?php echo $row['t_gender'] == "Male" ? "Mr. " : "Ms. "; echo $row['t_fullname']; ?></td>
                            <td><?php echo $row['st_grade']; ?></td>
                            <td><?php echo $row['sub_name']; ?></td>
                        </tr>
                    <?php } ?> 

                    </tbody>

                </table>

        </div>


    </div>

</div>
<!--//outer-wp-->