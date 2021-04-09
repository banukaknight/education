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