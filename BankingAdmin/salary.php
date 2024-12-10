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
        <title>Salary - Banking system </title>
		
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
								<h3 class="page-title">Employee Salary</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Salary</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
							</div>
								<button class="btn btn-white" onclick="window.print()"><i class="fa fa-print fa-lg"></i> Print</button>
						</div>
					</div>
					<!-- /Page Header -->
					
				
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Join Date</th>
											<th>Role</th>
											<th>Salary</th>
											<th>Payslip</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													<a href="profile.php">Hakim <span>Accountant</span></a>
												</h2>
											</td>
											<td>FT-0001</td>
											<td>hakim@example.com</td>
											<td>1 Jan 2021</td>
											<td>
												<div class="dropdown">
													<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Accountant </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Manager</a>
														<a class="dropdown-item" href="#">Loan manager</a>
														<a class="dropdown-item" href="#">Foreign accounts creator</a>
														<a class="dropdown-item" href="#">Trainee</a>
														<a class="dropdown-item" href="#">Local accounts creator</a>
														<a class="dropdown-item" href="#">Administrator</a>
													</div>
												</div>
											</td>
											<td>Rs.506,550.679</td>
											<td>   <!-- Attach data to the button for the modal -->
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Hakim"
            data-id="FT-0001"
            data-email="hakim@example.com"
            data-join-date="1 Jan 2021"
            data-role="Accountant"
            data-salary="506,550.679">
            Generate Slip
        </button></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>

										<tr>
    <td>
        <h2 class="table-avatar">
            <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
            <a href="profile.php">Supun <span>Financial Analyst</span></a>
        </h2>
    </td>
    <td>FT-0002</td>
    <td>supun@example.com</td>
    <td>1 Jan 2013</td>
    <td>
        <div class="dropdown">
            <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Financial Analyst</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Manager</a>
                <a class="dropdown-item" href="#">Loan manager</a>
                <a class="dropdown-item" href="#">Foreign accounts creator</a>
                <a class="dropdown-item" href="#">Trainee</a>
                <a class="dropdown-item" href="#">Local accounts creator</a>
                <a class="dropdown-item" href="#">Administrator</a>
            </div>
        </div>
    </td>
    <td>Rs.316,212.114</td>
    <td>
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Supun"
            data-id="FT-0002"
            data-email="supun@example.com"
            data-join-date="1 Jan 2013"
            data-role="Financial Analyst"
            data-salary="316,212.114">
            Generate Slip
        </button>
    </td>
    <td class="text-right">
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <h2 class="table-avatar">
            <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt=""></a>
            <a href="profile.php">Nimal Fernando <span>Loan manager</span></a>
        </h2>
    </td>
    <td>FT-0003</td>
    <td>nimalfernando@example.com</td>
    <td>7 Sep 2015</td>
    <td>
        <div class="dropdown">
            <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Loan manager</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Manager</a>
                <a class="dropdown-item" href="#">Loan manager</a>
                <a class="dropdown-item" href="#">Foreign accounts creator</a>
                <a class="dropdown-item" href="#">Trainee</a>
                <a class="dropdown-item" href="#">Local accounts creator</a>
                <a class="dropdown-item" href="#">Administrator</a>
            </div>
        </div>
    </td>
    <td>Rs.406,186.542</td>
    <td>
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Nimal Fernando"
            data-id="FT-0003"
            data-email="nimalfernando@example.com"
            data-join-date="7 Sep 2015"
            data-role="Loan manager"
            data-salary="406,186.542">
            Generate Slip
        </button>
    </td>
    <td class="text-right">
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <h2 class="table-avatar">
            <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt=""></a>
            <a href="profile.php">Naveen <span>Savings manager</span></a>
        </h2>
    </td>
    <td>FT-0004</td>
    <td>naveen@example.com</td>
    <td>10 Mar 2018</td>
    <td>
        <div class="dropdown">
            <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Savings manager</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Manager</a>
                <a class="dropdown-item" href="#">Loan manager</a>
                <a class="dropdown-item" href="#">Foreign accounts creator</a>
                <a class="dropdown-item" href="#">Trainee</a>
                <a class="dropdown-item" href="#">Local accounts creator</a>
                <a class="dropdown-item" href="#">Administrator</a>
                <a class="dropdown-item" href="#">Savings manager</a>
            </div>
        </div>
    </td>
    <td>Rs.506,379.261</td>
    <td>
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Naveen"
            data-id="FT-0004"
            data-email="naveen@example.com"
            data-join-date="10 Mar 2018"
            data-role="Savings manager"
            data-salary="506,379.261">
            Generate Slip
        </button>
    </td>
    <td class="text-right">
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>


<tr>
	<td>
		<h2 class="table-avatar">
			<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt=""></a>
			<a href="profile.php">Mohommad Nifraz<span>Team Leader</span></a>
		</h2>
	</td>
	<td>FT-0005</td>
	<td>nifraz@example.com</td>
	<td>1 Jan 2013</td>
	<td>
		<div class="dropdown">
			<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Manager</a>
				<a class="dropdown-item" href="#">Loan Manager</a>
				<a class="dropdown-item" href="#">Accounts Manager</a>
				<a class="dropdown-item" href="#">Trainee</a>
				<a class="dropdown-item" href="#">Administrator</a>
			</div>
		</div>
	</td>
	<td>Rs.364,863.037</td>
	<td>
		<button 
			class="btn btn-sm btn-primary generate-slip-btn"
			data-name="Mohommad Nifraz"
			data-id="FT-0005"
			data-email="nifraz@example.com"
			data-join-date="2013-01-01"
			data-role="Team Leader"
			data-salary="364,863.037">
			Generate Slip
		</button>
	</td>
	<td class="text-right">
		<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td>
		<h2 class="table-avatar">
			<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt=""></a>
			<a href="profile.php">Nadun Weerasinghe<span>Financial Analyst</span></a>
		</h2>
	</td>
	<td>FT-0006</td>
	<td>nadun@example.com</td>
	<td>25 Oct 2019</td>
	<td>
		<div class="dropdown">
			<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Financial Analyst</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Manager</a>
				<a class="dropdown-item" href="#">Loan Manager</a>
				<a class="dropdown-item" href="#">Accounts Manager</a>
				<a class="dropdown-item" href="#">Trainee</a>
				<a class="dropdown-item" href="#">Administrator</a>
			</div>
		</div>
	</td>
	<td>Rs.466,685.686</td>
	<td>
		<button 
			class="btn btn-sm btn-primary generate-slip-btn"
			data-name="Nadun Weerasinghe"
			data-id="FT-0006"
			data-email="nadun@example.com"
			data-join-date="2019-10-25"
			data-role="Financial Analyst"
			data-salary="466,685.686">
			Generate Slip
		</button>
	</td>
	<td class="text-right">
		<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td>
		<h2 class="table-avatar">
			<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt=""></a>
			<a href="profile.php">Yoosuf Ahamed<span>Financial Analyst</span></a>
		</h2>
	</td>
	<td>FT-0007</td>
	<td>yoosuf@example.com</td>
	<td>14 Jan 2014</td>
	<td>
		<div class="dropdown">
			<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Financial Analyst</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Manager</a>
				<a class="dropdown-item" href="#">Loan Manager</a>
				<a class="dropdown-item" href="#">Accounts Manager</a>
				<a class="dropdown-item" href="#">Trainee</a>
				<a class="dropdown-item" href="#">Administrator</a>
			</div>
		</div>
	</td>
	<td>Rs.325,817.367</td>
	<td>
		<button 
			class="btn btn-sm btn-primary generate-slip-btn"
			data-name="Yoosuf Ahamed"
			data-id="FT-0007"
			data-email="yoosuf@example.com"
			data-join-date="2014-01-14"
			data-role="Financial Analyst"
			data-salary="325,817.367">
			Generate Slip
		</button>
	</td>
	<td class="text-right">
		<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
			</div>
		</div>
	</td>
</tr>





<tr>
	<td>
		<h2 class="table-avatar">
			<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-01.jpg" alt=""></a>
			<a href="profile.php">Himali Perera <span>Team Leader</span></a>
		</h2>
	</td>
	<td>FT-0008</td>
	<td>himali@example.com</td>
	<td>20 Jun 2017</td>
	<td>
		<div class="dropdown">
			<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Manager</a>
				<a class="dropdown-item" href="#">Loan manager</a>
				<a class="dropdown-item" href="#">Foreign accounts creator</a>
				<a class="dropdown-item" href="#">Trainee</a>
				<a class="dropdown-item" href="#">Local accounts creator</a>
				<a class="dropdown-item" href="#">Administrator</a>
			</div>
		</div>
	</td>
	<td>Rs.524,415.984</td>
	<td>
		<button 
			class="btn btn-sm btn-primary generate-slip-btn"
			data-name="Himali Perera"
			data-id="FT-0008"
			data-email="himali@example.com"
			data-join-date="2017-06-20"
			data-role="Team Leader"
			data-salary="524,415.984">
			Generate Slip
		</button>
	</td>
	<td class="text-right">
		<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td>
		<h2 class="table-avatar">
			<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-16.jpg" alt=""></a>
			<a href="profile.php">Nimshad <span>Team Leader</span></a>
		</h2>
	</td>
	<td>FT-0009</td>
	<td>nimshad@example.com</td>
	<td>29 Jan 2016</td>
	<td>
		<div class="dropdown">
			<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Manager</a>
				<a class="dropdown-item" href="#">Loan manager</a>
				<a class="dropdown-item" href="#">Foreign accounts creator</a>
				<a class="dropdown-item" href="#">Trainee</a>
				<a class="dropdown-item" href="#">Local accounts creator</a>
				<a class="dropdown-item" href="#">Administrator</a>
			</div>
		</div>
	</td>
	<td>Rs.622,388.977</td>
	<td>
		<button 
			class="btn btn-sm btn-primary generate-slip-btn"
			data-name="Nimshad"
			data-id="FT-0009"
			data-email="nimshad@example.com"
			data-join-date="2016-01-29"
			data-role="Team Leader"
			data-salary="622,388.977">
			Generate Slip
		</button>
	</td>
	<td class="text-right">
		<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td>
		<h2 class="table-avatar">
			<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-04.jpg" alt=""></a>
			<a href="profile.php">Shamila Razik <span>Foreign accounts creator</span></a>
		</h2>
	</td>
	<td>FT-0010</td>
	<td>shamila@example.com</td>
	<td>9 Jun 2011</td>
	<td>
		<div class="dropdown">
			<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Foreign accounts creator</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Manager</a>
				<a class="dropdown-item" href="#">Loan manager</a>
				<a class="dropdown-item" href="#">Foreign accounts creator</a>
				<a class="dropdown-item" href="#">Trainee</a>
				<a class="dropdown-item" href="#">Local accounts creator</a>
				<a class="dropdown-item" href="#">Administrator</a>
			</div>
		</div>
	</td>
	<td>Rs.466,685.686</td>
	<td>
		<button 
			class="btn btn-sm btn-primary generate-slip-btn"
			data-name="Shamila Razik"
			data-id="FT-0010"
			data-email="shamila@example.com"
			data-join-date="2011-06-09"
			data-role="Foreign accounts creator"
			data-salary="466,685.686">
			Generate Slip
		</button>
	</td>
	<td class="text-right">
		<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
			</div>
		</div>
	</td>
</tr>


<tr>
    <td>
        <h2 class="table-avatar">
            <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
            <a href="profile.php">Abdul Hakim <span>Trainee</span></a>
        </h2>
    </td>
    <td>FT-00015</td>
    <td>abdul@example.com</td>
    <td>1 Jan 2013</td>
    <td>
        <div class="dropdown">
            <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Trainee</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Manager</a>
                <a class="dropdown-item" href="#">Loan Manager</a>
                <a class="dropdown-item" href="#">Foreign Accounts Creator</a>
                <a class="dropdown-item" href="#">Trainee</a>
                <a class="dropdown-item" href="#">Local Accounts Creator</a>
                <a class="dropdown-item" href="#">Administrator</a>
            </div>
        </div>
    </td>
    <td>Rs.316,562.11</td>
    <td>
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Abdul Hakim"
            data-id="FT-00015"
            data-email="abdul@example.com"
            data-join-date="2013-01-01"
            data-role="Trainee"
            data-salary="316,562.11">
            Generate Slip
        </button>
    </td>
    <td class="text-right">
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>
<tr>
    <td>
        <h2 class="table-avatar">
            <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
            <a href="profile.php">Roy Hakim <span>Loan Manager</span></a>
        </h2>
    </td>
    <td>FT-00014</td>
    <td>roy@example.com</td>
    <td>1 Jan 2013</td>
    <td>
        <div class="dropdown">
            <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Loan Manager</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Manager</a>
                <a class="dropdown-item" href="#">Loan Manager</a>
                <a class="dropdown-item" href="#">Foreign Accounts Creator</a>
                <a class="dropdown-item" href="#">Trainee</a>
                <a class="dropdown-item" href="#">Local Accounts Creator</a>
                <a class="dropdown-item" href="#">Administrator</a>
            </div>
        </div>
    </td>
    <td>Rs.316,400.11</td>
    <td>
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Roy Hakim"
            data-id="FT-00014"
            data-email="roy@example.com"
            data-join-date="2013-01-01"
            data-role="Loan Manager"
            data-salary="316,400.11">
            Generate Slip
        </button>
    </td>
    <td class="text-right">
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>
<tr>
    <td>
        <h2 class="table-avatar">
            <a href="profile.php" class="avatar"><img src="assets/img/profiles/Fathi.jpg" alt=""></a>
            <a href="profile.php">Fathima Nifla <span>Accountant</span></a>
        </h2>
    </td>
    <td>FT-00013</td>
    <td>fathi@example.com</td>
    <td>1 Jan 2013</td>
    <td>
        <div class="dropdown">
            <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Accountant</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Manager</a>
                <a class="dropdown-item" href="#">Loan Manager</a>
                <a class="dropdown-item" href="#">Foreign Accounts Creator</a>
                <a class="dropdown-item" href="#">Trainee</a>
                <a class="dropdown-item" href="#">Local Accounts Creator</a>
                <a class="dropdown-item" href="#">Administrator</a>
            </div>
        </div>
    </td>
    <td>Rs.400,212.11</td>
    <td>
        <button 
            class="btn btn-sm btn-primary generate-slip-btn"
            data-name="Fathima Nifla"
            data-id="FT-00013"
            data-email="fathi@example.com"
            data-join-date="2013-01-01"
            data-role="Accountant"
            data-salary="400,212.11">
            Generate Slip
        </button>
    </td>
    <td class="text-right">
        <div class="dropdown dropdown-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>



										<tr>
											<td><h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/Nuzkiya.jpg" alt=""></a>
													<a href="profile.php">Fathima Nuzkiya<span>Manager</span></a>
												</h2>
											</td>
											<td>FT-00012</td>
											<td>nuzkiya@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Manager </a>
													<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Manager</a>
														<a class="dropdown-item" href="#">Loan manager</a>
														<a class="dropdown-item" href="#">Foreign accounts creator</a>
														<a class="dropdown-item" href="#">Trainee</a>
														<a class="dropdown-item" href="#">Local accounts creator</a>
														<a class="dropdown-item" href="#">Administrator</a>
													</div>
												</div>
											</td>
											<td>Rs.517,212.114</td>
											<td>   <!-- Attach data to the button for the modal -->
											<button 
                    class="btn btn-sm btn-primary generate-slip-btn"
                    data-name="Fathima Nuzkiya"
                    data-id="FT-00012"
                    data-email="nuzkiya@example.com"
                    data-join-date="1 Jan 2013"
                    data-role="Manager"
                    data-salary="517,212.114"
                    data-toggle="modal" 
                    data-target="#generateSlipModal">
                    Generate Slip
                </button></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-03.jpg" alt=""></a>
													<a href="profile.php">Fathima Riska<span>Trainee</span></a>
												</h2>
											</td>
											<td>FT-0011</td>
											<td>riska@example.com</td>
											<td>8 Feb 2013</td>
											<td>
												<div class="dropdown">
													<a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Trainee </a>
													<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Manager</a>
														<a class="dropdown-item" href="#">Loan manager</a>
														<a class="dropdown-item" href="#">Foreign accounts creator</a>
														<a class="dropdown-item" href="#">Trainee</a>
														<a class="dropdown-item" href="#">Local accounts creator</a>
														<a class="dropdown-item" href="#">Administrator</a>
													</div>
												</div>
											</td>
											<td>Rs.736,123.76</td>
											<td>   <!-- Attach data to the button for the modal -->
											<button 
                    class="btn btn-sm btn-primary generate-slip-btn"
                    data-name="Fathima Riska"
                    data-id="FT-0011"
                    data-email="riska@example.com"
                    data-join-date="8 Feb 2013"
                    data-role="Trainee"
                    data-salary="736,123.76"
                    data-toggle="modal" 
                    data-target="#generateSlipModal">
                    Generate Slip
                </button></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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


	<!-- Generate Slip Modal -->
<div id="generateSlipModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Generate Salary Slip</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p><strong>Employee Name:</strong> <span id="modalName"></span></p>
                <p><strong>Employee ID:</strong> <span id="modalID"></span></p>
                <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                <p><strong>Join Date:</strong> <span id="modalJoinDate"></span></p>
                <p><strong>Role:</strong> <span id="modalRole"></span></p>
                <p><strong>Salary:</strong> Rs.<span id="modalSalary"></span></p>
            </div>
            <div class="modal-footer">
                <!-- Replace Pay Now with Download PDF -->
                <button type="button" class="btn btn-success" id="downloadPdf">Download PDF</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Include jsPDF Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script>
// Event listener for Generate Slip buttons
document.querySelectorAll('.generate-slip-btn').forEach(button => {
    button.addEventListener('click', function () {
        // Fetch data attributes from the clicked button
        const name = this.getAttribute('data-name');
        const id = this.getAttribute('data-id');
        const email = this.getAttribute('data-email');
        const joinDate = this.getAttribute('data-join-date');
        const role = this.getAttribute('data-role');
        const salary = this.getAttribute('data-salary');

        // Update modal content
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalID').textContent = id;
        document.getElementById('modalEmail').textContent = email;
        document.getElementById('modalJoinDate').textContent = joinDate;
        document.getElementById('modalRole').textContent = role;
        document.getElementById('modalSalary').textContent = salary;

        // Show the modal
        $('#generateSlipModal').modal('show');
    });
});

// Event listener for Download PDF button
document.getElementById('downloadPdf').addEventListener('click', function () {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Get modal content
    const name = document.getElementById('modalName').textContent;
    const id = document.getElementById('modalID').textContent;
    const email = document.getElementById('modalEmail').textContent;
    const joinDate = document.getElementById('modalJoinDate').textContent;
    const role = document.getElementById('modalRole').textContent;
    const salary = document.getElementById('modalSalary').textContent;

    // Create PDF content
    doc.text('Salary Slip', 105, 20, { align: 'center' });
    doc.text(`Employee Name: ${name}`, 20, 40);
    doc.text(`Employee ID: ${id}`, 20, 50);
    doc.text(`Email: ${email}`, 20, 60);
    doc.text(`Join Date: ${joinDate}`, 20, 70);
    doc.text(`Role: ${role}`, 20, 80);
    doc.text(`Salary: Rs.${salary}`, 20, 90);

    // Save the PDF
    doc.save(`${name}_SalarySlip.pdf`);
});
</script>


				<!-- /Page Content -->
				
				<!-- Add Salary Modal -->
				<?php include_once("includes/modals/salary/add.php"); ?>
				<!-- /Add Salary Modal -->
				
				<!-- Edit Salary Modal -->
				<?php include_once("includes/modals/salary/edit.php"); ?>
				<!-- /Edit Salary Modal -->
				
				<!-- Delete Salary Modal -->
				<?php include_once("includes/modals/salary/delete.php"); ?>
				<!-- /Delete Salary Modal -->
				
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