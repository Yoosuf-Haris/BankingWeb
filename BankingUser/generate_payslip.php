<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // Correct path to the autoload file

// Set parameters manually for fake data
$month = 'December';
$year = '2024';
$employeeID = '6'; // Hardcoded employee ID

// Manually set the employee details
$employeeName = 'Nifla Nif';
$email = 'niflanif@example.com';
$position = 'Accountant';
$joinDate = '2022-01-15';
$monthlySalary = 585000; // Example base salary
$leaveDays = 11; // Fixed leave days for example
$calculatedSalary = $monthlySalary - ($leaveDays * ($monthlySalary / 30)); // Adjusted salary based on leave days

// EPF and ETF Contribution Percentages
$epfEmployeeRate = 0.08; // 8%
$epfEmployerRate = 0.12; // 12%
$etfRate = 0.03; // 3%

// Calculate EPF and ETF
$epfEmployee = $calculatedSalary * $epfEmployeeRate;
$epfEmployer = $calculatedSalary * $epfEmployerRate;
$etf = $calculatedSalary * $etfRate;

// Initialize FPDF and set properties
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// Header
$pdf->Cell(0, 10, 'Payslip for ' . $month . ' ' . $year, 0, 1, 'C');
$pdf->Ln(10);

// Employee details
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Employee Name:', 0, 0);
$pdf->Cell(50, 10, $employeeName, 0, 1);
$pdf->Cell(50, 10, 'Employee ID:', 0, 0);
$pdf->Cell(50, 10, $employeeID, 0, 1);
$pdf->Cell(50, 10, 'Email:', 0, 0);
$pdf->Cell(50, 10, $email, 0, 1);
$pdf->Cell(50, 10, 'Position:', 0, 0);
$pdf->Cell(50, 10, $position, 0, 1);
$pdf->Cell(50, 10, 'Join Date:', 0, 0);
$pdf->Cell(50, 10, $joinDate, 0, 1);

// Salary details
$pdf->Ln(10);
$pdf->Cell(50, 10, 'Base Salary:', 0, 0);
$pdf->Cell(50, 10, 'RS.' . number_format($monthlySalary, 2), 0, 1);
$pdf->Cell(50, 10, 'Leave Days:', 0, 0);
$pdf->Cell(50, 10, $leaveDays, 0, 1);
$pdf->Cell(50, 10, 'Adjusted Salary:', 0, 0);
$pdf->Cell(50, 10, 'RS.' . number_format($calculatedSalary, 2), 0, 1);

// EPF and ETF details
$pdf->Ln(10);
$pdf->Cell(50, 10, 'EPF (Employee):', 0, 0);
$pdf->Cell(50, 10, 'RS.' . number_format($epfEmployee, 2), 0, 1);
$pdf->Cell(50, 10, 'EPF (Employer):', 0, 0);
$pdf->Cell(50, 10, 'RS.' . number_format($epfEmployer, 2), 0, 1);
$pdf->Cell(50, 10, 'ETF:', 0, 0);
$pdf->Cell(50, 10, 'RS.' . number_format($etf, 2), 0, 1);

// Footer note
$pdf->Ln(20);
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 10, 'This document is electronically generated and does not require a signature.', 0, 1, 'C');

// Output PDF to download
$pdf->Output('D', "Payslip_{$employeeID}_{$month}_{$year}.pdf");
?>
