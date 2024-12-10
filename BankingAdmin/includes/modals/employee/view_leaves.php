<?php
include 'db_connection.php';

// Check if the confirmation or rejection process was triggered
if (isset($_GET['id']) && isset($_GET['action'])) {
    $leaveId = $_GET['id'];
    
    if ($_GET['action'] == 'confirm') {
        // Update the status to 'Confirmed' in the database
        $updateSql = "UPDATE leaves SET Status = 'Confirmed' WHERE id = ?";
    } elseif ($_GET['action'] == 'reject') {
        // Update the status to 'Rejected' in the database
        $updateSql = "UPDATE leaves SET Status = 'Rejected' WHERE id = ?";
    }
    
    if (isset($updateSql)) {
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("i", $leaveId);
        $stmt->execute();
        $stmt->close();
    }

    // Redirect back to the page after the action
    header("Location: view_leaves.php");
    exit();
}

$result = $conn->query("SELECT id, Employee, Starting_At, Ending_On, Days, Reason, Time_Added, Status FROM leaves");

if ($result->num_rows > 0) {
    echo "<h2 style='text-align: center; font-family: Arial, sans-serif;'>Pending Leave Applications</h2>";
    echo "<table style='width: 100%; border-collapse: collapse; margin: 20px 0; font-family: Arial, sans-serif;' border='1'>
            <thead>
                <tr style='background-color: #f4f4f4;'>
                    <th style='padding: 10px; text-align: left;'>Employee</th>
                    <th style='padding: 10px; text-align: left;'>Starting At</th>
                    <th style='padding: 10px; text-align: left;'>Ending On</th>
                    <th style='padding: 10px; text-align: left;'>Days</th>
                    <th style='padding: 10px; text-align: left;'>Reason</th>
                    <th style='padding: 10px; text-align: left;'>Time Added</th>
                    <th style='padding: 10px; text-align: center;'>Status</th>
                    <th style='padding: 10px; text-align: center;'>Action</th>
                </tr>
            </thead>
            <tbody>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td style='padding: 8px;'>" . htmlentities($row['Employee']) . "</td>
                <td style='padding: 8px;'>" . htmlentities($row['Starting_At']) . "</td>
                <td style='padding: 8px;'>" . htmlentities($row['Ending_On']) . "</td>
                <td style='padding: 8px;'>" . htmlentities($row['Days']) . "</td>
                <td style='padding: 8px;'>" . htmlentities($row['Reason']) . "</td>
                <td style='padding: 8px;'>" . htmlentities($row['Time_Added']) . "</td>
                <td style='padding: 8px;'>" . ($row['Status'] ? htmlentities($row['Status']) : 'Pending') . "</td>
                <td style='padding: 8px; text-align: center;'>";

        // Check the leave status, if not confirmed or rejected, show the links
        if ($row['Status'] != 'Confirmed' && $row['Status'] != 'Rejected') {
            echo "<a href='view_leaves.php?id={$row['id']}&action=confirm' style='color: #007bff; text-decoration: none;'>Confirm</a> | 
                  <a href='view_leaves.php?id={$row['id']}&action=reject' style='color: #ff0000; text-decoration: none;'>Reject</a>";
        } elseif ($row['Status'] == 'Confirmed') {
            echo "<span style='color: green;'>Confirmed</span>";
        } elseif ($row['Status'] == 'Rejected') {
            echo "<span style='color: red;'>Rejected</span>";
        }

        echo "</td>
              </tr>";
    }

    echo "</tbody>
        </table>";
} else {
    echo "<p style='text-align: center; font-family: Arial, sans-serif;'>No pending leave applications.</p>";
}

$conn->close();
?>
