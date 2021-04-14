<?php
error_reporting(0);
$conn=mysqli_connect("localhost","username","password","project2");
$sql="SELECT * FROM st_assignments";
$res=mysqli_query($conn,$sql);
$files = mysqli_fetch_all($rest,MYSQLI_ASSOC);
if(isset($_POST['save']))
{
	$filename=$_FILES['myfile']['name'];
	$destination='upload/'.$filename;
	$extension=pathinfo($filename,PATHINFO_EXTENSION);
	$file=$_FILES['myfile']['tmp_name'];
	$size=$_FILES['myfile']['size'];
	if(!in_array($extension,['zip','pdf','png','jpg','jpeg']))
	{
		echo "your file exetension must be.zip,.pdf,.png";
}
elseif ($_FILES['myfile']['size']>1000000)
{
	echo "file is too large";
}
else{
	if(move_uploaded_file($file,$destination))
	{
		$sql ="INSERT INTO st_assignments(name,size,downloads)
		VALUES('$filename','$size',0)";
		if(mysqli_query($conn,$sql))
		{
			echo "file uploaded successfully";
			
	}
	else{
		echo "error".mysqli_error($conn);
		echo "fail to upload the file";
}
}
}
}
if(isset($_GET['file_id']))
{
	$id=$_GET['file_id'];
$sql ="SELECT* FROM st_assignments WHERE id=$id";
$result=mysqli_querry($conn,$sql);
$file=mysqli_fetch_assoc($result);
$filepath='upload/'.$file['name'];
if(file_exists($filepath))
{
	header('Content-Type:application/octet-stream');
	header('Content-Description:File Transfer');
	header('Content-Disposition:attachment;filename='.basename($filepath));
	header('expires:0');
	header('Cache-Control:must-revalidate');
	header('Pragma:public');
	header('content-Length:'.filesize('upload/'.$file['name']));
	readfile('upload/'.$file['name']);
	$newCount=$file['downloads']+1;
	$updatquerry="UPDATE st_assignments SET downloads=$newCount WHERE id=$id";
	mysqli_query($conn,$updatquery);
	exit;
}
}
	
	
?>


 
</body></html>