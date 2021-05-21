<!--
Initial Template by: W3layouts © 2016
Initial development by: Ravi Khadka © 2018
Capstone development by: Banuka | Checki | Samrin | Sanduni | Kavindu
Capstone for: Lovely Professional University © 2021
Project Guidence: Ms. Sonam Kaler
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-App - Yudaganawa Vidyalaya</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mo/Yudaganawa Vidyalaya School web application capstone project" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/banukacss.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <!-- <script src="https://kit.fontawesome.com/377c5d37c3.js" crossorigin="anonymous"></script> -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //online-fonts -->
    <!-- other -->
    <link rel="icon" href="./images/bk/logo.png">
</head>

<body>
    <!-- banner -->
    <div class="main_section_agile" id="home"
        style="background-image: url('./images/bk/navbg.jpg'); background-size: cover;">
        <div class="agileits_w3layouts_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.html">
                            <i aria-hidden="true"><img src="./images/bk/logo.png" style="height: 30px;" alt=""></i>
                            Mo/Yudaganawa Vidyalaya</a></h1>

                </div>
                <div class="w3layouts_header_right">


                </div>


                <div class="dropdown" style="float:right; margin-right:2em;">
                    <button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown"
                        style="border-radius: 2em;" id="btn_login"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                        <li class="bg-info"><a href="students/index.php">STUDENT LOGIN</a></li>
                        <li class="bg-light"><a href="meadmin/index.php">ADMIN LOGIN</a></li>
                        <li class="bg-info"><a href="faculty/index.php">FACULTY LOGIN</a></li>
                    </ul>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html" class="effect-3">About Us</a></li>
                            <li><a href="#services" class="effect-3 scroll">Goals</a></li>
                            <li><a href="#team" class="effect-3 scroll">Team</a></li>
                            <li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
                            <li><a href="#news" class="effect-3 scroll">News</a></li>
                            <li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>

                        </ul>
                    </nav>

                </div>
            </nav>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //banner -->

    <!-- about -->
    <div class="about-top" id="about">
        <div class="container">
            <h3 class="w3l-title">About Us <small class="hidemebk">| අපි ගැන | எங்களை பற்றி</small></h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
            </div>

            <div class="col-md-7 wthree-services-bottom-grids">
                <div class="wthree-services-left">
                    <img src="images/ab1.jpg" alt="" style="border-radius:0em 6em;">
                </div>
                <div class="wthree-services-right">
                    <img src="images/ab2.jpg" alt="" style="border-radius:0em 6em;">
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-5 wthree-about-grids">
                <h1>Welcome to Yudaganawa Vidyalaya</h1>
                <span class="hidemebk">
                    <hr>
                    <h3>මො/යුදගනාව විද්‍යාලය, බුත්තල</h3>
                    <h3>மொ/யுதகனாவ வித்தியாலயம்</h3>
                </span>
                <hr>
                <a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
                <a href="#mail" class="trend-w3l scroll"><span>Get In Touch</span></a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="images/about.jpg" alt="">
                    <p>ඌව පළා‍‍තේ, මොණරාගල දිස්ත්‍රික්ක‍‍යේ, ‍බුත්තල ප්‍රාදේශීය ‍ලේකම් ‍කොට්ඨාශයේ, යුධගනාව ග්‍රාම‍‍‍‍‍යේ
                        අප මො/යුදගනාව විද්‍යාලය පිහිටා ඇත.
                        <br>සිසුන් 547 හා ගුරු කාර්ය මණ්ඩලය 33කින් සමන්විත අප පාසලේ 1 සිට 11 ශ්‍රේණිය දක්වා සිසුන්ට
                        ඉගැන්වීම සිදු කෙරේ.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- //about -->
    <!--stats-->
    <div class="stats" id="stats">
        <div class="container">
            <div class="stats-info">
                <div class="col-md-3 col-xs-3 stats-grid slideanim">
                    <i class="fa fa-bank" aria-hidden="true"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='1500' data-max='1958'
                        data-delay='.5' data-increment="1">1958</div>

                    <h4 class="stats-info">FOUNDED IN</h4>
                </div>
                <div class="col-md-3 col-xs-3 stats-grid slideanim">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='11'
                        data-delay='.1' data-increment="1">11</div>

                    <h4 class="stats-info">CLASSES HELD</h4>
                </div>
                <div class="col-md-3 col-xs-3 stats-grid slideanim">
                    <i class="fa fa-group" aria-hidden="true"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='547'
                        data-delay='.1' data-increment="1">547</div>

                    <h4 class="stats-info">STUDENTS ENROLLED</h4>
                </div>
                <div class="col-md-3 col-xs-3 stats-grid slideanim">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='33'
                        data-delay='.1' data-increment="1">33</div>

                    <h4 class="stats-info">CERTIFIED TEACHERS</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//stats-->




    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <h3 class="w3l-title">Our Goals <small class="hidemebk">| අපේ අරමුණු | எங்கள் இலக்குகள்</small></h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-cog fa-spin fa-fw"></i></p>
            </div>
            <div class="services-w3ls-row" style="min-height:20em;">
                <div class="col-xs-4 services-grid agileits-w3layouts">
                    <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                    <h6>Basic Skills</h6>
                    <h5>
                        <ul>
                            <li>Communication Skills</li>
                            <li>Envirionmental Skills</li>
                            <li>Personality Development</li>
                            <li>Work World Preparation</li>
                            <li>Verse and Ethics Skills</li>
                            <li>Sports and Leisure</li>
                            <li>Proficiency in "Learning to Learn"</li>
                        </ul>
                    </h5>
                </div>
                <div class="col-xs-4 services-grid agileits-w3layouts  hidemebk">
                    <h6>මූලික නිපුණතා</h6>
                    <h5>
                        <ul>
                            <li>සන්නිවේදන නුපුණතාව</li>
                            <li>පරිසර නිපුණතාව</li>
                            <li>පෞරුෂත්ව වර්ධනය</li>
                            <li>වැඩ ලෝකයට සූදානම</li>
                            <li>ආයාව සහ ආචාර ධර්මයන්</li>
                            <li>ක්‍රීඩාව සහ විවේකය</li>
                            <li>"ඉගෙනීමට ඉගෙනුම" පිළිබඳ නිපුණතාව</li>
                        </ul>
                    </h5>
                </div>
                <div class="col-xs-4 services-grid agileits-w3layouts  hidemebk">
                    <h6>அடிப்படை திறன்</h6>
                    <h5>
                        <ul>
                            <li>தொடர்பு திறன்</li>
                            <li>ஆர்வமுள்ள திறன்கள்</li>
                            <li>ஆளுமை மேம்பாடு</li>
                            <li>வேலை உலக தயாரிப்பு</li>
                            <li>வசனம் மற்றும் நெறிமுறைகள்</li>
                            <li>விளையாட்டு மற்றும் ஓய்வு</li>
                            <li>"கற்றுக்கொள்ள கற்றுக்கொள்வதில்" தேர்ச்சி</li>
                        </ul>
                    </h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- team -->
    <div class="team-w3l" id="team">
        <div class="container">
            <h3 class="w3l-title">Our Faculty <small class="hidemebk">| අපේ ගුරුවරු | எங்களுடைய ஆசிரியர்கள்</small></h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
            </div>
            <div class="team-w3l-grid">
                <div class="col-md-4 col-xs-4 about-poleft t1">
                    <div class="about_img"><img src="images/t1.jpg" alt="">
                        <h5>Principle</h5>
                        <div class="about_opa">
                            <p>Mr. R.P. Senadheera</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 about-poleft t2">
                    <div class="about_img"><img src="images/t2.jpg" alt="">
                        <h5>Vice Principle</h5>
                        <div class="about_opa">
                            <p>Ms. R.M. Dayawathi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 about-poleft t3">
                    <div class="about_img"><img src="images/t3.jpg" alt="">
                        <h5>Faculty</h5>
                        <div class="about_opa">
                            <ul class="fb_icons2 text-center">
                                <li>Hon. W. Sudhamma Thero</li>
                                <li>Mr. H.M Wasantha Wijesuriya</li>
                                <li>Mr. K.H.W.M. Malindha Udayakumara</li>
                                <li>Ms. A.K.G.P.C. Malkanthi</li>
                                <li>Ms. A.P.R. Sajeevani</li>
                                <li>Ms. S.M. Premalatha</li>
                                <li>Ms. W.M.D. Samanlatha</li>
                                <li>Mr. R.T. Liyanagamage</li>
                                <li>Ms. S.H. Siriyawathi</li>
                                <li>Ms. Chandani Jayalath</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //team -->

    <!-- Gallery -->
    <div class="mygallery">
        <section class="portfolio-w3ls" id="gallery">
            <h3 class="w3l-title">Our Gallery <small class="hidemebk">| අපේ ඡායාරූප | எங்களுடைய புகைப்படங்கள்</small>
            </h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g7.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g11.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g8.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g4.jpg" class="swipebox"><img src="images/g11.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                <a href="images/g12.jpg" class="swipebox"><img src="images/g12.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>view</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </section>
    </div>
    <!-- //gallery -->

    <!-- contact -->
    <?php
    include "setting/config.php"; //import backend php code

    //handle contact form
    if (isset($_POST['btn_send'])) {
        $cn_name = $_POST['cn_name'];
        $cn_name = ucwords( trim( $cn_name )); //trim & capitalize
        $cn_email = $_POST['cn_email'];
        $cn_phone = $_POST['cn_phone'];
        $cn_phone = preg_replace("/[^0-9]/", '', $cn_phone); //remove non-alphabet char
        $cn_subject = $_POST['cn_subject'];
        $cn_msg = $_POST['cn_msg'];
    
        if($cn_name=="" or $cn_email=="" or $cn_phone=="" or $cn_subject=="" or $cn_msg=="" )
        {
           $ravi->alert_danger("Please fill all fields accurately!");
        }
        else
        {
            $contactus_done = $ravi->set_contact_us($cn_name,$cn_email,$cn_phone,$cn_subject,$cn_msg);
            if($contactus_done==true){
                $ravi->alert_success("Message Sent!");
            }else{
                $ravi->alert_danger("Message Not Sent!");
            }
            
        }
    }


    //extract general info from db
	$general = $ravi->general_setting_check();
	
	$general_fetch = $general->fetch_assoc();
	$general_numss = $general->num_rows;
	if($general_numss>0)
	{
	?>

    <!-- news -->
    <div class="news" id="news">
        <br>
        <?php 
	    
        $got_news = $ravi->get_news('Public');
        if( $got_news->num_rows>0){ ?>
        <div class="container">
            <h3 class="w3l-title">News & Updates <small class="hidemebk">| පුවත් | புதுப்பிப்புகள்</small></h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-bullhorn"></i> </p>
            </div>

            <div class="team-w3l-grid">

                <?php while($news_item = $got_news->fetch_assoc())	{   ?>
                <div class="col-md-4 col-xs-4 about-poleft t1">
                    <div class="about_img"><img src="News-Img/<?php echo $news_item['n_image']; ?>" alt="">
                        <h5><?php echo $news_item['n_head']; ?></h5>
                        <div class="about_opa">
                            <ul>
                                <li><?php echo $news_item['n_details']; ?></li>
                                <li>Published by:
                                    <?php echo $news_item['n_author'] ." <br>on: ". $news_item['n_date']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <?php } ?>

                <div class="clearfix"> </div>
            </div>
            <br>

            <div class="team-w3l-grid">
                <div class="col-sm-4 ">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-a84416d8-b39f-4600-b352-7f523ea380d5"></div>
                </div>
                <div class="col-sm-8 ">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-48a863c3-e775-4913-8ab8-2f097d382ca5"></div>
                </div>
            </div>


        </div>
        <?php } ?>
    </div>
    <!-- //news -->



    <div id="mail" class="contact">
        <div class="container">
            <h3 class="w3l-title">Contact Us <small class="hidemebk">| අප හා සම්බන්ධ වන්න | தொடர்பு கொள்ள</small></h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-phone" aria-hidden="true"></i></p>
            </div>
            <div class="agile_banner_bottom_grids">
                <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
                    <div class="agile_contact_grid_left">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="agile_contact_grid_right agilew3_contact">
                        <h4>Address</h4>
                        <p><?php echo $general_fetch['website_address']; ?></p>

                    </div>
                </div>
                <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
                    <div class="agile_contact_grid_left agileits_w3layouts_left">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="agile_contact_grid_right agileits_w3layouts_right">
                        <h4>Phone</h4>
                        <p><?php echo $general_fetch['website_phone1']; ?>
                            <span><?php echo $general_fetch['website_phone2']; ?></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
                    <div class="agile_contact_grid_left agileits_w3layouts_left1">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="agile_contact_grid_right agileits_w3layouts_right1">
                        <h4>Email</h4>
                        <p><a
                                href="mailto: <?php echo $general_fetch['website_email1']; ?>"><?php echo $general_fetch['website_email1']; ?></a>
                            <span><a
                                    href="mailto: <?php echo $general_fetch['website_email2']; ?>"><?php echo $general_fetch['website_email2']; ?></a></span>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3l-form">
                <h3 class="w3l-title">Write to us <small class="hidemebk">| අපට ලියන්න | எங்களுக்கு எழுதுங்கள்</small>
                </h3>
                <div class="w3layouts_header">
                    <p><i class="fa fa-commenting" aria-hidden="true"></i></p>
                </div>
                <div class="contact-grid1">
                    <div class="contact-top1"
                        style="background-image: url('./images/bk/contactbg.jpg'); background-size: cover;">
                        <form action="#" method="post">
                            <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                                <label>Name*</label>
                                <input type="text" name="cn_name" placeholder="Name" required="" maxlength="50">
                                <label>E-mail*</label>
                                <input type="email" name="cn_email" placeholder="E-mail" required="" maxlength="50">
                            </div>
                            <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                                <label>Phone Number*</label>
                                <input type="text" name="cn_phone" placeholder="Phone Number" required=""
                                    pattern="^[0-9]{1,12}$" title="Enter Number under 12 length">
                                <label>Subject*</label>
                                <input type="text" name="cn_subject" placeholder="Subject" required="" maxlength="30"
                                    pattern="^[A-Za-z ,-.'@]{1,30}$" title="Special Characters Not Allowed">
                            </div>
                            <div class="form-group">
                                <label>Message*</label>
                                <textarea placeholder="Message" name="cn_msg" required=""
                                    pattern="^[A-Za-z ,-.'!£$%&?@#]{1,100}$"
                                    title="Special Characters Not Allowed"></textarea>
                            </div>
                            <input type="submit" name="btn_send" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- map-code -->
    <div>
        <div class="container">
            <h3 class="w3l-title">Map <small class="hidemebk">| සිතියම | வரைபடம்</small></h3>
            <div class="w3layouts_header">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
            </div>
            <div class="col-12 map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.579419245478!2d81.231447327707!3d6.752182739885466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed2b592735868f4a!2sYudaganawa%20Vidyalaya!5e0!3m2!1sen!2slk!4v1617245354335!5m2!1sen!2slk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>

            <div class="clearfix"> </div>
        </div>
    </div>


    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="wthree_footer_grid_left">
                <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
                    <h4>About Us</h4>
                    <p><?php echo $general_fetch['web_about']; ?></p>
                </div>
                <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
                    <h4>Navigation</h4>
                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">About Us</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services"
                                class="scroll">Goals</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#team"
                                class="scroll">Team</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery"
                                class="scroll">Gallery</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#news"
                                class="scroll">News</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail"
                                class="scroll">Mail Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
                    <h4>Others</h4>
                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-3 wthree_footer_grid_left1  w3l-3">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                href="mailto: <?php echo $general_fetch['website_email1']; ?>"><?php echo $general_fetch['website_email1']; ?></a>
                        </li>
                        <li><i class="fa fa-phone"
                                aria-hidden="true"></i><?php echo $general_fetch['website_phone1']; ?></li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $general_fetch['website_address']; ?>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="custom_copy_right">
        <div class="container">
            <p>© 2021 Developed by <a href="https://w3layouts.com/education/" title="Prior development by: Ravi Khadka">
                    W3layouts</a> | <big>Students
                    of <a href="https://www.lpu.in/"
                        title="Capstone development by: Banuka | Checki | Samrin | Sanduni | Kavindu">Lovely
                        Professional University</a></big></p>
        </div>
    </div>

    <?php } ?>
    <!-- //footer -->

    <!-- js-scripts -->
    <!-- js-files -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js-files -->
    <!-- Baneer-js -->


    <!-- smooth scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth scrolling -->
    <!-- stats -->
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>
    <!-- //stats -->
    <!-- moving-top scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0.9;">
        </span></a>
    <!-- //moving-top scrolling -->
    <!-- gallery popup -->
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
    </script>
    <!-- //gallery popup -->
    <!--/script-->
    <script src="js/simplePlayer.js"></script>
    <script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
    </script>
    <!-- //Baneer-js -->
    <!-- Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
    <!-- //Calendar -->
    <!-- //js-scripts -->
</body>

</html>