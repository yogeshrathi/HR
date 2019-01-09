
<? php 

include("connect.php");
?>

<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/lorvens/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014] -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
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
	<!-- /Pre Loader -->
	
	<div class="wrapper">
		
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="icon-container">
                       <img src="images/logo.png" class="logo" alt="logo"></img>
                    </div>
					<ul class="nav justify-content-end">
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
								<h5>HR</h5>
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
					<a href="index.php">
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">
				<!-- Page Title -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="block-title">Welcome HR, Have a Great Day !</h3>
					</div>
				</div>
				<!-- /Page Title -->
					<!-- Widget Item -->
					<div class="row">
					<div class="col-md-6">
					
						<div class="widget-area lorvens-box-shadow color-red">
							<a href="facdet.php">
								<button type="button" class="btn btn-primary btn-lg btn-block">
								<div class="widget-right">
								<h4 class="wiget-title">Faculties</h4>
							</div></button></a>
						</div>
				
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
						<div class="widget-area lorvens-box-shadow color-blue">
							<button type="button" class="btn btn-primary btn-lg btn-block">
							<div class="widget-right">
								<h4 class="wiget-title">Attendance Details</h4>
							</div></button>
						</div>
					
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
						<div class="widget-area lorvens-box-shadow color-blue">
							<button type="button" class="btn btn-primary btn-lg btn-block">
							<div class="widget-right">
								<h4 class="wiget-title">Leave Details</h4>
							</div></button>
						</div>
					
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
						<div class="widget-area lorvens-box-shadow color-blue">
							<button type="button" class="btn btn-primary btn-lg btn-block">
							<div class="widget-right">
								<h4 class="wiget-title">Salary Details</h4>
							</div></button>
						</div>
					
						<div class="widget-area lorvens-box-shadow color-blue">
							<a href="forms.php">
							<button type="button" class="btn btn-primary btn-lg btn-block">
							<div class="widget-right">
								<h4 class="wiget-title">All Forms</h4>
							</div></button></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<!-- Item -->
							<h3 class="widget-title">Pending Requests</h3>
							
							<div class="lorvens-widget mb-3">
								<div id="accordion_light">
									<div class="card">
										<div class="accordion-header" id="heading1">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
												Request From Someone
											</h5>
										</div>
				
										<div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion_light">
											<div class="card-body">
												<small>description</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="heading2">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
												Request From Someone
											</h5>
										</div>
										<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion_light">
											<div class="card-body">
												<small>description</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="heading3">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
												Request From Someone
											</h5>
										</div>
										<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion_light">
											<div class="card-body">
												<small>description</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Item -->
						</div>
					</div>
				</div>
				<!-- /Widget Item -->
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
	<!-- morris charts -->
	<script src="charts/js/raphael-min.js"></script>
	<script src="charts/js/morris.min.js"></script>
	<script src="js/custom-morris.js"></script>
	<!-- jvectormap -->
	<script src="js/jquery-jvectormap.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill.js"></script>
	<script src="js/custom-vector.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>
</html>