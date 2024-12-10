<?php
	session_start();
	error_reporting(0);
	include_once("includes/config.php");
	if($_SESSION['userlogin']>0){
		header('location:index.php');
	}elseif(isset($_POST['login'])){
		$_SESSION['userlogin'] = $_POST['username'];
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$sql = "SELECT UserName,Password from users where UserName=:username";
		$query = $dbh->prepare($sql);
		$query->bindParam(':username',$username,PDO::PARAM_STR);
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount() > 0){
			foreach ($results as $row) {
				$hashpass = $row->Password;
			}
			// Verifying Password
			if (password_verify($password, $hashpass)) {
				$_SESSION['userlogin'] = $_POST['username'];
				echo "<script>window.location.href= 'index.php'; </script>";
			} else {
				$wrongpassword = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oh Snapp!😕</strong> Alert <b class="alert-link">Password: </b>You entered the wrong password.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>';
			}
		} else {
			$wrongusername = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oh Snapp!🙃</strong> Alert <b class="alert-link">UserName: </b> You entered the wrong UserName.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Login - HRMS User</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="account-content">
			<div class="container">
				<div class="account-logo">
					<a href="index.php"><img src="assets/img/logo2.png" alt="Company Logo"></a>
				</div>
				
				<div class="account-box">
					<div class="account-wrapper">
						<h3 class="account-title">Login</h3>

						<!-- Account Form -->
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>User Name</label>
								<input class="form-control" id="username" name="username" required type="text">
							</div>
							<?php if($wrongusername){echo $wrongusername;}?>
							
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" id="password" name="password" required type="password">
							</div>
							<?php if($wrongpassword){echo $wrongpassword;}?>

							<div class="form-group">
	<label>Tag ID</label>
	<div class="d-flex align-items-center">
		<input class="form-control mr-2" id="tagId" name="tagId" readonly type="text">
		<button type="button" class="btn btn-secondary" onclick="scanTag()">Scan Tag</button>
	</div>
</div>

							<div class="form-group text-center">
								<button class="btn btn-primary account-btn" name="login" type="submit">Login</button>
								
								<div class="col-auto pt-2">
									<a class="text-muted float-right" href="forgot-password.php">Forgot password?</a>
								</div>
							</div>
								
							<div class="account-footer">
								<p>Having Trouble? report an issue on Chat <a target="#" href="#">Share with us</a></p>
							</div>
						</form>
						<!-- /Account Form -->
						 <!-- Button to trigger the registration modal -->
<a href="#" class="btn add-btn" data-toggle="modal" data-target="#addEmployeeModal"><i class="fa fa-plus"></i> Don't have an account Register as a new Employee</a>

<!-- Employee Registration Modal -->
<div id="addEmployeeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register New Employee</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="includes/modals/employee/add_employee.php" method="POST">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="userName">Username</label>
                        <input type="text" class="form-control" name="username" id="userName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
					
					<div class="col-sm-6">  
									<div class="form-group">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input name="employee_id" readonly type="text" value="<?php echo 'EMP-'.$id; ?>123145" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select required name="department" class="select">
													<option>Select Department</option>
													<?php 
											$sql2 = "SELECT * from departments";
											$query2 = $dbh -> prepare($sql2);
											$query2->execute();
											$result2=$query2->fetchAll(PDO::FETCH_OBJ);
											foreach($result2 as $row)
											{          
												?>  
											<option value="<?php echo htmlentities($row->Department);?>">
											<?php echo htmlentities($row->Department);?></option>
											<?php } ?> 
												</select>
											</div>
										</div>



										<div class="col-md-6">
											<div class="form-group">
												<label>Designation <span class="text-danger">*</span></label>
												<select required name="designation" class="select">
													<option>Select Designation</option>
													<?php 
											$sql2 = "SELECT * from designations";
											$query2 = $dbh -> prepare($sql2);
											$query2->execute();
											$result2=$query2->fetchAll(PDO::FETCH_OBJ);
											foreach($result2 as $row)
											{          
												?>  
											<option value="<?php echo htmlentities($row->Designation);?>">
											<?php echo htmlentities($row->Designation);?></option>
											<?php } ?> 
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-form-label">Employee Picture</label>
												<input class="form-control" required name="picture" type="file">
											</div>
										</div>
                    <div class="form-group">
                        <label for="joiningDate">Joining Date</label>
                        <input type="date" class="form-control" name="joining_date" id="joiningDate" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>



					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/app.js"></script>

	<!-- JavaScript to simulate RFID scanning and auto-fill the form -->
	<script>
		function scanTag() {
			// Simulate reading an RFID tag
			const tagIds = {
				'8311157218': { username: 'Nifla', password: 'barry' }
			};

			// Randomly select a tag for demonstration
			const tagKeys = Object.keys(tagIds);
			const randomTag = tagKeys[Math.floor(Math.random() * tagKeys.length)];
			const userDetails = tagIds[randomTag];

			// Fill in the tag ID, username, and password fields
			document.getElementById('tagId').value = randomTag;
			document.getElementById('username').value = userDetails.username;
			document.getElementById('password').value = userDetails.password;
		}
	</script>
</body>
</html>