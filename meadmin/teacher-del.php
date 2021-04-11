<?php
//code for added layer of security, to prevent direct access to module -banuka
 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    /* choose the appropriate page to redirect users */
    die( header( 'location: ./home.php' ) );
}
?>
<?php 
 $del_teacher = $_GET['teacherid'];
$del_done = $ravi->delete_teacher($del_teacher);
if($del_done==true)
{
	echo "<script>window.location = 'home.php?ravi=teacher-edit'; alert('Deleted Teacher Record');</script>";	
}
else
{
	echo "<script>window.location='home.php?teacher=teacher-delete'; alert('Unable to delete Teacher Record');</script>";
}
?>