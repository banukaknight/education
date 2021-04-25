<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>

<?php
if (isset($_POST['btn_submit'])) {
    $target_dir = "Submitted/";
    $sub_assi_id = $_POST['sub_assi_id'];
    $ori_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $imageFileType = pathinfo($ori_file,PATHINFO_EXTENSION);
    $target_file = $target_dir . $sub_assi_id ."_". $st_username .".". $imageFileType;
   
    $uploadOk = 1;
    $sub_size = $_FILES['myfile']['size'];

   if( !in_array($imageFileType,['doc','pdf','png','jpg','jpeg']) ) {
        $ravi->alert_danger("File extention must be jpg, png, jpeg, gif, doc or pdf!");
    }elseif ($sub_size>1000000) {
        $ravi->alert_danger("File Size too large!");
        //move copy of file to server
    }elseif (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            //update db record

            $upload_success = $ravi->assi_sub_student($sub_assi_id, $st_username, $target_file, $sub_size);
                if ($upload_success) {
                $ravi->alert_success("Assignment has been Submitted!");
                }else{
                $ravi->alert_danger("Unable to update Database!");
                }
    }else{
            $ravi->alert_danger("Unable to Submit!");
    }
}//post add

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
        <h2 class="inner-tittle text-uppercase">ASSIGNMENT DOWNLOAD & SUBMISSION</h2>

        <form method="post">

            <label class="form-label">Select Subject:</label>

            <div class="row">
                <div class=" col-md-2">
                    <select name="assi_subject" class="form-select" required>
                        <option value="All Subjects"
                            <?php if(isset($_POST['grade_assi']) && $_POST['assi_subject']=="All Subjects" ) { echo 'selected="selected"';} ?>>
                            All Subjects</option>
                        <?php						
						foreach($ravi->subjectlist as $g){
						?>
                        <option value="<?php echo $g; ?>"
                            <?php if(isset($_POST['grade_assi']) && $_POST['assi_subject']==$g ) { echo 'selected="selected"';} ?>>
                            <?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class=" col ">
                    <button type="submit" name="grade_assi" class=" btn btn-warning">Select Subject</button>
                </div>
            </div>
        </form>
        <?php


        ?>

        <div class="" id="tablediv">
            <?php
                $st_grade = $student_display['st_grade'];
                
            if(isset($_POST['grade_assi'])){
                $assi_subject = $_POST['assi_subject'];
                if($assi_subject=="All Subjects"){
                    $get_assi_list = $ravi->assi_list_grade($st_grade);
                    echo "<h2 class='inner-tittle'>Grade - $st_grade | All Assignments</h2>";  
                }else{
                    $get_assi_list = $ravi->assi_list_subject($st_grade,$assi_subject);
                    echo "<h2 class='inner-tittle'>Grade - $st_grade | Assignments for Subject: $assi_subject </h2>";
                }
            }else{
                $get_assi_list = $ravi->assi_list_grade($st_grade);//default
                echo "<h2 class='inner-tittle'>Grade - $st_grade | All Assignments</h2>";   
            }
                 

            if($get_assi_list->num_rows > 0){
            ?>

            <table class="table table-bordered table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Uploaded @</th>
                        <th>Download </th>
                        <th>Submit Assignment
                            <span class="label label-warning">Due Today</span>
                            <span class="label label-danger">Overdue</span>
                        </th>
                        <th>Last date of Submission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a_sn = 1;
                        while($row =$get_assi_list->fetch_assoc())	{     

                        //check if assignment is overdue
                        if( date($row['assi_deadline']) < date("Y-m-d")){
                            $overdue = 0;
                        }elseif( date($row['assi_deadline']) == date("Y-m-d")){
                            $overdue = 1;
                        }else{
                            $overdue = -1; 
                        }
                        //echo $overdue;
                        ?>

                    <tr>
                        <th><?php echo $row['assi_id'] ?></th>
                        <td><?php echo $row['assi_title']?></td>
                        <td><?php echo $row['assi_subject']?></td>
                        <td><?php echo $row['assi_dateup']?></td>
                        <td><a class="btn btn-warning btn-sm" href="<?php echo '../faculty/'.$row['assi_location'] ?>"
                                target="_blank">
                                <i class="fa fa-download fw-fa"></i> Download</a></td>
                        <td
                            <?php switch($overdue){case 0: echo 'class="bg-danger"'; break; case 1: echo 'class="bg-warning"'; break; default: echo 'class="bg-primary"'; break; }?>>

                            <form class="form-inline" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="sub_assi_id" value="<?php echo $row['assi_id'] ?>">
                                <div style="width:10em; display:inline-block">
                                    <input type="file" name="myfile" class="form-control  form-control-sm" required>
                                </div>
                                <button type="submit" name="btn_submit" class="btn btn-success btn-sm"
                                    <?php if(!$overdue){echo "disabled";}?>><i class="fa fa-upload fw-fa"></i>
                                    Submit</button>
                            </form>
                        </td>
                        <td><?php echo $row['assi_deadline']?></td>
                    </tr>
                    <?php
                        $a_sn++;
                        }
                    ?>
                </tbody>
            </table>

            <?php }else{ ?>
            <h4 class="inner-tittle text-uppercase">No Assignments available!</h4>
            <?php } //end-if ?>
        </div>
        <!-- //container -->


    </div>
    <!-- //bkbox -->
</div>
<!-- //outerwap -->

<script>
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>