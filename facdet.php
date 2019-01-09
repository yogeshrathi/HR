
<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/lorvens/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Faculties</title>
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
							<a class="nav-link" data-toggle="modal" data-target=".lorvens-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content lorvens-box-shadow">
										<div class="modal-header">
											<h5 class="modal-title">Serach:</h5>
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
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Faculties</li>
			</ol>
		</div>
	</div>
	<form>
		<div class="form-group">
			<span>Search:</span>
			<input type="text" placeholder="Type text here">
			<button type="button" class="btn btn-lorvens lorvens-bg"><span class="ti-location-arrow"></span></button>
		</div>
	</form>
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
	<h4>Faculties</h4>
	<table class="" border="1" width="100%">
		<thead>
			<tr>
				<th><center>ID</center></th>
				<th><center>FIRST NAME</center></th>
				<th><center>MIDDLE NAME</center></th>
				<th><center>LAST NAME</center></th>
				<th><center>DEPARTMENT</center></th>
			</tr>
		</thead>
		
		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cms";

		$conn = mysqli_connect($servername,$username, $password, $dbname);

		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}

		$query = "SELECT * FROM `faculty_t`";
		$result = mysqli_query($conn,$query) or die(mysql_error()); 

	

        if (!$result || mysqli_num_rows($result) > 0) {
                while($row=mysqli_fetch_row($result))
                {  
        		?>
				<tr>
		            <td><?php echo $row['ID']; ?></td> 
		            <td><?php echo $row['fname']; ?></td> 
		            <td><?php echo $row['mname']; ?></td>
		            <td><?php echo $row['lname']; ?></td>
		            <td><?php echo $row['DEPARTMENT']; ?></td> 
		        </tr>
		    <?php

            }
            }
            else
			{
					echo $conn->mysqli_error(); 
			}
            ?>
	</table>
	</div>
	<a id="back-to-top" href="#" class="back-to-top">
			<span class="ti-angle-up"></span>
	</a>
</body>
</html>