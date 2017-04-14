<?php
session_start();

?>
<!doctype html>
<html lang="th">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo_tutor2.png">
	<link rel="icon" type="image/png" href="assets/img/logo_tutor2.png">
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
	    	<a href="../index.html">
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
?>"</a>
				</li>
<li>
                    <a href="../index.html" target="">
                        Log out
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
	                <h2>Resently</h2>
	                <p>What we have tutor?</p>
		            <div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
									<li class="active">
											<a href="#math_p" role="tab" data-toggle="tab">
												<img class="subjects" id="math" src="icon/blackboard.png"><br>คณิตศาสตร์
											</a>
										</li>
										<li>
				                            <a href="#science_p" role="tab" data-toggle="tab"><img class="subjects" id="science" src="icon/microscope.png"><br>วิทยาศาสตร์</a>
				                        </li>
				                        <li>
				                            <a href="#language_p" role="tab" data-toggle="tab"><img class="subjects" id="language" src="icon/translator.png"><br>ภาษา</a>
				                        </li>
				                        <li>
				                    		<a href="#social_p" role="tab" data-toggle="tab"><img class="subjects" id="social" src="icon/earth-globe.png"><br>สังคมศึกษา</a>
				                    	</li>
					                    <li>
					                    	<a href="#art_p" role="tab" data-toggle="tab"><img class="subjects" id="art" src="icon/artist.png"><br>ศิลปะ</a>
					                    </li>
					                    </li>
				                        <li>
				                    		<a href="#music_p" role="tab" data-toggle="tab"><img class="subjects" id="music" src="icon/violin.png"><br>ดนตรี</a>
				                    	</li>
				                    </ul>

                                    <hr>

                                    <div class="tab-content gallery">
                                        <div class="tab-pane active" id="math_p">
                                            <div class="row">

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://scontent.fbkk1-1.fna.fbcdn.net/v/t31.0-8/11147220_1598782423726752_8844416088367289125_o.jpg?oh=23fdc4a7578ec5ab1d8b9645b4efc011&oe=59947593" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>พี่จั๊มพ์ สอนคณิต</p>
                                                            <p><a href="https://www.facebook.com/mathpjump/" class="btn btn-primary" role="button">Choice</a> <a href="page_8.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>


 <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="http://www.tutoroui-plus.com/ouiadmin/photo/35.jpg" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>oui+</p>
                                                            <p><a href="http://www.tutoroui-plus.com/index.php" class="btn btn-primary" role="button">Choice</a> <a href="page_9.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="http://www.trueplookpanya.com/assets/tppy_v1/images/share/header/logo-true.png" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>Trueplookpanya</p>
                                                            <p><a href="http://www.trueplookpanya.com/new/knowledge_list/all-2000/" class="btn btn-primary" role="button">Choice</a> <a href="page_10.php" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://theorendatutor.com/wp-content/uploads/2017/03/TheOrendaTutor-460x460.png" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>Theorendatutor</p>
                                                            <p><a href="https://theorendatutor.com/" class="btn btn-primary" role="button">Choice</a> <a href="page_11.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




                                        <div class="tab-pane text-center" id="science_p">
                                            <div class="row">



                                               



                                               <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/16807677_1344170298982314_7599358949155128525_n.jpg?oh=d03d06ee479ba319dc17c10dbf79d505&oe=59564BF8" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>ฟิสิกส์โกเอก</p>
                                                            <p><a href="http://www.physicskoake.com" class="btn btn-primary" role="button">Choice</a> <a href="page_4.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>



                                               <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="http://www.teamtiwnong.com/images/pr/bn-team-tutor.jpg" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>Teamtiwnong</p>
                                                            <p><a href="http://www.teamtiwnong.com/" class="btn btn-primary" role="button">Choice</a> <a href="page_12.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>



                                               <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://bestkru.com/images/profile_photo_large/6544-QXC663M2.jpg" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>Leungpol สอนพิเศษสถาปัตย์ ย่านรังสิต</p>
                                                            <p><a href="https://bestkru.com/6544" class="btn btn-primary" role="button">Choice</a> <a href="page_13.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>






                                        <div class="tab-pane text-center" id="language_p">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/1545082_701316336579915_1047315695_n.jpg?oh=61d1175a8c79e13df0fc4b83a459c5c2&oe=59979B99" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>TalkAmerican</p>
                                                            <p><a href="https://www.facebook.com/talkamerican/" class="btn btn-primary" role="button">Choice</a> <a href="page_4.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane text-center" id="social_p">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/422392_354320624590881_1503134766_n.jpg?oh=0cc8aa7d36f4909c42652460daa652ba&oe=595D7CC2" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>อ.ต้น บลาบลา</p>
                                                            <p><a href="https://www.facebook.com/%E0%B8%AD%E0%B8%95%E0%B9%89%E0%B8%99-%E0%B8%9A%E0%B8%A5%E0%B8%B2%E0%B8%9A%E0%B8%A5%E0%B8%B2-330579093631701/" class="btn btn-primary" role="button">Choice</a> <a href="page_5.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane text-center" id="art_p">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="https://scontent.fbkk1-1.fna.fbcdn.net/v/t1.0-9/10659333_861024100588515_2663105569015556602_n.jpg?oh=db95297ae6e6a961a3c6461698597dcc&oe=5995B8F4" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p>โรงเรียนสอนศิลปะทอศิลป์</p>
                                                            <p><a href="https://www.facebook.com/fantorsilp/" class="btn btn-primary" role="button">Choice</a> <a href="page_6.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane text-center" id="music_p">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img class="img-rounded img-responsive img-raised" src="http://4.bp.blogspot.com/-wYsAXaQTVwU/VeHl7PLd6SI/AAAAAAAAGsw/3NP8hvRe-2U/s640/11063472_867545686645096_6929592698593716248_n.jpg" alt="...">
                                                        <div class="caption">
                                                            <h3>Tutor</h3>
                                                            <p> ครูซัน มาตีกลองกันเถอะ</p>
                                                            <p><a href="http://xn--12cm4bp6d0ave3e.blogspot.com/" class="btn btn-primary" role="button">Choice</a> <a href="page_7.php" class="btn btn-default" role="button">More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <a href="../index.html">
                                Tutor Choice
                            </a>
                        </li>
                        <li>
                            <a href="page_1.html">
                               List Tutor
                            </a>
                        </li>
                        <li>
                            <a href="page_2.html">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="../team.html">
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
