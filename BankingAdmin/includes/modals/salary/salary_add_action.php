<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_name = $_POST['employee']; // Employee name from the form
    $month = $_POST['month'];
    $year = $_POST['year'];
    $basic_salary = $_POST['basic_salary'];
    $total_leave_days = $_POST['total_leave_days']; // Ensure this field is included in the form
    $adjusted_salary = $_POST['adjusted_salary'];

    try {
        // Prepare SQL statement
        $sql = "INSERT INTO salaries (employee_name, month, year, basic_salary, total_leave_days, adjusted_salary) 
                VALUES (:employee_name, :month, :year, :basic_salary, :total_leave_days, :adjusted_salary)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':employee_name', $employee_name);
        $stmt->bindParam(':month', $month);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':basic_salary', $basic_salary);
        $stmt->bindParam(':total_leave_days', $total_leave_days);
        $stmt->bindParam(':adjusted_salary', $adjusted_salary);

        // Execute the statement
        $stmt->execute();

        // Redirect to the salary page with success message
        $_SESSION['success_message'] = "Salary record added successfully.";
        header('Location: salary.php');
    } catch (PDOException $e) {
        // Handle error
        $_SESSION['error_message'] = "Error adding salary record: " . $e->getMessage();
        header('Location: salary.php');
    }
}
?>
