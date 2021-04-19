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
            <li class="active"><?php if(isset($_GET['at'])){ echo strtoupper($page=$_GET['at']); } ?></li>
        </ol>
    </div>
    <!--//sub-heard-part-->

    <div class="bkbox">
        <h2 class="inner-tittle">DISPLAY STUDENT ATTENDENCE: <?php echo $st_username; ?></h2>


        <div class="clearfix"> </div>

        <?php					
         
        $st_grade = $student_display['st_grade'];
        $st_atten_file = "at_g_".$st_grade;
        //$st_username

        $get_attendence = $ravi->st_view_attendence($st_atten_file,$st_username);
        //echo $get_attendenc; //debugging only
        
            if(($get_attendence) && $get_attendence->num_rows>0){
			?>

        <div class="tables">
            <table class=" table table-bordered table-sm table-responsive table-striped  mytbl">
                <thead>
                    <tr>
                    <th colspan="3" class="text-center">Session</th>
                    <th colspan="3" class="text-center">Attendence Marked </th>
                    </tr>
                    <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Info</th>
                    <th>by Faculty</th>
                    <th>at</th>
                    <th>as</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a_sn = 1;
                    $total_attended = 0;
                    $total_classes_held = 0;

                    while($row =$get_attendence->fetch_assoc()){ 
                        $total_classes_held++;
                        
                    ?>
                    <tr>
                    <td><?php echo $row['sesh_id']?></td>
                    <td><?php echo $row['sesh_date']?></td>
                    <td><?php echo $row['sesh_info']?></td>
                    <td><?php echo $row['t_username']?></td>
                    <td><?php echo $row['sesh_datetime']?></td>
                    <?php 
                    if($row["$st_username"] == 1){
                        $total_attended++;
                        echo "<td class='bg-success'>Present</td>";
                    }else{
                        echo "<td class='bg-danger'>Absent</td>";
                    }
                    
                    ?>
                    </tr>
                    <?php $a_sn++; }   ?>
                </tbody>
            </table>
            <?php    } else {	 ?>
            <br>
            <h3>No Attendence Information Found</h3>
            <?php 	} ?>

        </div>
    </div>


</div>
<!--//graph-visual-->
</div>
</div>