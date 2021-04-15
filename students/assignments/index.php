<?php 
include "../../setting/config.php";
 session_start();
if(!$_SESSION['st_user'])
{
	header("location:../home.php");
}
else
{
	$st_username = $_SESSION['st_user'];
	$st_name = $ravi->student_info_select($st_username);
	$student_name_display = $st_name->fetch_assoc();
}

$message = "";
$uploadFolder = 'uploads/';

if(isset($_FILES['file']))
{
    $filename=$_FILES['file']['name']; 
    $target_path = $uploadFolder . time() .'_'. $st_username .'_'. str_replace( '_','', basename( $_FILES['file']['name']) );
    $extension=pathinfo($filename,PATHINFO_EXTENSION);
    
    if(!in_array($extension,['png','jpg','jpeg','doc']))
	{
		$message = "your file exetension must be .png, .jpg or .doc";
    }
    elseif ($_FILES['file']['size']>1000000)
    {
        $message = "file is too large";
    }    
        //Try to move the uploaded file into the designated folder
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            $message = "The file ".  basename( $_FILES['file']['name']). 
            " has been uploaded";
        } else{
                 $message = "There was an error uploading the file, please try again!";
        }

        if(strlen($message) > 0)
        {
            $message = '<p class="error">' . $message . '</p>';
        }

}

/** LIST UPLOADED FILES **/
$uploaded_files = "";
 
//Open directory for reading
$dh = opendir($uploadFolder);

//LOOP through the files
while (($file = readdir($dh)) !== false) 
{
    if($file != '.' && $file != '..')
{
    $filename = $uploadFolder . $file;
    $parts = explode("_", $file);

    $size = formatBytes(filesize($filename));
    $added = date("m/d/Y G:i:s ", $parts[0]);
    $st_uname = $parts[1];
    $origName = $parts[2];

    $filetype = getFileType(substr($file, strlen($file) - 3));

    if($st_username==$st_uname){
        //get only files with st_username matching
        //$uploaded_files .= "<li class=\"$filetype\"><a href=\"$filename\">$origName</a> $size - $added</li>\n";
        $uploaded_files .= "<tr><td><a href=\"$filename\">$origName</a></td> <td>$size</td> <td>$added</td></tr>";
    }

}
}
closedir($dh);

if(strlen($uploaded_files) == 0)
{
    $uploaded_files = "<li><em>No files found</em></li>";
}else{
    $uploaded_files = '<tr class="info"><th>File</th><th>Size</th><th>Date & Time</th></tr> '. $uploaded_files;
}

function getFileType($extension)
{
    $images = array('jpg', 'gif', 'png', 'bmp');
    $docs   = array('txt', 'rtf', 'doc');
    $apps   = array('zip', 'rar', 'exe');
     
    if(in_array($extension, $images)) return "Images";
    if(in_array($extension, $docs)) return "Documents";
    if(in_array($extension, $apps)) return "Applications";
    return "";
}

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
    
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    
    $bytes /= pow(1024, $pow); 
    
    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>


<!DOCTYPE HTML>
<html>

<head>
    <title><?php echo "Student ID: $st_username" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="E-App">
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/banukacss.css" rel='stylesheet' type='text/css' />

    <!-- Graph CSS -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
        type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/amcharts.js"></script>
    <script src="../js/serial.js"></script>
    <script src="../js/light.js"></script>
    <script src="../js/radar.js"></script>
    <link href="../css/fabochart.css" rel='stylesheet' type='text/css' />

    <!--clock init-->
    <script src="../js/css3clock.js"></script>
    <!--Easy Pie Chart-->
    <!--skycons-icons-->
    <script src="../js/skycons.js"></script>
    <!--//skycons-icons-->

    <link rel="stylesheet" href="../js-calendar/app.css">
</head>

<body>

    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <!-- header-starts -->
                <div class="header-section">
                    <div class="clearfix"></div>
                </div>
                <!-- //header-ends -->
                <div class="outter-wp">
                    <h2 class="inner-tittle">Welcome,
                        <?php echo ucfirst($student_name_display['st_fullname']); ?> </h2>

                    <div id="container">
                        <h2 class="inner-tittle">Assignment Uploading Portal: <?php echo $st_username ?></h2>

                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Submit Assignment</legend>
                            <form method="post" action="index.php" enctype="multipart/form-data">
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                                <p><label for="name">Select file</label><br />
                                    <input type="file" name="file" />
                                    <input type="submit" name="submit" value="Start Upload" />
                                    <?php echo $message ?>
                                </p>
                            </form>
                        </fieldset>

                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Previousely Uploaded Assignments</legend>
                          
                            <table id="assitb" class=" table table-condensed table-hover">
                                <?php echo $uploaded_files; ?>
                            </table>
                        </fieldset>

                    </div>

                </div>
                <!--// outer-wp-->

                <!--footer section start-->
                <footer>
                    <p>
                        <?php $ip = $_SERVER['REMOTE_ADDR'];
					if ($ip != '127.0.0.1'){
					$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                        //code for getting location of user using ip address
					echo "User ID: $st_username | Logged in from: "; 
					echo "$details->city, $details->region, $details->country with IP address: $details->ip" ;
										}else{
											echo "Student ID: $st_username";
                                       }
					?>
                        <a class=" btn-danger btn-sm float-right" href="../logouts.php"><span> Log out </span><i
                                class="lnr lnr-power-switch"></i></a>
                        <a class=" btn-primary btn-sm float-right " href="../"><span> Go Back </span><i
                                class="lnr lnr-arrow-left"></i></a>
                    </p>
                </footer>

                <!--footer section end-->

                <!--//content-inner-->
                <!--/sidebar-menu-->
                <div class="sidebar-menu">
                    <header class="logo">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span
                                id="logo">
                                <h1><?php echo $st_username ?></h1>
                            </span>
                        </a>
                    </header>
                    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                    <!--/down-->
                    <div class="down" id="sidebarbg">
                        <?php
				$st_gender = $student_name_display['st_gender'];
				if($st_gender == 'Male'){
					echo "<img src='../images/bk/picm.png'>";
				}else if($st_gender == 'Female'){
					echo "<img src='../images/bk/picf.png'>";
				}else{
					echo "<img src='../images/bk/pice.png'>";
				}
				
				?>

                        <span class=" name-caret"><?php echo $student_name_display['st_fullname']; ?></span>
                        <p>Student</p>
                        <ul>
                            <li><a class="tooltips" href="../"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                            <li><a class="tooltips" href="#"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                            <li><a class="tooltips" href="../logouts.php"><span>Log out</span><i
                                        class="lnr lnr-power-switch"></i></a></li>
                        </ul>

                    </div>

                    <!--//down-->
                    <div class="menu ">

                        <ul id="menu">

                            <li><a href="../"><i class="lnr lnr-user"></i>
                                    <span>Profile</span></a></li>


                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>


        </div>
        <!--// END content-inner-->
    </div>

    <script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({
                "position": "absolute"
            });
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({
                    "position": "relative"
                });
            }, 400);
        }

        toggle = !toggle;
    });
    </script>
    <!--js -->
    <link rel="stylesheet" href="../css/vroom.css">
    <script type="text/javascript" src="../js/vroom.js"></script>
    <script type="text/javascript" src="../js/TweenLite.min.js"></script>
    <script type="text/javascript" src="../js/CSSPlugin.min.js"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <script src="../js/scripts.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>


</body>

</html>