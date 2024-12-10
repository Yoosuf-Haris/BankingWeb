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
							
						</div>
					</div>
					<!-- /Page Header -->
					
				
 <!-- Salary Statistics Section -->
<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Total Monthly Salary</h6>
            <h4>Rs.450,000</h4>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Total Overtime Hours</h6>
            <h4>15</h4>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Average Monthly Leave Days</h6>
            <h4>2</h4>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Total Bonuses This Year</h6>
            <h4>Rs.351,000</h4>
        </div>
    </div>
</div>
<!-- /Salary Statistics Section -->

<?php
    $employee_name = "Nifla Nif"; // Specify the employee name

    try {
        // Fetch total approved leaves taken
        $sqlTotalLeaves = "SELECT COUNT(*) as total_leaves 
                           FROM leaves 
                           WHERE Employee = :employee AND status = 'Confirmed'";
        $queryTotalLeaves = $dbh->prepare($sqlTotalLeaves);
        $queryTotalLeaves->bindParam(':employee', $employee_name, PDO::PARAM_STR);
        $queryTotalLeaves->execute();
        $resultTotalLeaves = $queryTotalLeaves->fetch(PDO::FETCH_OBJ);
        $totalLeaves = $resultTotalLeaves->total_leaves ?? 0;

        // Annual Salary Details
        $annualSalary = 550000; // Base annual salary in USD
        $dailySalary = $annualSalary / 30; // Assuming 30 days in a month
        $adjustedSalary = $annualSalary - ($totalLeaves * $dailySalary);

    } catch (Exception $e) {
        // Handle errors (e.g., database issues)
        error_log("Error fetching total leave days: " . $e->getMessage());
        $totalLeaves = 0;
        $adjustedSalary = 0;
    }
?>

<div class="row">
    <!-- Display total approved leaves taken this year -->
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Total Approved Leaves Taken This Year</h6>
            <h4><?php echo htmlspecialchars($totalLeaves); ?> <span>days</span></h4>
        </div>
    </div>
    
    <!-- Display adjusted annual salary -->
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Adjusted Annual Salary (December)</h6>
            <h4>Rs.<?php echo number_format($adjustedSalary, 2); ?></h4>
        </div>
    </div>
</div>






					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Employee ID</th>
            <th>Email Address</th>
            <th>Date Joined</th>
            <th>Position</th>
            <th>Leave Days</th>
            <th>Month</th>
            <th>EPF (Employee) (Rs.)</th>
            <th>EPF (Employer) (Rs.)</th>
            <th>ETF (Rs.)</th>
            <th>Adjusted Salary (Rs.)</th>
            <th>Payslip</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Sample data for each month (last 6 months)
        $months = [
            ["month" => "December", "year" => 2024, "leaveDays" => 2],
            ["month" => "November", "year" => 2024, "leaveDays" => 1],
            ["month" => "October", "year" => 2024, "leaveDays" => 3],
            ["month" => "September", "year" => 2024, "leaveDays" => 0],
            ["month" => "August", "year" => 2024, "leaveDays" => 4],
            ["month" => "July", "year" => 2024, "leaveDays" => 2]
        ];

        $employeeName = "Nifla Nif";
        $employeeID = "6";
        $email = "fathi@example.com";
        $joinDate = "2023-01-15";
        $role = "Accountant";
        $monthlySalary = 400000; // Base salary in Rs.

        // EPF and ETF Contribution Percentages
        $epfEmployeeRate = 0.08; // 8%
        $epfEmployerRate = 0.12; // 12%
        $etfRate = 0.03; // 3%

        // Loop through each month and display salary information
        foreach ($months as $data) {
            $leaveDays = $data['leaveDays'];
            $calculatedSalary = $monthlySalary - ($leaveDays * ($monthlySalary / 30)); // Adjust salary based on leave days
            $epfEmployee = $calculatedSalary * $epfEmployeeRate;
            $epfEmployer = $calculatedSalary * $epfEmployerRate;
            $etf = $calculatedSalary * $etfRate;
        ?>
        <tr>
            <td><?php echo htmlentities($employeeName); ?></td>
            <td><?php echo htmlentities($employeeID); ?></td>
            <td><?php echo htmlentities($email); ?></td>
            <td><?php echo htmlentities($joinDate); ?></td>
            <td><?php echo htmlentities($role); ?></td>
            <td><?php echo htmlentities($leaveDays); ?></td>
            <td><?php echo htmlentities($data['month'] . ' ' . $data['year']); ?></td>
            <td><?php echo number_format($epfEmployee, 2); ?> Rs.</td>
            <td><?php echo number_format($epfEmployer, 2); ?> Rs.</td>
            <td><?php echo number_format($etf, 2); ?> Rs.</td>
            <td><?php echo number_format($calculatedSalary, 2); ?> Rs.</td>
            <td>
                <a href="generate_payslip.php?month=<?php echo $data['month']; ?>&year=<?php echo $data['year']; ?>&employee_id=<?php echo $employeeID; ?>" class="btn btn-sm btn-primary">Download Payslip</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>


							</div>
						</div>
					</div>
                </div>
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