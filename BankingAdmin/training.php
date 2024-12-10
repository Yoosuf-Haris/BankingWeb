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
        <title>Training - Banking system </title>
		
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
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
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
								<h3 class="page-title">Training</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Training</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_training"><i class="fa fa-plus"></i> Add New </a>
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
											<th style="width: 30px;">#</th>
											<th>Training Type</th>
											<th>Trainer</th>
											<th>Employee</th>
											<th>Time Duration</th>
											<th>Description </th>
											<th>Cost </th>
											<th>Status </th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Digital and Online Banking Training</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													<a href="profile.php">Hakim</a>
												</h2>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="Janith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" title="Nimal" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
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
											</td>
											<td>7 May 2019 - 20 May 2019</td>
											<td>Trains employees on digital platforms and online banking to support customers in a tech-driven environment</td>
											<td>Rs.116,820</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Active
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Induction Training</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													<a href="profile.php">Raveen</a>
												</h2>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="Piyumal" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
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
											</td>
											<td>7 May 2020 - 10 Aug 2020</td>
											<td>Introduces new hires to bank policies, culture, and operations, helping them integrate smoothly</td>
											<td>Rs.233,640</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Inactive
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Customer Relationship Management</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													<a href="profile.php">Nipun </a>
												</h2>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="Roy" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
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
											</td>
											<td>7 Jan 2019 - 10 Jan 2019</td>
											<td>Enhances communication and empathy skills to ensure positive customer interactions and service quality</td>
											<td>Rs.100,820</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Active
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Sales and Marketing Training</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													<a href="profile.php">Malith </a>
												</h2>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="Nimshad" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Yoosuf" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
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
											</td>
											<td>10 Oct 2021 - 15 Oct 2021</td>
											<td>Develops skills for promoting banking products and managing customer relationships to boost sales</td>
											<td>Rs.146,025</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Active
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Risk Management Training</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
													<a href="profile.php">Sehas</a>
												</h2>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="Irosha" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
													</li>
													<li>
														<a href="#" title="Rayyan" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
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
											</td>
											<td>7 May 2024 - 10 May 2024</td>
											<td>Trains staff on assessing and managing risks, including credit and operational risks, to maintain financial stability</td>
											<td>Rs.113,422</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Active
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Add Training List Modal -->
				<?php include_once("includes/modals/training/add.php"); ?>
				<!-- /Add Training List Modal -->
				
				<!-- Edit Training List Modal -->
				<?php include_once("includes/modals/training/edit.php"); ?>
				<!-- /Edit Training List Modal -->
				
				<!-- Delete Training List Modal -->
				<?php include_once("includes/modals/training/delete.php"); ?>
				<!-- /Delete Training List Modal -->
			
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>