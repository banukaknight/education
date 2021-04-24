<?php
// //code for added layer of security, to prevent direct access to module -banuka
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
            <li><a href="home.php?at=evaluation">Evaluation</a></li>
            <li class="active"><?php echo strtoupper($_GET['at']); ?> </li>
        </ol>
    </div>
    <!--//sub-heard-part-->


    <div class="bkbox">

        <div class="validation-form container">
            <!-- bootstrap 5 validation added by banuka -->
            <h2 class="inner-tittle ">EVALUATE ASSIGNMENTS</h2>


            <?php
    if(isset($_POST['btn_eval'])){
        $sub_id = $_POST['get_sub_id'];
        $initial_marks = $_POST['initial_marks'];
        $fc_response = $_POST['fc_response'];
        $fc_response = preg_replace("/[^A-Za-z .,'-]/", '', $fc_response); //remove non-alphabet char

        $evaluate_success = $ravi->fc_evaluate_sub($sub_id,$initial_marks,$initial_marks,$fc_response);

        if($evaluate_success==true){
            $ravi->alert_success("Marks Updated!");
        }else{
            $ravi->alert_danger("Unable to update Marks!");
        }
    }
?>

            <?php
    if(isset($_POST['btn_subs']) || isset($_POST['get_assi_id'])){
        
        echo "<hr>";
        $get_assi_id = $_POST['get_assi_id'];
        //echo $get_assi_id; //for debugging only
        $get_subs_list = $ravi->fc_sub_by_assiid($get_assi_id);
        if($get_subs_list->num_rows > 0){
            echo "<h4 class='inner-tittle'>Student Submissions for Assignment ID: $get_assi_id</h4>";
           ?>

            <table class="table table-bordered table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>Submission ID</th>
                        <th>Student ID</th>
                        <th>Submission Date</th>
                        <th>Download</th>
                        <th>Marks</th>
                        <th>Feedback</th>
                        <th>Evaluate</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a_sn = 1;
                        while($row =$get_subs_list->fetch_assoc())	{  
                        
                    ?>
                    <tr>
                        <th><?php echo $row['sub_id'] ?></th>
                        <td><?php echo $row['st_username']?></td>
                        <td><?php echo $row['sub_dateup']?></td>
                        <td><a class="btn btn-warning btn-sm" href="<?php echo  '../students/'.$row['sub_location'] ?>"
                                target="_blank">
                                <i class="fa fa-download fw-fa"></i> Download</a>
                        </td>

                        <form class="form-inline" method="post">
                            <td><input name="initial_marks" class="form-control" type="number" min="0" max="100"
                                    value="<?php echo $row['initial_marks']?>" required <?php if($row['initial_marks'] != ""){echo "readonly";}?> ></td>
                            <td><input name="fc_response" class="form-control" type="text" maxlength="50"
                                    value="<?php echo $row['fc_response']?>" required
                                    pattern="^[A-Za-z0-9 ,-.']{1,50}$"></td>
                            <td>
                                <input type="hidden" name="get_sub_id" value="<?php echo $row['sub_id'] ?>">
                                <input type="hidden" name="get_assi_id" value="<?php echo $get_assi_id ?>">
                                <button type="submit" name="btn_eval" class="btn btn-success btn-sm" >Evaluate</button>

                            </td>
                        </form>
                    </tr>
                    <?php
                        $a_sn++;
                        }
                    ?>
                </tbody>
            </table>

            <?php
        }else{
            echo "<h4 class='inner-tittle'>No Submissions Avilable for Assignment ID: $get_assi_id</h4>";
        }

        echo '<a href="home.php?at=evaluation" class="btn btn-primary">GO BACK <i
        class="lnr lnr-arrow-left"></i></a>';
        echo "<hr>";
    }else{
        die( header( 'location: ./home.php?at=evaluation' ) );
        
    }


?>

        </div>
    </div>
</div>