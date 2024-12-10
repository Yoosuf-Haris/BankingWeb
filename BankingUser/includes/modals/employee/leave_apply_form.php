<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Leave Application Form</h2>
        <form action="submit_leave.php" method="post">
            <label for="employee">Employee Name:</label>
            <input type="text" name="employee" id="employee" value="Nifla Nif" readonly><br>

            <label for="starting_at">Starting At:</label>
            <input type="date" name="starting_at" id="starting_at" required><br>

            <label for="ending_on">Ending On:</label>
            <input type="date" name="ending_on" id="ending_on" required><br>

            <label for="days">Days:</label>
            <input type="number" name="days" id="days" readonly><br>

            <label for="reason">Reason:</label>
            <textarea name="reason" id="reason" rows="4" required></textarea><br>

            <button type="submit">Apply for Leave</button>
        </form>
    </div>

    <script>
        // Function to calculate the number of days
        function calculateDays() {
            const startDate = document.getElementById("starting_at").value;
            const endDate = document.getElementById("ending_on").value;

            if (startDate && endDate) {
                const start = new Date(startDate);
                const end = new Date(endDate);

                // Ensure end date is after start date
                if (end >= start) {
                    const timeDiff = end - start;
                    const dayDiff = timeDiff / (1000 * 3600 * 24) + 1; // Adding 1 to include both start and end date
                    document.getElementById("days").value = dayDiff;
                } else {
                    alert("End date must be later than or equal to the start date.");
                    document.getElementById("days").value = '';
                }
            }
        }

        // Event listeners to trigger calculation when dates are changed
        document.getElementById("starting_at").addEventListener("change", calculateDays);
        document.getElementById("ending_on").addEventListener("change", calculateDays);
    </script>
</body>
</html>
