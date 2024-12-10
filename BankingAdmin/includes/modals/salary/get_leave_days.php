<?php
include 'db_connection.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id'])) {
    $employee_id = intval($_GET['id']); // Convert to integer for safety

    // Fetch total confirmed leave days for the employee
    $sqlTotalLeaves = "SELECT SUM(Days) as total_leaves FROM leaves WHERE Employee = :employee AND status = 'Confirmed'";
    $queryTotalLeaves = $dbh->prepare($sqlTotalLeaves);
    $queryTotalLeaves->bindParam(':employee', $employee_id, PDO::PARAM_INT);
    $queryTotalLeaves->execute();
    $resultTotalLeaves = $queryTotalLeaves->fetch(PDO::FETCH_OBJ);

    // Return the total leave days as JSON
    echo json_encode(['total_leave_days' => $resultTotalLeaves->total_leaves ?? 0]);
} else {
    echo json_encode(['error' => 'Invalid Request']);
}
?>

<script>
  document.getElementById("employee_id").addEventListener("change", function () {
    const employeeId = this.value; // Get selected employee ID
    const basicSalary = 2000; // Fixed basic salary
    const deductionPerLeave = 100; // Deduction per leave day

    if (employeeId) {
        // Make an AJAX call to fetch leave days for the selected employee
        fetch(`get_leave_days.php?id=${employeeId}`)
            .then(response => response.json())
            .then(data => {
                if (data.total_leave_days !== undefined) {
                    const totalLeaveDays = data.total_leave_days || 0;
                    const adjustedSalary = basicSalary - (totalLeaveDays * deductionPerLeave);

                    // Update the total leave days and adjusted salary fields
                    document.getElementById("total_leave_days").value = totalLeaveDays;
                    document.getElementById("adjusted_salary").value = adjustedSalary.toFixed(2);
                } else {
                    console.error("Error: Invalid response from server");
                }
            })
            .catch(error => console.error("Error fetching leave days:", error));
    } else {
        // Reset fields if no employee is selected
        document.getElementById("total_leave_days").value = 0;
        document.getElementById("adjusted_salary").value = basicSalary.toFixed(2);
    }
});

    </script>