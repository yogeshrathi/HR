
<!DOCTYPE html>
<html>
<?php
require_once 'conn.php'; 

?>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>STUDENT DASHBOARD | SRPEC </title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	 <link rel="stylesheet" href="css/font-awesome.min.css">
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
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="lorvens-bg">
			<div class="sidebar-header">
				<a href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a>
				<a href="index.php"><img src="images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="index.php" >
						<span class="ti-home"></span> Dashboard
					</a>
					
				</li>
				<li class="nav-level-one">
					<a href="#nav-activity" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> ACTIVITY
					</a>

					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-activity">
						<li>
							<a href="activty.php">ACTIVITY POINTS</a>
							<a href="participation.php">OTHER EVENTS</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-cerificate" data-toggle="collapse" aria-expanded="false">
						<span class="ti-themify-favicon"></span> CERTIFICATE
					</a>
					<ul class="collapse list-unstyled" id="nav-cerificate">
						<li>
							<a href="#">BONAFIDE</a>
						</li>
						<li>
							<a href="#">CHARACTER</a>
						</li>
						<li>
							<a href="#">EXPERIENCE</a>
						</li>
						<li>
							<a href="#">APPRECIATION</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#nav-details" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-menu-v"></span> DETAILS
					</a>
					<ul class="collapse list-unstyled" id="nav-details">
						<li>
							<a href="forms.php">PERSONAL DETAILS</a>
						</li>
						<li>
							<a href="bank.php">BANK DETAILS</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-forms" data-toggle="collapse" aria-expanded="false">
						<span class="ti-location-pin"></span> FORMS
					</a>
					<ul class="collapse list-unstyled" id="nav-forms">
						<li>
							<a href="#">UNDERTAKING</a>
						</li>
						<li>
							<a href="#">ADDMISSION</a>
						</li>
						<li>
							<a href="#">TRANSPORTATION</a>
						</li>
						<li>
							<a href="#">EXAMINATION</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="studentsubmit.php">
						<span class="ti-layout-media-overlay-alt-2"></span> LEAVE
					</a>
				</li>
				<li>
					<a href="#nav-library" data-toggle="collapse" aria-expanded="false">
						<span class="ti-themify-favicon"></span> LIBRARY
					</a>
					<ul class="collapse list-unstyled" id="nav-library">
						<li>
							<a href="#">SEARCH BOOK</a>
						</li>
						<li>
							<a href="#">ONLINE BOOK ORDER</a>
						</li>
						<li>
							<a href="#">AVAIBILITY</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-notice" data-toggle="collapse" aria-expanded="false">
						<span class="ti-themify-favicon"></span> NOTICE BOARD
					</a>
					<ul class="collapse list-unstyled" id="nav-notice">
						<li>
							<a href="#">TIME TABLE</a>
						</li>
						<li>
							<a href="#">EXAMS</a>
						</li>
						<li>
							<a href="#">EVENTS</a>
						</li>
						<li>
							<a href="#">BATCH</a>
						</li>
					</ul>
				</li>


				<li>
					<a href="#nav-notes" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pie-chart"></span> NOTES AND PRACTICALS
					</a>
					<ul class="collapse list-unstyled" id="nav-notes">
						<li>
							<a href="NOTES.php">NOTES</a>
						</li>
						<li>
							<a href="#">PRACTICALS</a>
						</li>
						<li>
							<a href="#">MID PAPERS</a>
						</li>
						<li>
							<a href="#">PREVIOUS PAPERS</a>
						</li>
						<li>
							<a href="#">ASSIGNMENTS</a>
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
							<div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
													<button type="button" class="btn btn-lo
													rvens lorvens-bg">
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
								<h5>
									
								 	
								 </h5>
								<a class="dropdown-item" href="passreset.php">
									<span class="ti-settings"></span> CHANGE PASSWORD</a>
								<a class="dropdown-item" href="faq.html">
									<span class="ti-help-alt"></span> HELP</a>
								<a class="dropdown-item" href="logout.php">
									<span class="ti-power-off"></span> LOGOUT</a>
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
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">
				<!-- Page Title -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="block-title">Quick Statistics</h3>
					</div>
				</div>
				<!-- /Page Title -->

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-red">
							<div class="widget-left">
								<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Attendance</h4>
								<span class="numeric color-red">83%</span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-blue">
							<div class="widget-left">
						          <i class="fa fa-line-chart" aria-hidden="true"></i>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">SPI</h4>
								<span class="numeric color-blue">
									<?php
									$sq2 = "SELECT SPI FROM studentcomp where ENO= '$id'";
										$result = $conn->query($sq2);
										if ($result->num_rows > 0) {
    									$row = $result->fetch_assoc();
										
								
									$SP = $row['SPI'];
									echo $SP;
								}
									?></span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-green">
							<div class="widget-left">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">BLOCKS</h4>
								<span class="numeric color-green">
									<?php
									$sq3 = "SELECT BACKS FROM studentcomp where ENO= '$id'";
										$result = $conn->query($sq3);
										if ($result->num_rows > 0) {
    									$row = $result->fetch_assoc();
										
								
									$BACK = $row['BACKS'];
									echo $BACK;
								}
								?>
								</span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-yellow">
							<div class="widget-left">
								<i class="fa fa-mortar-board" aria-hidden="true"></i>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Activity Points</h4>
								<span class="numeric color-yellow">
									<?php
									$sq4 = "SELECT TPOINT FROM studentcomp where ENO= '$id'";
										$result = $conn->query($sq4);
										if ($result->num_rows > 0) {
    									$row = $result->fetch_assoc();	
									$POINT = $row['TPOINT'];
									echo $POINT;
								}
								?></span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Projects Year by Year</h3>
							<div id="lineMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Clients Year by Year</h3>
							<div id="barMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Payments</h3>
							
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-sm-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Donut Chart</h3>
							<div id="donutMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
							<div class="widget-area-2 progress-status lorvens-box-shadow">
								<h3 class="widget-title">Project Status</h3>
								<span>Project one</span>
								<div class="progress">
									<div class="progress-bar width-pb10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Two</span>
								<div class="progress">
									<div class="progress-bar bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Three</span>
								<div class="progress">
									<div class="progress-bar bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Four</span>
								<div class="progress">
									<div class="progress-bar bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								
							</div>
						</div>
						<!-- /Widget Item -->
					
				</div>

							<div class="table-div">
								<table class="table table-hover">
									<tr>
										<th>NAME</th>
										<th>MONTH</th>
										<th>SALARY</th>
									</tr>
				<?php
							$sql="SELECT  * FROM `salary` ";
							$res = mysqli_query($conn,$sql);
							$sum = 0;

										while ($row=$res->fetch_assoc()) 
										{     

												$sum=$sum+$row['sal_rec'];
												echo "<tr><td>".$row["name"]."</td><td>".$row["month"]."</td><td>".$row["sal_rec"]."</td>"?></tr>";<?php
	 
								}				 
								?>
</table>
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


<!-- Mirrored from www.konnectplugins.com/lorvens/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 03:50:20 GMT -->
</html>