<?php
if (isset($_POST['btn_upload'])) {
$target_dir = "Uploaded/";
$target_file = $target_dir . date("dmYhis") . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif" ) {
if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
$files = date("dmYhis") . basename($_FILES["myfile"]["name"]);
}else{
echo "Error Uploading File";
exit;
}
}else{
echo "File Not Supported";
exit;
}

//$t_username
$assi_deadline = $_POST['assi_deadline'];
$assi_subject = $_POST['assi_subject'];
$assi_title = $_POST['assi_title'];
$assi_grade = $_POST['assi_grade'];
$assi_location = $target_dir . $files;

$upload_success = $ravi->assi_up_faculty($t_username, $assi_deadline, $assi_subject, $assi_title, $assi_grade, $assi_location );
if ($upload_success) {
echo "File has been uploaded";
}else{
    echo $upload_success;
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
                    <label class="form-label">Deadline*</label>
                    <input type="date" placeholder="Assignment Deadline" name="assi_deadline" class="form-control"
                        value="<?php $ddate = date("Y-m-d", strtotime("+7 day")); echo $ddate; ?>" required
                        title="Deadline Expected"
                        min="<?php $eddate = date("Y-m-d", strtotime("+3 day")); echo $eddate; ?>">
                    <div class="invalid-feedback"> Atleast 3 days must be given to comeple assignment! </div>
                </div>

                <div class="col-md-4 ">
                    <label class="form-label">Assignment File*</label>
                    <input type="file" name="myfile" class="form-control">
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
                            class="fa fa-upload fw-fa"></i>
                        Upload</button>
                </div>

            </form>
        </div>

        <br>
        <div class="container">
            <table id="demo" class="table table-bordered">
                <thead>
                    <tr>
                        <td>FileName</td>
                        <td>Download</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
      $get_assi_list = $ravi->assi_list_faculty($t_username);

      while($row =$get_assi_list->fetch_assoc())	{ 
          
            echo '<tr>';
            echo '<td>'.$row['assi_title'].'</td>';
            echo '<td><a class="btn" href="'.$row['assi_location'].'">Download</a></td>';
            echo '</tr>';

      }
      ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- //bkbox -->
</div>
<!-- //outerwap -->