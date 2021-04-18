<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
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
        <h2 class="inner-tittle text-uppercase">ASSIGNMENT MARKS & SCRUTINY</h2>

        <?php
    if(isset($_POST['btn_scrut'])){
        $sub_id = $_POST['get_sub_id'];
        $scrutiny_req = $_POST['scrutiny_req'];
        $scrutiny_req = preg_replace("/[^A-Za-z .,'-]/", '', $scrutiny_req); //remove non-alphabet char
        
        $evaluate_success = $ravi->st_scrutiny_sub($sub_id,$scrutiny_req);

        if($evaluate_success==true){
            $ravi->alert_success("Scrutiny Requested!");
        }else{
            $ravi->alert_danger("Unable to Request Scrutiny!");
        }
    }
?>


        <form method="post">
            <label class="form-label">Select Subject:</label>

            <div class="row">
                <div class=" col-md-2">
                    <select name="assi_subject" class="form-select" required>
                        <option value="All Subjects"
                            <?php if(isset($_POST['btn_subj']) && $_POST['assi_subject']=="All Subjects" ) { echo 'selected="selected"';} ?>>
                            All Subjects</option>
                        <?php						
						foreach($ravi->subjectlist as $g){
						?>
                        <option value="<?php echo $g; ?>"
                            <?php if(isset($_POST['btn_subj']) && $_POST['assi_subject']==$g ) { echo 'selected="selected"';} ?>>
                            <?php echo $g; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class=" col ">
                    <button type="submit" name="btn_subj" class=" btn btn-warning">Select Subject</button>
                </div>
            </div>
        </form>


        <div class="container" id="tablediv">
            <?php
            $get_assi_list = $ravi->st_sub_by_stid($st_username);
            if(isset($_POST['btn_subj'])){ ?>
            <h4 class="inner-tittle text-titlecase">Assignments by: <?php echo $st_username?>
                For Subject: <?php echo $_POST['assi_subject']?></h4>
            <?php      }else{ ?>
            <h4 class="inner-tittle text-uppercase">All Assignments by: <?php echo $st_username?></h4>
            <?php      }

            if($get_assi_list->num_rows > 0){
        ?>

            <table class="table table-bordered table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Assi ID</th>
                        <th>Assi Subject</th>
                        <th>Assi Title</th>
                        <th>Initial Marks</th>
                        <th>Feedback</th>
                        <th>Final Marks</th>
                        <th>Scrutiny Request</th>
                        <th>Submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a_sn = 1;
                        while($row =$get_assi_list->fetch_assoc())	{  
                            if(isset($_POST['btn_subj'])){
                                
                                if( $_POST['assi_subject']=="All Subjects" ){
                                    //do nothing- get all subjects
                                }elseif( $_POST['assi_subject']!=$row['assi_subject']){
                                    continue; //skip rows not matching selected subject
                                }

                            }
                    ?>
                    <tr>
                        <th><?php echo $a_sn;  //$row['sub_id'] ?></th>
                        <td><?php echo $row['assi_id']?></td>
                        <td><?php echo $row['assi_subject']?></td>
                        <td><?php echo $row['assi_title']?></td>

                        <td><input type="number" class="form-control form-control-sm"
                                value="<?php echo $row['initial_marks']?>" readonly></td>

                        <td><input name="fc_response" class="form-control" type="text" maxlength="50"
                                value="<?php echo $row['fc_response']?>" readonly></td>

                        <form class="form-inline" method="post">
                            <td><input name="final_marks" class="form-control " type="number" min="0" max="100"
                                    value="<?php echo $row['final_marks']?>" readonly></td>

                            <td><input name="scrutiny_req" class="form-control" type="text" maxlength="50"
                                    value="<?php echo $row['scrutiny_req']?>" required></td>

                            <td> <input type="hidden" name="get_sub_id" value="<?php echo $row['sub_id'] ?>">
                                <button type="submit" name="btn_scrut" class="btn btn-danger btn-sm">Request</button>
                            </td>
                        </form>
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

<script>
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>