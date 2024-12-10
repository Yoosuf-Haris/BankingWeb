<?php
include 'db_connection.php';

$id = $_GET['id'];

// SQL query to delete the record
$sql = "DELETE FROM employees WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

// Redirect to the main page
header("Location: index.php");
exit;
?>
