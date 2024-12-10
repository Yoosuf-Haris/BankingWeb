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
        <title>Timesheet - Banking system </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
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
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Timesheet</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Timesheet</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Date</th>
											<th>Projects</th>
											<th class="text-center">Assigned Hours</th>
											<th class="text-center">Hours</th>
											<th class="d-none d-sm-table-cell">Description</th>
										
										</tr>
									</thead>
									<tbody>
    <?php
        $employeeName = "Nifla Nif";
        $projects = ["Banking App", "Website Redesign", "Backend API", "Mobile App"];
        
        $dates = [
            "2024-11-08", "2024-11-07", "2024-11-06", "2024-11-05", 
            "2024-11-04", "2024-11-03", "2024-11-02", "2024-11-01", 
            "2024-10-31", "2024-10-30"
        ];
        
        foreach ($dates as $date) {
            $project = $projects[array_rand($projects)];
            $assignedHours = rand(6, 8);
            $hours = rand(4, $assignedHours);
            $description = "Worked on $project, completed task updates and bug fixes.";
    ?>
        <tr>
            <td><?php echo htmlentities($employeeName); ?></td>
            <td><?php echo htmlentities($date); ?></td>
            <td><?php echo htmlentities($project); ?></td>
            <td class="text-center"><?php echo htmlentities($assignedHours); ?> hrs</td>
            <td class="text-center"><?php echo htmlentities($hours); ?> hrs</td>
            <td class="d-none d-sm-table-cell"><?php echo htmlentities($description); ?></td>
         
        </tr>
    <?php } ?>
</tbody>


								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Today Work Modal -->
				<?php include_once("includes/modals/timesheet/add_timesheet.php");?>
				<!-- /Add Today Work Modal -->
				
				<!-- Edit Today Work Modal -->
				<?php include_once("includes/modals/timesheet/edit_timesheet.php");?>
				<!-- /Edit Today Work Modal -->
				
				<!-- Delete Today Work Modal -->
				<?php include_once("includes/modals/timesheet/delete_timesheet.php");?>
				<!-- Delete Today Work Modal -->
				
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>