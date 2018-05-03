<?php 

include"../connect.php";
session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: sign-in.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>البرخن Admin Panel | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="../user/ckeditor/ckeditor.js"></script>

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
   
		<div class="left-side sticky-left-side">

		<div class="logo">
			
				<h1><a href="index.php"></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php"><i class="lnr lnr-home"></i> </a>
			</div>

			
			<div class="left-side-inner">

				
					<ul class="nav nav-pills nav-stacked custom-nav">
						
						<li class="menu-list"><a href="#"><span>Manage Audio</span></a>
							<ul class="sub-menu-list">
								<li><a href="add-photo.php">New Audio</a> </li>
								<li><a href="all-photos.php">All Audio</a></li>
							</ul>
						</li> 
						<li class="menu-list"><a href="#"><span>Manage Video</span></a>
							<ul class="sub-menu-list">
								<li><a href="add-photo.php">New Video</a> </li>
								<li><a href="all-photos.php">All Video</a></li>
							</ul>
						</li> 
					
						<li class="menu-list"><a href="#"></i> <span>Manage Books</span></a>
							<ul class="sub-menu-list">
								<li><a href="add-book.php">New Book</a> </li>
								<li><a href="#">All Books</a></li>
							</ul>
						</li> 
				
						</div>
		</div>
		
		<div class="main-content">
			
			<div class="header-section">
			 
			
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Al-Burkhan<span>User</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="settings.php"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					       	
					<div class="clearfix"></div>
				</div>
			  </div>
	
		