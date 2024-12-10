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
	<title>Login - HRMS admin</title>
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
				'7120513763': { username: 'Nuzkiya', password: 'vendetta' }
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