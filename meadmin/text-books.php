<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php 
 if(isset($_POST['btn_addbook']))
 {
    $b_grade = $_POST['fc_grade'];
    $b_subject = $_POST['fc_subject'];
    $b_url = $_POST['b_url'];

    if($b_grade=="" OR $b_subject=="" OR $b_url==""){
        $ravi->alert_danger("Unable to Create Record!");
    }else{
        $add_done = $ravi->add_textbook($b_grade,$b_subject,$b_url);
        if($add_done==true)
        {
           $ravi->alert_success("Text Book Record Added!");
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
        <h2 class="inner-tittle">TEXT BOOKS ALLOCATION</h2>

        <form method="post">

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

            
            <div class="row">
                <div class=" col-lg-6 ">
                    <label class="form-label">Enter Text Book URL:</label>
                    <input type="url" name="b_url" class="form-control" required>
                </div>
            </div>


            <div class=" col "> 
                <button type="submit" name="btn_addbook" class=" btn btn-primary btn-sm">Allocate Text Book</button>
                <a class="btn btn-sm btn-info" target="_blank" href="http://www.edupub.gov.lk/BooksDownload.php">Find More Books</a>
            </div>
        </form>

        <div class="clearfix"> </div>
<br>
        <div class="tables">

                <table class="table table-bordered mytbl table-striped">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Grade</th>
                            <th>Subject</th>
                            <th>Text Book Download Link</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $textbook_records = $ravi->get_textbooks();
                        $t_sn = 1;
                        while($row = $textbook_records->fetch_assoc()){
					?>
                        <tr>
                            <th scope="row"><?php echo $t_sn; ?></th>
                            <td><?php echo $row['b_grade']; ?></td>
                            <td><?php echo $row['b_subject']; ?></td>
                            <td><a href="<?php echo $row['b_url']; ?>" target="_blank"><?php echo $row['b_url']; ?></a></td>
                        </tr>
                    <?php } ?> 

                    </tbody>

                </table>

        </div>


    </div>

</div>
<!--//outer-wp-->