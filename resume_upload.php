<!DOCTYPE html>
<html>
<?php
require_once 'conn.php'; 

?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lorvens-Bootstrap Admin Dashboard and UI kit</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">

	<script src="js/modernizr.min.js"></script>

</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="lorvens-bg">
			<div class="sidebar-header">
				<a href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a>
				<a href="index.html"><img src="images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li>
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="false">
						<span class="ti-home"></span> Dashboard
					</a>
					<ul class="collapse list-unstyled" id="nav-dashboard">
						<li>
							<a href="index.html">Default</a>
						</li>
					</ul>
				</li>
				<li class="nav-level-one">
					<a href="#nav-uiKit" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> UI Kit
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-uiKit">
						<li>
							<a href="typography.html">Typography</a>
						</li>
						<li>
							<a href="buttons.html">Buttons</a>
						</li>
						<li>
							<a href="cards.html">Cards</a>
						</li>
						<li>
							<a href="tabs.html">Tabs</a>
						</li>
						<li>
							<a href="accordions.html">Accordions</a>
						</li>
						<li>
							<a href="modals.html">Modals</a>
						</li>
						<li>
							<a href="lists.html">Lists &amp; Media Object</a>
						</li>
						<li>
							<a href="grid.html">Grid</a>
						</li>
						<li>
							<a href="progress-bars.html">Progress Bars</a>
						</li>
						<li>
							<a href="notifications-alerts.html">Notifications &amp; Alerts</a>
						</li>
						<li>
							<a href="pagination.html">Pagination</a>
						</li>
						<li>
							<a href="carousel.html">Carousel</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables.html">
						<span class="ti-layout-menu-v"></span> Tables
					</a>
				</li>
				<li>
					<a href="#nav-charts" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pie-chart"></span> Charts
					</a>
					<ul class="collapse list-unstyled" id="nav-charts">
						<li>
							<a href="charts-1.html">Morris</a>
						</li>
						<li>
							<a href="charts-2.html">Flot</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-maps" data-toggle="collapse" aria-expanded="false">
						<span class="ti-location-pin"></span> Maps
					</a>
					<ul class="collapse list-unstyled" id="nav-maps">
						<li>
							<a href="map-1.html">Google Maps</a>
						</li>
						<li>
							<a href="map-2.html">Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="active">
					<a href="forms.html">
						<span class="ti-layout-media-overlay-alt-2"></span> Forms
					</a>
				</li>
				<li>
					<a href="#nav-icons" data-toggle="collapse" aria-expanded="false">
						<span class="ti-themify-favicon"></span> icons
					</a>
					<ul class="collapse list-unstyled" id="nav-icons">
						<li>
							<a href="font-awesome.html">Font Awesome </a>
						</li>
						<li>
							<a href="themify.html">Themify</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
						<span class="ti-file"></span> Other Pages
					</a>
					<ul class="collapse list-unstyled" id="nav-pages">
						<li>
							<a href="login.html">Login </a>
						</li>
						<li>
							<a href="sign-up.html">Sign Up</a>
						</li>
						<li>
							<a href="404.html">404</a>
						</li>
						<li>
							<a href="blank-page.html">Blank Page</a>
						</li>
						<li>
							<a href="pricing.html">Pricing</a>
						</li>
						<li>
							<a href="faq.html">FAQ</a>
						</li>
						<li>
							<a href="invoice.html">Invoice</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="nav-help animated fadeIn">
				<h5>Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +1 1234 567 890</h6>
				<h6>
					<span class="ti-email"></span> email@site.com</h6>
				<p class="copyright-text">Copy rights &copy; 2018</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
				<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<span class="ti-menu" id="sidebarCollapse"></span>
					</div>
					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target=".lorvens-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content lorvens-box-shadow">
										<div class="modal-header">
											<h5 class="modal-title">Serach Client/Project:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens lorvens-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu lorvens-box-shadow notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-comment-alt"></span> New User Registered</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Client asked to send Quotaion</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span> Have schedule meeting today</a>
								<a class="dropdown-item" href="#">
									<span class="ti-comment-alt"></span> New User Registered</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu lorvens-box-shadow profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item active">Forms</li>
			</ol><!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">
				<!-- Page Title -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="block-title">Forms</h3>
					</div>
				</div>
				<!-- /Page Title -->
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<!-- Form It
								em -->
							<h3 class="widget-title">Activity Controls</h3>
							<div class="lorvens-widget">
								<form action="upload.php" method="POST" enctype = "multipart/form-data">
									<div class="form-group">
										<label for="exampleInputEmail1">NAME</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" >
										</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1">DEPARTMENT</label>
										<select class="form-control" id="exampleFormControlSelect1" name="DEPT">
											

											<option value="6">Civil</option>
											<option value="7">Computer</option>
											<option value="19">Mechanical</option>
									
											</select>	

									</div>
									


									
									
									<div class="form-group">
										<label for="exampleInputEmail1">SELECT FILE</label>
										<input type="file" class="form-control"  aria-describedby="emailHelp" name="file" />
										</div>

									
									
									<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						
						
					
		
							</div>
						
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
			<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


</html>