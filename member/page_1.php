<?php
session_start();

?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Tutor Choice</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/css/font.css">

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Menu</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="http://www.creative-tim.com">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo_tutor2.png" alt="Tutor Choice" rel="tooltip" title="<b>Tutor Choice</b> รวบรวมสถานที่ติวและติวเตอร์ที่น่าสนใจ ทั้งแบบเสียตัง หรือจะติวฟรี ติวดี พร้อมทั้งเทคนิคในการรู้ต่างๆ" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    Tutor Choice
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a >
					Welcome! "
						<?php

echo $_SESSION['abc'];
?>"
					</a>
				</li>
<li><a href="../index.html" target="">
						Log out
					</a></li>
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('pic/011.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>Tutor Choice</h1>
						<h3>Choose | Your | Tutor</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div id="services" class="container-fluid text-center">
	                <h2>Resently</h2>
	                <p>What we have tutor?</p>
		            <div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
									<li class="active">
											<a href="page_8.php" role="tab" data-toggle="tab">
												<img class="subjects" id="math" src="icon/blackboard.png"><br>คณิตศาสตร์
											</a>
										</li>
										<li>
				                            <a href="page_3.php" role="tab" data-toggle="tab"><img class="subjects" id="science" src="icon/microscope.png"><br>วิทยาศาสตร์</a>
				                        </li>
				                        <li>
				                            <a href="page_4.php" role="tab" data-toggle="tab"><img class="subjects" id="language" src="icon/translator.png"><br>ภาษา</a>
				                        </li>
				                        <li>
				                    		<a href="page_5.php" role="tab" data-toggle="tab"><img class="subjects" id="social" src="icon/earth-globe.png"><br>สังคมศึกษา</a>
				                    	</li>
					                    <li>
					                    	<a href="page_6.php" role="tab" data-toggle="tab"><img class="subjects" id="art" src="icon/artist.png"><br>ศิลปะ</a>
					                    </li>
					                    </li>
				                        <li>
				                    		<a href="page_7.php" role="tab" data-toggle="tab"><img class="subjects" id="music" src="icon/violin.png"><br>ดนตรี</a>
				                    	</li>
				                    </ul>
				               </div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
</div>
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Tutor Choice
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                               List Tutor
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                About Team
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2017, Tutorchoiceth
                </div>
            </div>
        </footer>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
