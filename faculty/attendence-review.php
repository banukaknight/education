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
        <h2 class="inner-tittle">REVIEW ATTENDENCE by: <?php echo $t_username; ?></h2>
        <h4>
            <span class=' p-1 m-3 border border-info rounded bg-secondary'>Color Codes: </span>
            <span class=' p-1 border border-info rounded bg-success'>Present</span>
            <span class=' p-1 border border-info rounded bg-danger'>Absent</span>
            <span class=' p-1 border border-info rounded bg-warning'>N/A</span>
            </h4>
        <hr>

        <div class="clearfix"> </div>

        <?php
        $st_atten_file_list; //array to hold attendene file names					
        foreach($ravi->gradelist as $g){
            $st_atten_file_list[$g] = "at_g_".$g;
        }
       
        foreach($st_atten_file_list as $g => $st_atten_file){

            $get_attendence = $ravi->fc_view_attendence($st_atten_file,$t_username);
            $get_columns = $ravi->fc_view_attendence_cols($st_atten_file);
            $columns_list = array();
            while($r = $get_columns->fetch_assoc()){
                array_push( $columns_list, $r['COLUMN_NAME']);
            }
            
            // echo print_r($columns_list);
                if($get_attendence->num_rows>0){
                ?>
        <h4 class="inner-tittle">Attendence for Grade: <?php echo $g; ?></h4>
        <?php $a_sn = 1;
                        while($row = $get_attendence->fetch_assoc()){ 
                            
                        ?>
        <div class="row">
            <div class='col-12 bg-info border border-dark rounded'>
                <h5><?php echo "<b>#".$a_sn."</b> | Session ID: ".$row['sesh_id']?>
                    <?php echo " | Date: <b>".$row['sesh_date']?>
                    <?php echo "</b> | Info: ".$row['sesh_info']?>
                    <?php echo " | Marked at: ".$row['sesh_datetime']?>
                </h5>
            </div>
        </div>
        <div class="row">
            <?php 
        for($x=5; $x < count($columns_list); $x++ ){
            //echo $columns_list[$x]. " |";
            //echo $row["$columns_list[$x]"];
            $bootclass = 'col-xs-3 col-sm-3 col-lg-2 border border-dark rounded';

            if($row["$columns_list[$x]"] == 1){
                //$total_attended++;
                echo "<div class='$bootclass bg-success'>$columns_list[$x]</div>";
            }elseif($row["$columns_list[$x]"] == 0){
                echo "<div class='$bootclass bg-danger'>$columns_list[$x]</div>";
            }else{
                echo "<div class='$bootclass bg-warning'>$columns_list[$x]</div>";
            }

        }
                       
                        
                        ?>
        </div>
        <?php $a_sn++; }//while rows   ?>
        </tbody>
        </table>
        <?php    } else {	 ?>
        <br>
        <h6>No Attendence data for Grade: <?php echo $g; ?></h6>

        <?php 	}//esle
                echo "<hr>";
            }//foreach atten list file
            ?>

    </div>
</div>


</div>
<!--//graph-visual-->
</div>
</div>