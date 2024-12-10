<?php 
	session_start();
	error_reporting(0);
	include_once('includes/config.php');
	include_once("includes/functions.php");
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}elseif (isset($_GET['delid'])) {
		$rid=intval($_GET['delid']);
		$sql="DELETE from leaves where id=:rid";
		$query=$dbh->prepare($sql);
		$query->bindParam(':rid',$rid,PDO::PARAM_STR);
		$query->execute();
		echo "<script>alert('Employee Leave Has Been Deleted');</script>"; 
		echo "<script>window.location.href ='leaves-employee.php'</script>";
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
	<title>Leaves - Banking system </title>
	
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
							<h3 class="page-title">Leaves</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Leaves</li>
							</ul>
						</div>
					
					</div>

					 <!-- Button for Employee to Apply for Leave -->
					 <a href="includes/modals/employee/leave_apply_form.php" class="btn add-btn" style="margin-right: 10px;">
    <i class="fa fa-plus"></i> Apply for Leave
</a>




				</div>
				<!-- /Page Header -->
				

				
				<!-- Leave Employee Statistics -->
<?php
    $employee_name = "Nifla Nif"; // Specify the employee name

    // Fetch total leaves taken
    $sqlTotalLeaves = "SELECT COUNT(*) as total_leaves FROM leaves WHERE Employee = :employee AND status = 'Confirmed'";
    $queryTotalLeaves = $dbh->prepare($sqlTotalLeaves);
    $queryTotalLeaves->bindParam(':employee', $employee_name, PDO::PARAM_STR);
    $queryTotalLeaves->execute();
    $resultTotalLeaves = $queryTotalLeaves->fetch(PDO::FETCH_OBJ);
    $totalLeaves = $resultTotalLeaves->total_leaves ?? 0;

    // Fetch approved leaves
    $sqlApprovedLeaves = "SELECT COUNT(*) as approved_leaves FROM leaves WHERE Employee = :employee AND status = 'Confirmed'";
    $queryApprovedLeaves = $dbh->prepare($sqlApprovedLeaves);
    $queryApprovedLeaves->bindParam(':employee', $employee_name, PDO::PARAM_STR);
    $queryApprovedLeaves->execute();
    $resultApprovedLeaves = $queryApprovedLeaves->fetch(PDO::FETCH_OBJ);
    $approvedLeaves = $resultApprovedLeaves->approved_leaves ?? 0;

    // Fetch pending leaves
    $sqlPendingLeaves = "SELECT COUNT(*) as pending_leaves FROM leaves WHERE Employee = :employee AND status = 'Pending'";
    $queryPendingLeaves = $dbh->prepare($sqlPendingLeaves);
    $queryPendingLeaves->bindParam(':employee', $employee_name, PDO::PARAM_STR);
    $queryPendingLeaves->execute();
    $resultPendingLeaves = $queryPendingLeaves->fetch(PDO::FETCH_OBJ);
    $pendingLeaves = $resultPendingLeaves->pending_leaves ?? 0;

    // Fetch rejected leaves
    $sqlRejectedLeaves = "SELECT COUNT(*) as rejected_leaves FROM leaves WHERE Employee = :employee AND status = 'Rejected'";
    $queryRejectedLeaves = $dbh->prepare($sqlRejectedLeaves);
    $queryRejectedLeaves->bindParam(':employee', $employee_name, PDO::PARAM_STR);
    $queryRejectedLeaves->execute();
    $resultRejectedLeaves = $queryRejectedLeaves->fetch(PDO::FETCH_OBJ);
    $rejectedLeaves = $resultRejectedLeaves->rejected_leaves ?? 0;
?>
<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Total Leaves Taken</h6>
            <h4><?php echo $totalLeaves; ?> <span>this year</span></h4>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Leaves Approved</h6>
            <h4><?php echo $approvedLeaves; ?></h4>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Pending Requests</h6>
            <h4><?php echo $pendingLeaves; ?></h4>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="stats-info">
            <h6>Rejected Requests</h6>
            <h4><?php echo $rejectedLeaves; ?></h4>
        </div>
    </div>
</div>
<!-- /Leave Employee Statistics -->





				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
						<table class="table table-striped custom-table mb-0 datatable">
    <thead>
        <tr>
            <th>Employee</th>
            <th>From</th>
            <th>To</th>
            <th>No of Days</th>
            <th>Reason</th>
            <th>Status</th> <!-- Added column for status -->
        </tr>
    </thead>
    <?php
        // Update the SQL query to include the status column
        $sql = "SELECT * FROM leaves WHERE Employee = :employee";
        $query = $dbh->prepare($sql);
        $employee_name = "Nifla Nif"; // You can dynamically change this value if needed
        $query->bindParam(':employee', $employee_name, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if($query->rowCount() > 0) {
            foreach($results as $row) {  
    ?>
    <tbody>
        <tr>
            <td><?php echo htmlentities($row->Employee); ?></td>
            <td><?php echo htmlentities($row->Starting_At); ?></td>
            <td><?php echo htmlentities($row->Ending_On); ?></td>
            <td><?php echo htmlentities($row->Days); ?></td>
            <td><?php echo htmlentities($row->Reason); ?></td>
            <td><?php echo htmlentities($row->status); ?></td> <!-- Display the status column -->
        </tr>
    </tbody>
    <?php 
        $cnt+=1; 
        } 
    } 
    ?>
</table>

						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->

			<!-- Add Leave Modal -->
			<?php include_once 'includes/modals/leave/add_leave.php'; ?>
			<!-- /Add Leave Modal -->
			
			<!-- Edit Leave Modal -->
			<?php include_once 'includes/modals/leave/edit_leave.php'; ?>
			<!-- /Edit Leave Modal -->
			
			<!-- Delete Leave Modal -->
			<?php include_once 'includes/modals/leave/delete_leave.php'; ?>
			<!-- /Delete Leave Modal -->
			
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
