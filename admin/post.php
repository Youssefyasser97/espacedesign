 <?php
 
 $servername = "localhost";
$username = "indocowo_youssef";
$password = "Admin@123";
$dbname = "indocowo_espace";
$name = $_POST['username'];
$pass = $_POST['pass'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}
if(isset($_POST["insert"])){
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$query = "insert into tbl_images (name) values ('$file');";
}

if(mysqli_query($conn,$query)){
    
    echo '<script>alert("image inserted into db")</script>';
}
 
 
?>


    <!DOCTYPE html>
<html lang="en">
<head>
    
    
    <style>
    
h1,
h2,
h3,
h4,
h5,
h6,
h9 {
	color: #222121;
	margin: 0;
	font-weight: 800;
	font-family: 'Open Sans', sans-serif;
		font-size: 16px;
}
   
   
        
        /* Circle progress */
.circle-progress {
	text-align: center;
	display: block;
	position: relative;
	margin-bottom: 30px;
}

.circle-progress canvas {
	-webkit-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	transform: rotate(90deg);
}

.circle-progress .progress-info {
	position: absolute;
	width: 100%;
	top: 50%;
	margin-top: -45px;
}

.circle-progress .progress-info h2 {
	margin-bottom: 5px;
}

.circle-progress .progress-info p {
	font-size: 14px;
	margin-bottom: 0;
	color: #222121;
	font-weight: 600;
	letter-spacing: 3px;
	text-transform: uppercase;
}

/* Fact box */
.fact-box .fact-content {
	text-align: center;
	position: relative;
}

.fact-box .fact-content:after {
	position: absolute;
	content: '';
	height: 90px;
	width: 2px;
	background: #f3f3f3;
	right: 0;
	top: 30px;
	-webkit-transform: rotate(40deg);
	    -ms-transform: rotate(40deg);
	        transform: rotate(40deg);
	-webkit-transform-origin: center;
	    -ms-transform-origin: center;
	        transform-origin: center;
}

.fact-box .fact-content i {
	color: #d3d3d3;
	font-size: 45px;
	line-height: 45px;
	display: block;
	margin-bottom: 20px;
}

.fact-box .fact-content h2 {
	font-size: 36px;
	margin-bottom: 15px;
}

.fact-box .fact-content p {
	text-transform: uppercase;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: 2px;
	margin-bottom: 0;
}

.fact-box:last-child .fact-content:after {
	display: none;
}

/* Accordion */
.accordion-area .panel {
	margin-bottom: 18px;
}

.accordion-area .panel-header {
	display: block;
	font-weight: 600;
	position: relative;
	border: 2px solid #000;
	-webkit-transition: all 0.4s ease-out 0s;
	-o-transition: all 0.4s ease-out 0s;
	transition: all 0.4s ease-out 0s;
}

.accordion-area .panel-link:after {
	content: "+";
	position: absolute;
	font-size: 18px;
	font-weight: 700;
	right: 25px;
	top: 50%;
	color: #000;
	line-height: 16px;
	margin-top: -8px;
	margin-left: -4px;
}

.accordion-area .panel-header.active .panel-link:after {
	content: "-";
	margin-top: -10px;
}

.accordion-area .panel-header.active .panel-link.collapsed:after {
	content: "+";
}

.accordion-area .panel-link {
	text-align: left;
	background-color: transparent;
	border: none;
	position: relative;
	width: 100%;
	padding: 15px 40px;
	padding-left: 30px;
	font-size: 12px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 600;
}

.accordion-area .panel-body p {
	font-size: 14px;
	margin-bottom: 0;
	padding-top: 25px;
}

.accordion-area .panel-body {
	padding: 0 5px;
}

/* Tab */
.tab-element .nav-tabs {
	border-bottom: 2px solid #222121;
	display: table;
	width: 100%;
	color:#ff0000;
}

.tab-element .nav-tabs .nav-item {
	display: table-cell;
	text-align: center;
}

.tab-element .nav-tabs .nav-item:last-child .nav-link {
	margin-right: 0;
}

.tab-element .nav-tabs .nav-link {
	border: 2px solid #222121;
	margin-right: 10px;
	border-radius: 0;
	font-size: 12px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 600;
	color: #222121;
	padding: 15px 10px;
}

.tab-element .nav-tabs .nav-link.active {
	padding-bottom: 25px;
	border-bottom: none;
	position: relative;
}

.tab-element .nav-tabs .nav-link.active:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 2px;
	background: #fff;
	bottom: -2px;
	left: 0;
}

.tab-element .tab-pane {
	padding-top: 25px;
}

/* Icon Box */
.icon-box {
	margin-bottom: 70px;
}

.icon-box i {
	display: block;
	font-size: 50px;
	color: #d3d3d3;
	margin-bottom: 30px;
}

.icon-box h4 {
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-bottom: 20px;
}


.nav-switch {
	display: none;
}

/*---------------------
	Work nav section
-----------------------*/
.worknav-section {
	padding-top: 90px;
	padding-bottom: 90px;
}

.worknav-section.extra-style {
	background: #f2f7f7;
	padding-top: 150px;
	padding-bottom: 150px;
}

.worknav .wn-thumb {
	width: 165px;
	height: 165px;
	display: inline-block;
	border-radius: 50%;
}

.worknav .wn-info {
	position: relative;
	display: inline-block;
}

.worknav .wn-info span {
	text-transform: uppercase;
	font-size: 12px;
	font-weight: 600;
	color: #868686;
}

.worknav .wn-info h3 {
	font-size: 24px;
	font-weight: 400;
}

.worknav.wn-prev .wn-info {
	top: -50px;
	margin-left: 50px;
}

.worknav.wn-next {
	text-align: right;
}

.worknav.wn-next .wn-thumb {
	float: right;
}

.worknav.wn-next .wn-info {
	top: 65px;
	margin-right: 50px;
}







/*---------------------
	Header section
-----------------------*/
.header-section {
	position: relative;
	width: 100%;
	left: 0;
	top: 0;
	z-index: 111;
	padding-top: 31px;
	/*this part for navbar*/
	padding-bottom: 20px;  
	background-color: rgba(255,255,255,0.1);
}

.site-logo {
    margin-top:-22px;
    color: #fff;
	display: inline-block;
}

.search-top {
	float: right;
	display: inline-block;
	position: relative;
	padding: 14px;
	margin-left: 30px;
}

.search-top .se-btn {
	border: none;
	background: none;
	color: #fff;
}

.search-top input[type='text'] {
	position: absolute;
	right: 5px;
	top: 100%;
	border: none;
	background: rgba(255, 255, 255, 0.17);
	padding: 10px 20px;
	opacity: 0;
	outline: 1px solid #fff;
	outline-offset: 5px;
	margin-top: 5px;
	color: #fff;
	visibility: hidden;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.search-top input[type='text']:focus {
	visibility: visible;
	opacity: 1;
}

.search-top:hover input[type='text'] {
	opacity: 1;
	visibility: visible;
}

.nav-switch {
	display: none;
}

.main-menu {
	float: right;
}

.main-menu ul {
	list-style: none;
}

.main-menu ul li {
	display: inline;
}

.main-menu ul li a {
	display: inline-block;
	text-transform: uppercase;
	font-size: 14px;
	color: #fff;
	padding: 15px;
	margin-right: 10px;
	position: relative;
}

.main-menu ul li a:after {
	position: absolute;
	content: '';
	width: 0;
	height: 0px;  
	/*this one for the line*/
	background: #fff;
	left: 50%;
	top: 26px;
	margin-left: -17px;
	-webkit-transform: rotate(-45deg);
	    -ms-transform: rotate(-45deg);
	        transform: rotate(-45deg);
	opacity: 0;
	-webkit-transform-origin: top center;
	    -ms-transform-origin: top center;
	        transform-origin: top center;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.main-menu ul li a:hover:after {
	opacity: 1;
	width: 34px;
}
    </style>
    
    
    
    
          <style>
    .changecolor{
        color:#838427;
              margin: auto;
  height: 100%;
  /*border: 3px solid #73AD21;*/
  padding: 5px;
	    }
    
        .changecolor:hover{
            color:#F28C28;
            
        }
        
        
        
       
/*---------------------
	Footer section
----------------------*/
.footer-section {
	background: #0d0d0d;
position:relative;
/*top:-5%;*/
/*top: 9%;*/
/*this part for footer position*/
}

.footer-section h2 {
	color: #fff;
	font-weight: 400;
	font-style: italic;
	margin-bottom: 20px;
		font-size: 34px;
}

.footer-section p {
	font-size: 16px;
	color: rgba(255,255,255,0.1);
	margin-bottom: 40px;
		font-family: 'Open Sans', sans-serif;
}

.footer-section .social a {
	color: rgba(255,255,255,0.0);
	margin-right: 40px;
	font-size:0.5px;

}

.footer-section .social a:last-child {
	margin-right: 0;
}












/*---------------------
	Responsive 
-----------------------*/
@media only screen and (max-width: 1650px) {
	.sp-pad {
		padding-left: 90px;
		padding-right: 90px;
	}
	.hero-slider .owl-dots {
		left: 90px;
	}
	.contact-text,
	.services-text {
		left: 80px;
	}
}

@media only screen and (max-width: 1510px) {
	.sp-pad {
		padding-left: 30px;
		padding-right: 30px;
	}
	.breadcrumb-area,
	.hero-slider .owl-dots {
		left: 30px;
	}
	.contact-text,
	.services-text {
		left: 30px;
		width: 350px;
	}
	.service-more-link {
		right: 30px;
	}
	.progress-section .circle-progress:after {
		display: none;
	}
}

@media only screen and (max-width: 1366px) {
	.hs-item {
		min-height: 750px;
	}
	.hs-item2 {
	    		min-height: 750px;

	}
	.single-portfolio {
		height: 400px;
	}
	.portfolio-info {
		width: calc(100% - 40px);
		height: calc(100% - 40px);
		left: 20px;
		top: 20px;
		padding-top: 165px;
		
	}
}

/* Medium screen : 992px. */
@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.contact-text,
	.services-text {
		width: 100%;
		position: relative;
		margin-bottom: 50px;
		left: 0;
	}
	.single-portfolio {
		width: 50%;
	}
	.single-portfolio.sm-wide {
		width: 50%;
	}
	.single-portfolio.sm-wide.md-w-100 {
		width: 100%;
	}
	.single-portfolio .md-w-100 {
		width: 100%;
	}
	.service-more-link {
		right: 0;
		position: relative;
		text-align: center;
	}
	.worknav {
		text-align: center;
	}
	.worknav .wn-thumb,
	.worknav .wn-info {
		display: block;
	}
	.worknav .wn-thumb {
		margin: 0 auto 30px;
	}
	.worknav.wn-prev .wn-info,
	.worknav.wn-next .wn-info {
		top: 0px;
		margin-left: 0px;
		margin-right: 0;
		text-align: center;
	}
	.worknav.wn-next .wn-thumb {
		float: none;
	}
}

/* Tablet :768px. */
@media only screen and (min-width: 768px) and (max-width: 991px) {
	.site-logo {
		padding-top: 0;
	}
	.search-top {
		padding: 8px;
		margin-left: 10px;
	}
	.main-menu ul li a {
		padding: 10px;
		margin-right: 5px;
	}
	.hero-slider .owl-nav {
		right: 50px;
	}
	.hs-item {
		min-height: 650px;
	}
	.hs-item .hs-title {
		font-size: 100px;
		margin-bottom: 20px;
	}
	.hs-item .hs-des {
		font-size: 40px;
	}
	
		.hs-item2 {
		min-height: 650px;
	}
	.hs-item2 .hs-title {
		font-size: 100px;
		margin-bottom: 20px;
	}
	.hs-item2 .hs-des {
		font-size: 40px;
	}
	
	.contact-text,
	.services-text {
		width: 100%;
		position: relative;
		margin-bottom: 50px;
		left: 0;
	}
	.single-portfolio {
		width: 50%;
	}
	.single-portfolio.sm-wide {
		width: 50%;
	}
	.single-portfolio.sm-wide.md-w-100 {
		width: 100%;
	}
	.single-portfolio .md-w-100 {
		width: 100%;
	}
	.fact-box .fact-content {
		margin-bottom: 50px;
	}
	.fact-box .fact-content:after {
		display: none;
	}
	.service-more-link {
		right: 0;
		position: relative;
		text-align: center;
	}
	.worknav {
		text-align: center;
	}
	.worknav .wn-thumb,
	.worknav .wn-info {
		display: block;
	}
	.worknav .wn-thumb {
		margin: 0 auto 30px;
	}
	.worknav.wn-prev .wn-info,
	.worknav.wn-next .wn-info {
		top: 0px;
		margin-left: 0px;
		margin-right: 0;
		text-align: center;
	}
	.worknav.wn-next .wn-thumb {
		float: none;
	}
	.blog-thumb {
		height: 550px;
	}
}

/* Large Mobile :480px. */
@media only screen and (max-width: 767px) {
	.search-top {
		display: none;
	}
	.nav-switch {
		position: absolute;
		right: 20px;
		font-size: 30px;
		color: #000000;
		top: 12px;
		display: block;
	}
	.main-menu {
		display: none;
		float: none;
		position: absolute;
		width: 100%;
		background: #222;
		left: 0;
		top: 100%;
	}
	.main-menu ul li {
		display: block;
	}
	.main-menu ul li a {
		display: block;
		padding: 15px;
		margin-right: 0;
		border-bottom: 1px solid #292929;
	}
	.main-menu ul li a:after {
		left: 35px;
	}
	.hero-slider .owl-nav {
		right: 50px;
	}
	.hs-item {
		min-height: 470px;
	}
	.hs-item .hs-title {
		font-size: 80px;
		margin-bottom: 20px;
	}
	.hs-item .hs-des {
		font-size: 30px;
	}
	
	
	
		.hs-item2 {
		min-height: 470px;
	}
	.hs-item2 .hs-title {
		font-size: 80px;
		margin-bottom: 20px;
	}
	.hs-item2 .hs-des {
		font-size: 30px;
	}
	
	
	
	.sp-pad {
		padding-left: 15px;
		padding-right: 15px;
	}
	.sp-title {
		font-size: 26px;
	}
	.contact-text,
	.services-text {
		width: 100%;
		position: relative;
		margin-bottom: 50px;
		left: 0;
	}
	.single-portfolio {
		width: 100%;
	}
	.single-portfolio.sm-wide {
		width: 100%;
	}
	.single-portfolio.sm-wide.md-w-100 {
		width: 100%;
	}
	.single-portfolio .md-w-100 {
		width: 100%;
	}
	.fact-box .fact-content {
		margin-bottom: 50px;
	}
	.fact-box .fact-content:after {
		display: none;
	}
	.service-more-link {
		right: 0;
		position: relative;
		text-align: center;
	}
	.progress-section {
		padding: 0 15px 100px;
	}
	.worknav {
		text-align: center;
	}
	.worknav .wn-thumb,
	.worknav .wn-info {
		display: block;
	}
	.worknav .wn-thumb h3,
	.worknav .wn-info h3 {
		font-size: 20px;
	}
	.worknav .wn-info h3 {
		font-size: 20px;
	}
	.worknav .wn-thumb {
		width: 100px;
		height: 100px;
		margin: 0 auto 30px;
	}
	.worknav.wn-prev .wn-info,
	.worknav.wn-next .wn-info {
		top: 0px;
		margin-left: 0px;
		margin-right: 0;
		text-align: center;
	}
	.worknav.wn-next .wn-thumb {
		float: none;
	}
	.work-slider .ws-item {
		height: 400px;
	}
	.blog-thumb {
		height: 400px;
	}
}

/* small Mobile :320px. */
@media only screen and (max-width: 479px) {
	.hero-slider .owl-nav {
		right: 20px;
	}
	.hs-item .hs-title {
		font-size: 50px;
		margin-bottom: 20px;
	}
	.hs-item .hs-des {
		font-size: 18px;
	}
	
	
		.hs-item2 .hs-title {
		font-size: 50px;
		margin-bottom: 20px;
	}
	.hs-item2 .hs-des {
		font-size: 18px;
	}
	
	
	
	.sp-pad {
		padding-left: 15px;
		padding-right: 15px;
	}
	.worknav .wn-thumb {
		width: 70px;
		height: 70px;
	}
	.worknav .wn-info h3 {
		font-size: 16px;
	}
	.work-info-list li {
		width: 100%;
	}
	.footer-section h2 {
		font-size: 33px;
	}
}




    </style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projects</title>
		<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="../img/samplelogo.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<meta name="description" content="">
<meta name="author" content="">





	<!-- Favicon -->   
	<link href="../img/samplelogo.png" rel="shortcut icon"/>


	 <!--Stylesheets -->
	<!--<link rel="stylesheet" href="../css/bootstrap.min.css"/>-->
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<!--<link rel="stylesheet" href="../css/owl.carousel.css"/>-->
	<!--<link rel="stylesheet" href="../css/style.css"/>-->






<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="../magnum/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../magnum/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="../magnum/css/style.css">
<link rel="stylesheet" type="text/css" href="../magnum/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="../magnum/css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
	<a href="https://www.yyprojects.online/espacedesign">	 <img class="site-logo" href="contact/" src="../img/samplelogo.png" style="width:10%;height:7%;"></a>
	
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="../index.html"><h9 class="changecolor">Home</h9></a></li>
				<li><a href="../about.html"><h9 class="changecolor">Agence</h9></a></li>
				<li><a href="../portfolio.html"><h9 class="changecolor">Prestation</h9></a></li>
				<li><a href="../contact.html"><h9 class="changecolor">Contact</h9></a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

 <!--Header -->
<!--<header id="header">-->
<!--  <div class="intro">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="intro-text">-->
<!--          <h1>Magnum</h1>-->
<!--          <hr>-->
<!--          <p>Graphic Design • Illustration • Photography</p>-->
<!--          <a href="#about" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</header>-->


<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>MODÉLISATION & DESSIN D'ARCHITECTURE BIM</h2>
      <hr>
    </div>

    <div class="row">
      <div class="portfolio-items">

        <form method="post" enctype="multipart/form-data">
            
        	<input type="file" name="image" id="image"/><br>
        	<input type="submit" name="insert" id="insert" value="insert"/>
        </form>
          
          <br><br>
          
            <?php
            $query = "Select * from tbl_images order by id desc";
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){
                
                echo '<div class="col-sm-6 col-md-3 col-lg-3 graphic">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="image/jpeg;base64,'.base64_encode($row['name']).'" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <!--<h4>Project Title</h4>-->
              </div>
              <img src="data:image/jpeg;base64,'.base64_encode($row['name']).'" class="img-responsive" alt="Project Title"> </a>
              </div>
          </div>
        </div>';
            }
            ?>
  
        
      </div>
    </div>
  </div>
</div>


<!-- Footer section start -->
	<footer class="footer-section spad">
		<div class="container text-center">
			<div class="social">


<br/><br/><p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | E-Space Design  <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
 <!--Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<!--<br><br><br>-->
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
	




<!--<script type="text/javascript" src="../magnum/js/jquery.1.11.1.js"></script> -->
<script type="text/javascript" src="../magnum/js/bootstrap.js"></script> 
<script type="text/javascript" src="../magnum/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="../magnum/js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="../magnum/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="../magnum/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="../magnum/js/contact_me.js"></script> 
<script type="text/javascript" src="../magnum/js/main.js"></script>



	<!--<script src="../js/jquery-3.2.1.min.js"></script>-->
	<script src="../js/bootstrap.min.js"></script>
	<!--<script src="../js/owl.carousel.min.js"></script>-->
	<!--<script src="../js/mixitup.min.js"></script>-->
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>
    
    
    
    
    <script>
        $(document).ready(function(){
            $('#insert').click(function(){
                var image_name = $('#image').val();
                if(image_name == ''){
                    alert("Please select image");
                    return false;
                }
                else{
                    var extension = $('#image').val().split('.').pop().toLowerCase();
                    if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg'])==-1){
                        alert("invalid image type");
                        $('#image').val('');
                        return false;
                    }
                }
            });
        });
        
    </script>
    
    
    
    
    