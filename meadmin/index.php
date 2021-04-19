<?php 
session_start();
//if(!$_SESSION['meadmin'])
//{
//	header("location:home.php");
//}
 include "../setting/config.php";



if(isset($_POST['admin_signin']))
{
	
	$admin_username = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_password']);
	if($admin_username=="" AND $admin_password=="")
	{
		echo "<script>alert('Enter Your Username & Password');</script>";
	}
	else
	{
		$melogin = $ravi->meadmin_check($admin_username,$admin_password);
		
		if($melogin==1)
		{
		$_SESSION['meadmin'] = 	$admin_username;
			header("location:home.php");
		}else
		{
			echo "<script>alert('Email Or Password does not matched');</script>";
		}
	
	}

	
}

?>
<!--
w3 URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Admin Login</title>
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
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
        type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>

<body>
    <!--/login-->

    <div class="error_page">
        <!--/login-top-->

        <div class="error-top" style="background-image: url('../images/bg/alogin.jpg'); background-size: cover;">

            <h2 class="inner-tittle page">Admin Login</h2>

            <div class="login">
                <h3 class="inner-tittle t-inner" style="text-shadow: 2px 2px 5px white;">Login</h3>

                <form method="post">
                    <input type="text" class="text" name="admin_username" placeholder="Username"
                        value="<?php if(isset($_POST['admin_signin'])){ echo $_POST['admin_username']; } ?>">
                    <input type="password" placeholder="Password" name="admin_password"
                        value="<?php if(isset($_POST['admin_signin'])){ echo $_POST['admin_password']; } ?>">
                    <div class="submit"><input type="submit" value="Login" name="admin_signin"></div>
                    <div class="clearfix"></div>


                </form>
            </div>


        </div>


        <!--//login-top-->
    </div>

    <!--//login-->
    <!--footer section start-->
    <div class="footer">
        <div class="error-btn">
            <a class="read fourth" href="../">Return to Home</a>
        </div>
    </div>
    <!--footer section end-->
    <!--/404-->
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>