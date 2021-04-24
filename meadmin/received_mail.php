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
        <h2 class="inner-tittle">RECEIVED MAIL via Contact Form</h2>


        <?php					
         
            $done_get_contact_us = $ravi->get_contact_us();
            
            $s_sn = 1;

            if($done_get_contact_us->num_rows>0){
			?>

        <div class="tables">
            <table class=" table table-bordered table-striped table-sm table-responsive mytbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Phone No</th>
                        <th>Subject</th>

                        <th>IP</th>
                        <th>Logged Time</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row =$done_get_contact_us->fetch_assoc())	{ ?>

                    <tr>
                        <th rowspan="2"><?php echo $s_sn; ?></th>
                        <td><?php echo $row['cn_name']; ?></td>
                        <td><?php echo $row['cn_email']; ?></td>
                        <td><?php echo $row['cn_phone']; ?></td>
                        <td><?php echo $row['cn_subject']; ?></td>
                        <td><?php echo $row['cn_ip']; ?></td>
                        <td><?php echo $row['cn_time']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="6"><?php echo $row['cn_msg']; ?></td>
                    </tr>
                    <?php $s_sn++; } ?>
                </tbody>
            </table>
            <?php    } else {	 ?>
            <br>
            <h3>No Student information in selected class</h3>
            <?php 	} ?>

        </div>
    </div>


</div>
<!--//outer wp-->