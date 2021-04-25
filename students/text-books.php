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
        <h2 class="inner-tittle">STUDENT TEXT BOOKS for GRADE: <?php echo $student_display['st_grade']; ?> </h2>

        <div class="tables">

            <table class="table table-bordered mytbl table-striped">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Text Book Download Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $textbook_records = $ravi->get_textbooks($student_display['st_grade']);
                        $t_sn = 1;
                        while($row = $textbook_records->fetch_assoc()){
					?>
                    <tr>
                        <th scope="row"><?php echo $t_sn; ?></th>
                        <td><?php echo $row['b_subject']; ?></td>
                        <td><a href="<?php echo $row['b_url']; ?>" target="_blank"><?php echo $row['b_url']; ?></a></td>
                    </tr>
                    <?php } ?>

                </tbody>

            </table>

        </div>
 <hr>
        <h4 class="inner-tittle">Find More Books @<a href="http://www.edupub.gov.lk/BooksDownload.php" target="_blank"> (edupub.gov.lk) </a></h4>

        <!-- display different website content within page -->
        <div style="width:60vw; margin: auto;">
            <object type="text/html" data="http://www.edupub.gov.lk/BooksDownload.php"
                style="height:400px; width:60vw; overflow:auto; border:5px ridge blue">
            </object>
        </div>


    </div>

</div>
<!--//outer-wp-->