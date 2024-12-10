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
        <title>Client Profile - Banking system </title>
		
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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="">
													<img src="assets/img/profiles/avatar-19.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0">Global Technologies</h3>
														<h5 class="company-role m-t-0 mb-0">Barry Cuda</h5>
														<small class="text-muted">CEO</small>
														<div class="staff-id">Employee ID : CLT-0001</div>
														<div class="staff-msg"><a href="#" class="btn btn-custom">Send Message</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href="">9876543210</a></span>
														</li>
														<li>
															<span class="title">Email:</span>
															<span class="text"><a href="">barrycuda@example.com</a></span>
														</li>
														<li>
															<span class="title">Birthday:</span>
															<span class="text">2nd August</span>
														</li>
														<li>
															<span class="title">Address:</span>
															<span class="text">5754 Airport Rd, Coosada, AL, 36020</span>
														</li>
														<li>
															<span class="title">Gender:</span>
															<span class="text">Male</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item col-sm-3"><a class="nav-link active" data-toggle="tab" href="#myprojects">Projects</a></li>
									<li class="nav-item col-sm-3"><a class="nav-link" data-toggle="tab" href="#tasks">Tasks</a></li>
								</ul>
							</div>
						</div>
					</div>

                    <div class="row">
                        <div class="col-lg-12"> 
							<div class="tab-content profile-tab-content">
								
								<!-- Projects Tab -->
								
							<!-- Task Tab -->
<div id="tasks" class="tab-pane fade">
    <div class="project-task">
        <ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
            <li class="nav-item"><a class="nav-link active" href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
            <li class="nav-item"><a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
            <li class="nav-item"><a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="all_tasks">
                <div class="task-wrapper">
                    <div class="task-list-container">
                        <div class="task-list-body">
                            <ul id="task-list">
                                <li class="task">
                                    <div class="task-container">
                                        <span class="task-action-btn task-check">
                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                <i class="material-icons">check</i>
                                            </span>
                                        </span>
                                        <span class="task-label" contenteditable="true">Approve Loan Application</span>
                                        <span class="task-action-btn task-btn-right">
                                            <span class="action-circle large" title="Assign">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="task">
                                    <div class="task-container">
                                        <span class="task-action-btn task-check">
                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                <i class="material-icons">check</i>
                                            </span>
                                        </span>
                                        <span class="task-label" contenteditable="true">Open New Account</span>
                                        <span class="task-action-btn task-btn-right">
                                            <span class="action-circle large" title="Assign">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="completed task">
                                    <div class="task-container">
                                        <span class="task-action-btn task-check">
                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                <i class="material-icons">check</i>
                                            </span>
                                        </span>
                                        <span class="task-label">Update Interest Rates</span>
                                        <span class="task-action-btn task-btn-right">
                                            <span class="action-circle large" title="Assign">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="task">
                                    <div class="task-container">
                                        <span class="task-action-btn task-check">
                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                <i class="material-icons">check</i>
                                            </span>
                                        </span>
                                        <span class="task-label" contenteditable="true">Process Wire Transfer</span>
                                        <span class="task-action-btn task-btn-right">
                                            <span class="action-circle large" title="Assign">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="task">
                                    <div class="task-container">
                                        <span class="task-action-btn task-check">
                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                <i class="material-icons">check</i>
                                            </span>
                                        </span>
                                        <span class="task-label" contenteditable="true">Review Account Activity</span>
                                        <span class="task-action-btn task-btn-right">
                                            <span class="action-circle large" title="Assign">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="task">
                                    <div class="task-container">
                                        <span class="task-action-btn task-check">
                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                <i class="material-icons">check</i>
                                            </span>
                                        </span>
                                        <span class="task-label" contenteditable="true">Resolve Customer Complaint</span>
                                        <span class="task-action-btn task-btn-right">
                                            <span class="action-circle large" title="Assign">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="task-list-footer">
                            <div class="new-task-wrapper">
                                <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                                <span class="error-message hidden">You need to enter a task first</span>
                                <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                <span class="btn" id="close-task-panel">Close</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="pending_tasks"></div>
            <div class="tab-pane" id="completed_tasks"></div>
        </div>
    </div>
</div>
<!-- /Task Tab -->

								
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
            </div>
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
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>