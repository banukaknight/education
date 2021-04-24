<?php
ob_start();
include "../setting/config.php";
session_start();
if(!$_SESSION['meadmin'])
{
	header("location:index.php");
}
else
{
	$adminname = $_SESSION['meadmin'];
	$meadmin_username = $ravi->meadmin_username($adminname);
	$meadmin_username_display = $meadmin_username->fetch_assoc();
	$meadmin_info= $meadmin_username_display['admin_username']; 
	$t_staff_type = $meadmin_username_display['t_staff_type'];
	$info = $ravi->teacher_info($adminname,$t_staff_type);
	$info_display = $info->fetch_assoc();
	
}
?>
<!--
Initial Template by: W3layouts © 2016
Prior development by: Ravi Khadka © 2018
Capstone development by: Banuka | Checki | Samrin | Sanduni | Kavindu
Capstone for: Lovely Professional University © 2021
Project Guidence: Ms. Sonam Kaler
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Admin ID: <?php echo $meadmin_username_display['admin_username']; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="../css/bootstrap5.min.css" rel="stylesheet" type='text/css' crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/banukacss.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
        type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/amcharts.js"></script>
    <script src="js/serial.js"></script>
    <script src="js/light.js"></script>
    <script src="js/radar.js"></script>
    <link href="css/barChart.css" rel='stylesheet' type='text/css' />
    <link href="css/fabochart.css" rel='stylesheet' type='text/css' />
    <!--clock init-->
    <script src="js/css3clock.js"></script>
    <!--Easy Pie Chart-->
    <!--skycons-icons-->
    <script src="js/skycons.js"></script>

    <script src="js/jquery.easydropdown.js"></script>

    <!--//skycons-icons-->
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


                <?php 
                //-----------------------------------------
				//include SECTIONS CODE
				//or load other modules in this place.... based on button clicks on left navs
				$homepage = "home1";
				if(isset($_GET['at']))
				{
					$homepage = $_GET['at'];
				}
				include $homepage.".php";
                //-----------------------------------------
				?>


                <hr style="height:1em; ">

                <!--footer section start-->
                <footer>
                    <p>
                        <?php $ip = $_SERVER['REMOTE_ADDR'];
					if ($ip != '127.0.0.1'){
					$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                        //code for getting location of user using ip address
					echo "User ID: $meadmin_info | Logged in from: "; 
					echo "$details->city, $details->region, $details->country with IP address: $ip" ;
										}else{
											echo "Admin ID: $meadmin_info";
                                       }
					?>
                        <a class=" btn-danger btn-sm float-right " href="logouts.php"><span> Log out </span><i
                                class="lnr lnr-power-switch"></i></a>
                        <a class=" btn-primary btn-sm float-right " href="../"><span> Home </span><i
                                class="lnr lnr-arrow-left"></i></a>

                    </p>
                </footer>
                <!--footer section end-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            <header class="logo">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span
                        id="logo">
                        <h1><?php echo $info_display['t_username'] ?></h1>
                    </span>
                    <!--<img id="logo" src="" alt="Logo"/>-->
                </a>
            </header>
            <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
            <!--/down-->
            <div class="down"  id="sidebarbg">
                <a href="index.html"><img src="images/admin.jpg"></a>
                <a href="index.php"><span class=" name-caret"><?php echo $info_display['t_fullname']; ?></span></a>
                <p>System Admin</p>
                <ul>
                    <li><a class="tooltips" href="home.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                    <li><a class="tooltips" href="home.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                    <li><a class="tooltips" href="logouts.php"><span>Log out</span><i
                                class="lnr lnr-power-switch"></i></a></li>
                </ul>
            </div>
            <!--//down-->
            <div class="menu">
                <ul id="menu">
                    <li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
                    <li id="menu-academico"><a href="#"><i class="fa fa-user"></i> <span>Students</span> <span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="home.php?at=student-information">View Student
                                    Information</a></li>
                            <li id="menu-academico-boletim"><a href="home.php?at=student-add">Register Student</a></li>
                            <li id="menu-academico-avaliacoes"><a href="home.php?at=student-edit">Edit Students</a></li>

                        </ul>
                    </li>


                    <li id="menu-academico"><a href="#"><i class="fa fa-group"></i> <span>Teachers</span> <span
                                class="fa fa-angle-right" style="float: right"></span></a>

                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="home.php?at=teacher-information">View Teacher
                                    Information</a></li>
                            <li id="menu-academico-boletim"><a href="home.php?at=teacher-add">Add New Teacher</a></li>
                            <li id="menu-academico-avaliacoes"><a href="home.php?at=teacher-edit">Edit Teachers</a></li>

                        </ul>
                    </li>


                    <li id="menu-academico"><a href="#"><i class="fa fa-gears"></i> <span>Other</span> <span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="home.php?at=general-information">Update
                                    Website Information</a></li>
                            <li id="menu-academico-avaliacoes" style="display:none"><a
                                    href="home.php?at=edit-general-information">Edit General Information</a></li>
                                    <li id="menu-academico-avaliacoes"><a href="home.php?at=received_mail">
                                    Received Mail</a></li>
                            <li id="menu-academico-avaliacoes"><a href="home.php?at=news-portal">
                                    News Portal</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
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


    <script>
    //bootstrap validation code -banuka
    (function() {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
    </script>

    <!--js -->
    <link rel="stylesheet" href="css/vroom.css">
    <script type="text/javascript" src="js/vroom.js"></script>
    <script type="text/javascript" src="js/TweenLite.min.js"></script>
    <script type="text/javascript" src="js/CSSPlugin.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/bootstrap5.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>