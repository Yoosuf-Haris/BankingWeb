<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Employee Dashboard - Banking system </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Loader -->
			<div id="loader-wrapper">
				<div id="loader">
					<div class="loader-ellips">
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					</div>
				</div>
			</div>
			<!-- /Loader -->
		
			<!-- Header -->
            <?php include_once("includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			

			<!-- Page Content -->
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="welcome-box">
                <div class="welcome-img">
                    <img alt="" src="profiles/Nuzkiya.jpg">
                </div>
                <div class="welcome-det">
                    <h3>Welcome, Nuzkiya</h3>
                    <p><?php echo date('l, d F Y'); ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- Main Dashboard Content -->
        <div class="col-lg-8 col-md-8">
            <!-- Today's Alerts Section -->
            <section class="dash-section">
                <h1 class="dash-sec-title">Today's Alerts</h1>
                <div class="dash-sec-content">
                    <div class="dash-info-list">
                        <a href="#" class="dash-card text-danger">
                            <div class="dash-card-container">
                                <div class="dash-card-icon">
                                    <i class="fa fa-exclamation-circle"></i>
                                </div>
                                <div class="dash-card-content">
                                    <p>New transaction requires your approval</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="dash-info-list">
                        <a href="#" class="dash-card">
                            <div class="dash-card-container">
                                <div class="dash-card-icon">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="dash-card-content">
                                    <p>RFID Access: Login detected from a new device</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Tomorrow's Section -->
            <section class="dash-section">
                <h1 class="dash-sec-title">Tomorrow</h1>
                <div class="dash-sec-content">
                    <div class="dash-info-list">
                        <div class="dash-card">
                            <div class="dash-card-container">
                                <div class="dash-card-icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="dash-card-content">
                                    <p>Scheduled system maintenance at 1:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Next 7 Days Section -->
            <section class="dash-section">
                <h1 class="dash-sec-title">Next Seven Days</h1>
                <div class="dash-sec-content">
                    <div class="dash-info-list">
                        <div class="dash-card">
                            <div class="dash-card-container">
                                <div class="dash-card-icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="dash-card-content">
                                    <p>Account audit scheduled on Friday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dash-info-list">
                        <a href="#" class="dash-card">
                            <div class="dash-card-container">
                                <div class="dash-card-icon">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="dash-card-content">
                                    <p>System upgrade on Monday</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar Content -->
        <div class="col-lg-4 col-md-4">
            <div class="dash-sidebar">
                <!-- Account Overview Section -->
                <section>
                    <h5 class="dash-title">Account Overview</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="time-list">
                                <div class="dash-stats-list">
                                    <h4>Rs.<?php echo number_format($accountBalance, 2); ?></h4>
                                    <p>Current Balance</p>
                                </div>
                                <div class="dash-stats-list">
                                    <h4><?php echo $recentTransactions; ?></h4>
                                    <p>Recent Transactions</p>
                                </div>
                            </div>
                            <div class="request-btn">
                                <a class="btn btn-primary" href="#">View Statement</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Transaction Alerts Section -->
                <section>
                    <h5 class="dash-title">Pending Approvals</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="time-list">
                                <div class="dash-stats-list">
                                    <h4><?php echo $pendingApprovals; ?></h4>
                                    <p>Pending Transactions</p>
                                </div>
                            </div>
                            <div class="request-btn">
                                <a class="btn btn-primary" href="#">Approve Transactions</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Upcoming System Maintenance Section -->
                <section>
                    <h5 class="dash-title">System Maintenance</h5>
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="holiday-title mb-0">Fri, 15 Nov 2024 - Scheduled Maintenance</h4>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>



				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>