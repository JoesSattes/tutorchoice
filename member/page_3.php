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
    <link rel="stylesheet" type="text/css" href="assets/css/comment.css">

</head>
<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "354341",
            uid: "fb287109287898a8de4235e9a03482c7",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "hover": {
                            "color": "#CEC5C6"
                        },
                        "color": "#CEC5C6"
                    }
                },
                "label": {
                    "background": "#493C3D"
                },
                "style": "oxygen",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
    
<body class="index-page">
<!-- Navbar -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Menu</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="http://tutor-choice.esy.es/">
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
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/tutorchoice.th/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li>

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
	                <h2>Tutor ฟิสิกส์โกเอก</h2><hr>
				    </div>
<div class="row">
<div class="col-md-6">
    <img style="width: 100%;" class="img-rounded img-responsive img-raised" src="https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/16807677_1344170298982314_7599358949155128525_n.jpg?oh=d03d06ee479ba319dc17c10dbf79d505&oe=59564BF8">
</div>
<div class="col-md-6">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Name</div>
  <div class="panel-body">
    <p>ฟิสิกส์โกเอก</p>
  </div>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Description</div>
  <div class="panel-body">
    <p>สอน ฟิสิกส์</p>
  </div>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Rating</div>
  <div class="panel-body">
    <p><div class="rw-ui-container"></div></p>
  </div>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Link</div>
  <div class="panel-body">

    <a href="http://www.physicskoake.com">http://www.physicskoake.com</a>
  </div>
</div>
</div>
</div>
<hr style="margin-top: 10%;">
<!-- comment -->
<div>
 <div class="fb-comments" data-href="https://www.facebook.com/tutorchoice.th/" data-numposts="5"></div>
</div>
<!-- comment end -->





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
