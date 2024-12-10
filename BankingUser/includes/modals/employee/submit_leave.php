<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee = $_POST['employee'];
    $starting_at = $_POST['starting_at'];
    $ending_on = $_POST['ending_on'];
    $days = $_POST['days'];
    $reason = $_POST['reason'];
    $time_added = date("Y-m-d H:i:s");

    $sql = "INSERT INTO leaves (Employee, Starting_At, Ending_On, Days, Reason, Time_Added) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiss", $employee, $starting_at, $ending_on, $days, $reason, $time_added);

    if ($stmt->execute()) {
        echo "Leave application submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
