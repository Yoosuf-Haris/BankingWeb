<?php
session_start();
include 'db_connection.php';

$employee_id = $_SESSION['employee_id']; // Assume employee ID is stored in session

$sql = "SELECT * FROM salaries WHERE employee_id = :employee_id ORDER BY year DESC, month DESC";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_INT);
$stmt->execute();
$salaries = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Salary Details</title>
</head>
<body>
    <h2>My Salary Details</h2>
    <table border="1">
        <tr>
            <th>Month</th>
            <th>Year</th>
            <th>Basic Salary</th>
            <th>Deductions</th>
            <th>Net Salary</th>
        </tr>
        <?php foreach ($salaries as $salary): ?>
        <tr>
            <td><?php echo htmlentities($salary->month); ?></td>
            <td><?php echo htmlentities($salary->year); ?></td>
            <td><?php echo htmlentities($salary->basic_salary); ?></td>
            <td><?php echo htmlentities($salary->deductions); ?></td>
            <td><?php echo htmlentities($salary->net_salary); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
