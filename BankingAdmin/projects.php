﻿<?php 
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
        <title>Projects - Banking system </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Summernote CSS -->
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">
		
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
            <h3 class="page-title">Banking Projects</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Projects</li>
            </ul>
        </div>
        <div class="col-auto float-right ml-auto">
            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> New Banking Project</a>
            <div class="view-icons">
                <a href="projects.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                <a href="project-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->

<!-- Search Filter -->
<div class="row filter-row">
    <div class="col-sm-6 col-md-3">  
        <div class="form-group form-focus">
            <input type="text" class="form-control floating">
            <label class="focus-label">Project ID / Name</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="form-group form-focus">
            <input type="text" class="form-control floating">
            <label class="focus-label">Client Name</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3"> 
        <div class="form-group form-focus select-focus">
            <select class="select floating"> 
                <option>Select Role</option>
                <option>Account Manager</option>
                <option>Loan Officer</option>
                <option>Investment Advisor</option>
                <option>Financial Analyst</option>
            </select>
            <label class="focus-label">Assigned Role</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <a href="#" class="btn btn-success btn-block"> Search </a>  
    </div>     
</div>

					<!-- Search Filter -->
					
					<div class="row">
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>


									<h4 class="project-title"><a href="project-view.php">Loan Application Management</a></h4>
<small class="block text-ellipsis m-b-15">
    <span class="text-xs">5</span> <span class="text-muted">open tasks, </span>
    <span class="text-xs">20</span> <span class="text-muted">tasks completed</span>
</small>
<p class="text-muted">Managing and processing loan applications, from submission to approval, ensuring compliance and verification...</p>
<div class="pro-deadline m-b-15">
    <div class="sub-title">
        Deadline:
    </div>
    <div class="text-muted">
        15 Dec 2024
    </div>
</div>


									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>


									<h4 class="project-title"><a href="project-view.php">Customer Account Onboarding</a></h4>
<small class="block text-ellipsis m-b-15">
    <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
    <span class="text-xs">8</span> <span class="text-muted">tasks completed</span>
</small>
<p class="text-muted">Streamlining the process for onboarding new customers, including account setup, verification, and digital identity...</p>
<div class="pro-deadline m-b-15">
    <div class="sub-title">
        Deadline:
    </div>
    <div class="text-muted">
        20 Nov 2024
    </div>
</div>


									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>


									<h4 class="project-title"><a href="project-view.php">Investment Portfolio Development</a></h4>
<small class="block text-ellipsis m-b-15">
    <span class="text-xs">7</span> <span class="text-muted">open tasks, </span>
    <span class="text-xs">15</span> <span class="text-muted">tasks completed</span>
</small>
<p class="text-muted">Building and managing investment portfolios for clients, aligning with financial goals and market trends...</p>
<div class="pro-deadline m-b-15">
    <div class="sub-title">
        Deadline:
    </div>
    <div class="text-muted">
        30 Nov 2024
    </div>
</div>

									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>


									<h4 class="project-title"><a href="project-view.php">Compliance & Risk Assessment</a></h4>
<small class="block text-ellipsis m-b-15">
    <span class="text-xs">9</span> <span class="text-muted">open tasks, </span>
    <span class="text-xs">6</span> <span class="text-muted">tasks completed</span>
</small>
<p class="text-muted">Ensuring all banking projects comply with regulatory standards and conducting risk assessments for mitigation...</p>
<div class="pro-deadline m-b-15">
    <div class="sub-title">
        Deadline:
    </div>
    <div class="text-muted">
        10 Jan 2025
    </div>
</div>

									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Create Project Modal -->
				<?php include_once("includes/modals/projects/add.php");?>
				<!-- /Create Project Modal -->
				
				<!-- Edit Project Modal -->
				<?php include_once("includes/modals/projects/edit.php"); ?>
				<!-- /Edit Project Modal -->
				
				<!-- Delete Project Modal -->
				<?php include_once("includes/modals/projects/delete.php"); ?>
				<!-- /Delete Project Modal -->
				
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
		
		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
    </body></html>