<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['st_user'])
{
	
	header("location:index.php");
}
else
{
	$st_username = $_SESSION['st_user'];
	$st_name = $ravi->student_info_select($st_username);
	$student_display = $st_name->fetch_assoc();

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
    <!--//skycons-icons-->

    <link rel="stylesheet" href="js-calendar/app.css">
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
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo">
                        <h1><?php echo $st_username ?></h1>
                    </span>
                </a>
            </header>
            <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
            <!--/down-->
            <div class="down" id="sidebarbg">
                <?php
				$st_gender = $student_display['st_gender'];
				if($st_gender == 'Male'){
					echo "<img src='images/bk/picm.png'>";
				}else if($st_gender == 'Female'){
					echo "<img src='images/bk/picf.png'>";
				}else{
					echo "<img src='images/bk/pice.png'>";
				}
				
				?>

                <span class=" name-caret"><?php echo $student_display['st_fullname']; ?></span>
                <p>Student</p>
                <ul>
                    <li><a class="tooltips" href="#"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                    <li><a class="tooltips" href="#"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                    <li><a class="tooltips" href="logouts.php"><span>Log out</span><i
                                class="lnr lnr-power-switch"></i></a></li>
                </ul>

            </div>

            <!--//down-->
            <div class="menu ">

                <ul id="menu">
                    <li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
                    <li><a href="home.php?at=assignments"><i class="fa fa-file-text"></i>
                            <span>Assignments</span></a></li>
                    <li><a href="home.php?at=attendence"><i class="fa fa-check-circle"></i>
                            <span>Attendence</span></a></li>
                    <li><span>
                            <div class="dark ">
                                <div class="calendar ">
                                    <div class="calendar-header">
                                        <span class="month-picker" id="month-picker">February</span>
                                        <div class="year-picker">
                                            <span class="year-change" id="prev-year">
                                                <pre><</pre>
                                            </span>
                                            <span id="year">2021</span>
                                            <span class="year-change" id="next-year">
                                                <pre>></pre>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="calendar-body">
                                        <div class="calendar-week-day">
                                            <div>Sun</div>
                                            <div>Mon</div>
                                            <div>Tue</div>
                                            <div>Wed</div>
                                            <div>Thu</div>
                                            <div>Fri</div>
                                            <div>Sat</div>
                                        </div>
                                        <div class="calendar-days"></div>
                                    </div>

                                    <div class="month-list"></div>
                                </div>

                            </div>
                        </span></li>
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
    <script src="js-calendar/app.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/bootstrap5.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>