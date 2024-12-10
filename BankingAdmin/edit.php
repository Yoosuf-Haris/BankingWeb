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

<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>First Name: <input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>"></label><br>
    <label>Last Name: <input type="text" name="LastName" value="<?php echo $row['LastName']; ?>"></label><br>
    <label>Username: <input type="text" name="UserName" value="<?php echo $row['UserName']; ?>"></label><br>
    <label>Email: <input type="email" name="Email" value="<?php echo $row['Email']; ?>"></label><br>
    <label>Phone: <input type="text" name="Phone" value="<?php echo $row['Phone']; ?>"></label><br>
    <label>Department: <input type="text" name="Department" value="<?php echo $row['Department']; ?>"></label><br>
    <label>Designation: <input type="text" name="Designation" value="<?php echo $row['Designation']; ?>"></label><br>
    <label>Joining Date: <input type="date" name="Joining_Date" value="<?php echo $row['Joining_Date']; ?>"></label><br>
    <button type="submit" name="update">Update</button>
</form>

<?php $conn->close(); ?>
