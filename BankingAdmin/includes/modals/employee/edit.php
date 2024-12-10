<?php
include 'db_connection.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $username = $_POST['UserName'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $department = $_POST['Department'];
    $designation = $_POST['Designation'];
    $joiningDate = $_POST['Joining_Date'];

    $sql = "UPDATE employees SET FirstName='$firstName', LastName='$lastName', UserName='$username', Email='$email', Phone='$phone', Department='$department', Designation='$designation', Joining_Date='$joiningDate' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve the current data for the employee
$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }
        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        form button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Update Employee</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>First Name:</label>
        <input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>">
        
        <label>Last Name:</label>
        <input type="text" name="LastName" value="<?php echo $row['LastName']; ?>">
        
        <label>Username:</label>
        <input type="text" name="UserName" value="<?php echo $row['UserName']; ?>">
        
        <label>Email:</label>
        <input type="email" name="Email" value="<?php echo $row['Email']; ?>">
        
        <label>Phone:</label>
        <input type="text" name="Phone" value="<?php echo $row['Phone']; ?>">
        
        <label>Department:</label>
        <input type="text" name="Department" value="<?php echo $row['Department']; ?>">
        
        <label>Designation:</label>
        <input type="text" name="Designation" value="<?php echo $row['Designation']; ?>">
        
        <label>Joining Date:</label>
        <input type="date" name="Joining_Date" value="<?php echo $row['Joining_Date']; ?>">
        
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>

<?php $conn->close(); ?>
