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
        <title>Employee Profile - Banking system </title>
		
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
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
		
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
												<a href="#"><img alt="" src="profiles/Nuzkiya.jpg"></a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
												<div class="profile-info-left">
        <h3 class="user-name m-t-0 mb-0">Fathima Nuzkiya</h3>
        <h6 class="text-muted">Banking Operations Team</h6>
        <small class="text-muted">Manager</small>
        <div class="staff-id">Employee ID : BK-0002</div>
        <div class="small doj text-muted">Date of Joining : 1st Oct 2011</div>
        
    </div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<div class="title">Phone:</div>
															<div class="text"><a href="">+94728543210</a></div>
														</li>
														<li>
															<div class="title">Email:</div>
															<div class="text"><a href="">nuzkiya@example.com</a></div>
														</li>
														<li>
															<div class="title">Birthday:</div>
															<div class="text">15th Oct</div>
														</li>
														<li>
															<div class="title">Address:</div>
															<div class="text">294/8, 02nd Lane, Kandy, Sri Lanka</div>
														</li>
														<li>
															<div class="title">Gender:</div>
															<div class="text">Female</div>
														</li>
														<li>
															
															  
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
									<li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="tab-content">
					
						<!-- Profile Info Tab -->
						<div id="emp_profile" class="pro-overview tab-pane fade show active">
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
											<ul class="personal-info">
												<li>
													<div class="title">Passport No.</div>
													<div class="text">9876543210</div>
												</li>
												<li>
													<div class="title">Passport Exp Date.</div>
													<div class="text">09/08/2026</div>
												</li>
												<li>
													<div class="title">Tel</div>
													<div class="text"><a href="">+94728543210</a></div>
												</li>
												<li>
													<div class="title">Nationality</div>
													<div class="text">Sri Lankan</div>
												</li>
												<li>
													<div class="title">Religion</div>
													<div class="text">Christian</div>
												</li>
												<li>
													<div class="title">Marital status</div>
													<div class="text">Married</div>
												</li>
												<li>
													<div class="title">Employment of spouse</div>
													<div class="text">No</div>
												</li>
												<li>
													<div class="title">No. of children</div>
													<div class="text">2</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
											<h5 class="section-title">Primary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">John Doe</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Father</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
											</ul>
											<hr>
											<h5 class="section-title">Secondary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">Karen Wills</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Brother</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Bank information</h3>
											<ul class="personal-info">
												<li>
													<div class="title">Bank name</div>
													<div class="text">ICICI Bank</div>
												</li>
												<li>
													<div class="title">Bank account No.</div>
													<div class="text">159843014641</div>
												</li>
												<li>
													<div class="title">IFSC Code</div>
													<div class="text">ICI24504</div>
												</li>
												<li>
													<div class="title">PAN No</div>
													<div class="text">TC000Y56</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
											<div class="table-responsive">
												<table class="table table-nowrap">
													<thead>
														<tr>
															<th>Name</th>
															<th>Relationship</th>
															<th>Date of Birth</th>
															<th>Phone</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Leo</td>
															<td>Brother</td>
															<td>Feb 16th, 2019</td>
															<td>9876543210</td>
															<td class="text-right">
																<div class="dropdown dropdown-action">
																	<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																		<a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
							</div>

							<div class="row">
    <div class="col-md-6 d-flex">
        <div class="card profile-box flex-fill">
            <div class="card-body">
                <h3 class="card-title">Banking Qualifications <a href="#" class="edit-icon" data-toggle="modal" data-target="#qualification_info"><i class="fa fa-pencil"></i></a></h3>
                <div class="qualification-box">
                    <ul class="qualification-list">
                        <li>
                            <div class="qualification-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="qualification-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Banking Certification - ABC Institute</a>
                                    <div>Certified Financial Planner</div>
                                    <span class="time">2015 - 2016</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="qualification-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="qualification-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">MBA in Finance - XYZ University</a>
                                    <div>Master of Business Administration</div>
                                    <span class="time">2012 - 2014</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 d-flex">
        <div class="card profile-box flex-fill">
            <div class="card-body">
                <h3 class="card-title">Banking Experience <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                <div class="experience-box">
                    <ul class="experience-list">
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Branch Manager at Global Bank</a>
                                    <span class="time">Jan 2018 - Present (5 years)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Financial Analyst at ABC Bank</a>
                                    <span class="time">Mar 2014 - Dec 2017 (3 years 9 months)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="experience-user">
                                <div class="before-circle"></div>
                            </div>
                            <div class="experience-content">
                                <div class="timeline-content">
                                    <a href="#/" class="name">Loan Officer at XYZ Financial Services</a>
                                    <span class="time">Jan 2010 - Feb 2014 (4 years 1 month)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



							</div>
						</div>
						<!-- /Profile Info Tab -->
						
					
						
						<!-- Bank Statutory Tab -->
						<div class="tab-pane fade" id="bank_statutory">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title"> Basic Salary Information</h3>
									<form>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select salary basis type</option>
														<option>Hourly</option>
														<option>Daily</option>
														<option>Weekly</option>
														<option>Monthly</option>
													</select>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">$</span>
														</div>
														<input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Payment type</label>
													<select class="select">
														<option>Select payment type</option>
														<option>Bank transfer</option>
														<option>Check</option>
														<option>Cash</option>
													</select>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> PF Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">PF contribution</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">PF No. <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
										</div>
										
										
									</form>
								</div>
							</div>
						</div>
						<!-- /Bank Statutory Tab -->
						
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Profile Modal -->
				<div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Information</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
												<div class="fileupload btn">
													<span class="btn-text">edit</span>
													<input class="upload" type="file">
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" value="John">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" class="form-control" value="Doe">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Birth Date</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" value="05/06/1985">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Gender</label>
														<select class="select form-control">
															<option value="male selected">Male</option>
															<option value="female">Female</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" value="4487 Snowbird Lane">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>State</label>
												<input type="text" class="form-control" value="New York">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Country</label>
												<input type="text" class="form-control" value="United States">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Pin Code</label>
												<input type="text" class="form-control" value="10523">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control" value="631-889-3206">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Department</option>
													<option>Investment Banking</option>
													<option>IT Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Designation <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Designation</option>
													<option>Web Designer</option>
													<option>Financial Analyst</option>
													<option>Android Developer</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Reports To <span class="text-danger">*</span></label>
												<select class="select">
													<option>-</option>
													<option>Wilmer Deluna</option>
													<option>Lesley Grauer</option>
													<option>Jeffery Lalor</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Profile Modal -->
				
				<!-- Personal Info Modal -->
				<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Passport No</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Passport Expiry Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Tel</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Nationality <span class="text-danger">*</span></label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Religion</label>
												<div class="cal-icon">
													<input class="form-control" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Marital status <span class="text-danger">*</span></label>
												<select class="select form-control">
													<option>-</option>
													<option>Single</option>
													<option>Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Employment of spouse</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>No. of children </label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal Info Modal -->
				
				<!-- Family Info Modal -->
				<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Family Informations</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Family Info Modal -->
				
				<!-- Emergency Contact Modal -->
				<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone 2</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone 2</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Emergency Contact Modal -->
				
				<!-- Education Modal -->
				<div id="education_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Education Informations</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Oxford University" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Computer Science" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="BE Computer Science" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Grade A" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Oxford University" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Computer Science" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="BE Computer Science" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Grade A" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Education Modal -->
				
				<!-- Experience Modal -->
				<div id="experience_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Experience Informations</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Digital Devlopment Inc">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="United States">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Financial Analyst">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Digital Devlopment Inc">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="United States">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Financial Analyst">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Experience Modal -->
				
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
		
		<!-- Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>





























