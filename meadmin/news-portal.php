<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>

<?php 
if(isset($_POST['btn_add_news']))
{
    $target_dir = "../News-Img/";
    $ori_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $imageFileType = pathinfo($ori_file,PATHINFO_EXTENSION);
    $target_file = $target_dir . date("ymd-his_") . $meadmin_info .".". $imageFileType;
    
    $uploadOk = 1;
    $assi_size = $_FILES['myfile']['size'];

    if( !in_array($imageFileType,['png','jpg','jpeg']) ) {
        $ravi->alert_danger("File extention must be jpg, png or jpeg!");
    }elseif ($assi_size>1000000) {
        $ravi->alert_danger("File Size too large!");
        //move copy of file to server
    }elseif (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
          
        $n_head = $_POST['n_head'];
        $n_shead = $_POST['n_shead'];
        $n_details = $_POST['n_details'];
        $n_image = $target_file;
        $n_audience = $_POST['n_audience'];
        $n_author = $meadmin_info;
        
        //apply string handling functions to prepare user input data -banuka
        //$n_details = preg_replace("/[^A-Za-z0-9 .,'-!£$%&@#]/", '', $n_details); //remove non-alphabet char
        if(strlen($n_details>200)){ $n_details = substr($n_details,0,199); } //if length is <200, shorten
        $n_head = ucwords( trim( $n_head )); //trim & capitalize 1st letters
        $n_shead = ucwords( trim( $n_shead )); //trim & capitalize 1st letters
 
        if($n_head=="" or $n_shead=="" or $n_details=="" or $n_image=="")
        {
            $ravi->alert_danger("Please fill all fields accurately!");
        }
        else
        {
            $add_news_done = $ravi->add_news($n_head,$n_shead,$n_details,$n_image,$n_audience,$n_author);
            if($add_news_done==true)
            {
                $ravi->alert_success("News Record Added!");
            }
            else
            {
                $ravi->alert_danger("News Add Failed!");
            }
        }

    }else{
            $ravi->alert_danger("Unable to Upload!");
    }
    
 }//button pressed
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

    <div class="validation-form container">
            <!-- bootstrap 5 validation added by banuka -->
            <h2 class="inner-tittle ">NEWS PORTAL</h2>

            <form method="post" class="row g-3 needs-validation banukastform" novalidate enctype="multipart/form-data">

            <div class="col-md-4 ">
                    <label class="form-label">Heading</label>
                    <input type="text" placeholder="Full Name" name="n_head" value="Sample Heading"
                        class="form-control" required pattern="^[A-Za-z0-9 ,-.'£$&@%]{2,50}$"
                        title="2-100 characters expected">
                    <div class="invalid-feedback"> Please fill Heading </div>
                </div>
                <div class="col-md-8 ">
                    <label class="form-label">Sub Heading</label>
                    <input type="text" placeholder="Full Name" name="n_shead" value="Sample Subheading"
                        class="form-control" required pattern="^[A-Za-z0-9 ,-.'£$&@%]{2,50}$"
                        title="2-100 characters expected">
                    <div class="invalid-feedback"> Please fill Sub-Heading </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Announcement Details</label>
                    <textarea  name="n_details" rows="2" class="form-control" required maxlength="200">Sample Announcement Content</textarea>
                    <div class="invalid-feedback"> Special characters not allowed! </div>
                </div>

                <div class="col-md-6 ">
                    <label class="form-label">Select Image</label>
                    <input type="file" name="myfile" class="form-control" accept="image/*" required>
                    <div class="invalid-feedback">File required! </div>
                </div>
               
                <div class="col-md-6 ">
                    <label class="form-label">Audience</label>
                    <select name="n_audience" class="form-select" required>
                        <?php
						    foreach($ravi->audiencelist as $g){
						?>
                        <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>


                <div class="clearfix"> </div>

                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-success" name="btn_add_news">Publish Announcement</button>
                    <button type="reset" class="btn btn-warning ">Reset</button>
                </div>
                <div class="clearfix"> </div>
            </form>

        </div>

    </div>
    <!--//bkbox-->


</div>
<!--//outer wp-->