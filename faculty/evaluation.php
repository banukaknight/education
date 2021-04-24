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

        <div class="validation-form container">
            <!-- bootstrap 5 validation added by banuka -->
            <h2 class="inner-tittle ">ASSIGNMENT EVALUATION</h2>


            <form method="post" class="row g-3 needs-validation banukastform" novalidate enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-3 ">
                        <label class="form-label">Select Grade</label>
                        <select name="assi_grade" class="form-select" required>
                            <option value="All Grades"
                                <?php if(isset($_POST['btn_filter']) && $_POST['assi_grade']=="All Grades" ) { echo 'selected="selected"';} ?>>
                                All Grades</option>
                            <?php
						    foreach($ravi->gradelist as $g){
						?>
                            <option value="<?php echo $g; ?>"
                                <?php if(isset($_POST['btn_filter']) && $_POST['assi_grade']==$g ) { echo 'selected="selected"';} ?>>
                                <?php echo $g; ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="col-md-3 ">
                        <label class="form-label">Select Subject</label>
                        <select name="assi_subject" class="form-select" required>
                            <option value="All Subjects"
                                <?php if(isset($_POST['btn_filter']) && $_POST['assi_subject']=="All Subjects" ) { echo 'selected="selected"';} ?>>
                                All Subjects</option>
                            <?php
						    foreach($ravi->subjectlist as $s){
						    ?>
                            <option value="<?php echo $s; ?>"
                                <?php if(isset($_POST['btn_filter']) && $_POST['assi_subject']==$s ) { echo 'selected="selected"';} ?>>
                                <?php echo $s; ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <label class="form-label">&nbsp;</label>
                        <button type="submit" name="btn_filter" class="btn-block btn btn-success">Filter
                            Assignments</button>
                    </div>

                </div>
            </form>
        </div>

        <br>


        <div class="container" id="tablediv">
            <?php
            $get_assi_list = $ravi->assi_list_faculty($t_username);
            if(isset($_POST['btn_filter'])){ ?>
            <h4 class="inner-tittle text-titlecase">Assignments by: <?php echo $t_username?>
                For Grade: <?php echo $_POST['assi_grade']?> | Subject: <?php echo $_POST['assi_subject']?></h4>
            <?php      }else{ ?>
            <h4 class="inner-tittle text-uppercase">All Assignments by: <?php echo $t_username?></h4>
            <?php      }

            if($get_assi_list->num_rows > 0){
        ?>

            <table class="table table-bordered table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Grade</th>
                        <th>Subject</th>
                        <th>Deadline</th>
                        <th>Download</th>
                        <th>Get Submissions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a_sn = 1;
                        while($row =$get_assi_list->fetch_assoc())	{  
                            if(isset($_POST['btn_filter'])){
                                if( $_POST['assi_grade']=="All Grades" ){
                                    //do nothing- get all grades
                                }elseif( $_POST['assi_grade']!=$row['assi_grade']){
                                    continue; //skip rows not matching selected grade
                                }

                                if( $_POST['assi_subject']=="All Subjects" ){
                                    //do nothing- get all subjects
                                }elseif( $_POST['assi_subject']!=$row['assi_subject']){
                                    continue; //skip rows not matching selected subject
                                }
                            }
                    ?>
                    <tr>
                        <th><?php echo $row['assi_id'] ?></th>
                        <td><?php echo $row['assi_title']?></td>
                        <td><?php echo $row['assi_grade']?></td>
                        <td><?php echo $row['assi_subject']?></td>
                        <td><?php echo $row['assi_deadline']?></td>
                        <td><a class="btn btn-warning btn-sm" href="<?php echo $row['assi_location'] ?>"
                                target="_blank">
                                <i class="fa fa-download fw-fa"></i> Download</a>
                        </td>
                        <td>
                            <form class="form-inline" method="post" action="home.php?at=evaluate">
                                <input type="hidden" name="get_assi_id" value="<?php echo $row['assi_id'] ?>">
                                <button type="submit" name="btn_subs" class="btn btn-primary btn-sm">View Submissions</button>
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