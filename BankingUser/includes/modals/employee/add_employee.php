<?php
include 'db_connection.php'; // Connect to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $phone = $_POST['phone'];
    $employee_id = $_POST['employee_id']; // Assuming this is part of the form
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $picture = $_POST['picture'];
    $joiningDate = $_POST['joining_date'];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO employees (FirstName, LastName, UserName, Email, Password, Phone, Employee_Id, Department, Designation, Picture, Joining_Date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $firstName, $lastName, $username, $email, $password, $phone, $employee_id, $department, $designation, $picture, $joiningDate);

    if ($stmt->execute()) {
        echo "Employee registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
