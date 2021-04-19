<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php
if (isset($_POST['btn_upload'])) {
    $target_dir = "Uploaded/";
    $target_file = $target_dir . date("ymd-his-") . basename($_FILES["myfile"]["name"]);
    //if(strlen($target_file) > )
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $assi_size = $_FILES['myfile']['size'];

    if( !in_array($imageFileType,['doc','pdf','png','jpg','jpeg']) ) {
        $ravi->alert_danger("File extention must be jpg, png, jpeg, gif, doc or pdf!");
    }elseif ($assi_size>1000000) {
        $ravi->alert_danger("File Size too large!");
        //move copy of file to server
    }elseif (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
        $files = date("ymd-his-") . basename($_FILES["myfile"]["name"]);
            //update db record
            //$t_username
            $assi_deadline = $_POST['assi_deadline'];
            $assi_subject = $_POST['assi_subject'];
            $assi_title = $_POST['assi_title'];
            $assi_grade = $_POST['assi_grade'];
            $assi_location = $target_dir . $files;
            //$assi_size

            $upload_success = $ravi->assi_up_faculty($t_username, $assi_deadline, $assi_subject, $assi_title, $assi_grade, $assi_location, $assi_size);
                if ($upload_success) {
                $ravi->alert_success("File has been Uploaded!");
                }else{
                $ravi->alert_danger("Unable to update Database!");
                }
    }else{
            $ravi->alert_danger("Unable to Upload!");
    }
}//post add

//code to remove assignment from server & database
if (isset($_POST['btn_remove'])){
    $rem_assi_location = $_POST['rem_assi_location'];
    $rem_assi_id = $_POST['rem_assi_id'];
    if(unlink($rem_assi_location)){
        //unlink removes file from sever storage
    }
    $remove_success = $ravi->assi_rem_faculty($rem_assi_id);
    if ($remove_success) {
    $ravi->alert_success("File has been Removed!");
    }else{
    $ravi->alert_danger("Unable to update Database!");
    }
}//post remove
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
            <h2 class="inner-tittle ">ASSIGNMENT DISTRIBUTION</h2>

            <form method="post" class="row g-3 needs-validation banukastform" novalidate enctype="multipart/form-data">

                <div class="col-lg-8 ">
                    <label class="form-label">Assignment Title*</label>
                    <input type="text" placeholder="Assignment Title" name="assi_title" value="Assignment 1"
                        class="form-control" required pattern="^[A-Za-z0-9 ,-.']{2,50}$"
                        title="2-50 characters expected">
                    <div class="invalid-feedback"> Special characters not allowed! </div>
                </div>

                <div class="col-lg-4 ">
                    <label class="form-label">Last date of Submission*</label>
                    <input type="date" placeholder="Assignment Deadline" name="assi_deadline" class="form-control"
                        value="<?php $ddate = date("Y-m-d", strtotime("+7 day")); echo $ddate; ?>" required
                        title="Deadline Expected"
                        min="<?php $eddate = date("Y-m-d", strtotime("+3 day")); echo $eddate; ?>">
                    <div class="invalid-feedback"> Atleast 3 days must be given to comeple assignment! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Assignment File*</label>
                    <input type="file" name="myfile" class="form-control" required>
                    <div class="invalid-feedback">File required! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Grade*</label>
                    <select name="assi_grade" class="form-select" required>
                        <?php
						    foreach($ravi->gradelist as $g){
						?>
                        <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Subject*</label>
                    <select name="assi_subject" class="form-select" required>
                        <?php
						    foreach($ravi->subjectlist as $s){
						?>
                        <option value="<?php echo $s; ?>"><?php echo $s; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="clearfix"> </div>
                <div class="col-md-12">
                    <button type="submit" name="btn_upload" class="btn-block btn btn-success"><i
                            class="fa fa-upload fw-fa"></i> Upload Assignment</button>
                </div>

            </form>
        </div>

        <br>


        <div class="container" id="tablediv">
            <?php
            $get_assi_list = $ravi->assi_list_faculty($t_username);
            if($get_assi_list->num_rows > 0){
        ?>

            <h4 class="inner-tittle text-uppercase">Previous Uploads by: <?php echo $t_username?></h4>
            <table class="table table-bordered table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Grade</th>
                        <th>Subject</th>
                        <th>Uploaded @</th>
                        <th>Last date of Submission</th>
                        <th>Download</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a_sn = 1;
                        while($row =$get_assi_list->fetch_assoc())	{     ?>
                    <tr>
                        <th><?php echo $a_sn ?></th>
                        <td><?php echo $row['assi_title']?></td>
                        <td><?php echo $row['assi_grade']?></td>
                        <td><?php echo $row['assi_subject']?></td>
                        <td><?php echo $row['assi_dateup']?></td>
                        <td><?php echo $row['assi_deadline']?></td>
                        <td><a class="btn btn-warning btn-sm" href="<?php echo $row['assi_location'] ?>"
                                target="_blank">
                                <i class="fa fa-download fw-fa"></i> Download</a>
                                <?php echo $row['assi_size']/1000 . " KB";?>
                                </td>
                        <td>
                            <form class="form-inline" method="post">
                                <input type="hidden" name="rem_assi_id" value="<?php echo $row['assi_id'] ?>">
                                <input type="hidden" name="rem_assi_location"
                                    value="<?php echo $row['assi_location'] ?>">
                                <button type="submit" name="btn_remove" class="btn btn-danger btn-sm" <?php if($row['assi_grade']==0){echo "disabled";}?> ><i
                                        class="fa fa-remove fw-fa"></i> Remove</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        $a_sn++;
                        }
                    ?>
                </tbody>
            </table>

            <?php }else{ ?>
            <h4 class="inner-tittle text-uppercase">No Previous Uploads</h4>
            <?php } //end-if ?>
        </div>
        <!-- //container -->


    </div>
    <!-- //bkbox -->
</div>
<!-- //outerwap -->