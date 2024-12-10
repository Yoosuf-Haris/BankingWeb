<!-- Add Salary Modal -->
<div id="add_salary" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addSalaryForm">
                <div class="modal-header">
                    <h4 class="modal-title">Add Salary</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Employee Selection -->
                    <div class="form-group">
                        <label>Employee Leaving <span class="text-danger">*</span></label>
                        <select id="employeeSelect" name="employee" class="form-control">
                            <option>Select Employee</option>
                            <?php 
                                $sql2 = "SELECT * FROM employees";
                                $query2 = $dbh->prepare($sql2);
                                $query2->execute();
                                $result2 = $query2->fetchAll(PDO::FETCH_OBJ);
                                foreach ($result2 as $row) { ?>
                                    <option value="<?php echo $row->id; ?>">
                                        <?php echo htmlentities($row->FirstName) . " " . htmlentities($row->LastName); ?>
                                    </option>
                                <?php } ?>
                        </select>
                    </div>
                    
                    <!-- Month -->
                    <div class="form-group">
                        <label>Month</label>
                        <input type="text" name="month" class="form-control" value="<?php echo date('F'); ?>" readonly required>
                    </div>
                    
                    <!-- Year -->
                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" name="year" class="form-control" value="<?php echo date('Y'); ?>" readonly required>
                    </div>
                    
                    <!-- Basic Salary -->
                    <div class="form-group">
                        <label>Basic Salary</label>
                        <input type="number" id="basic_salary" name="basic_salary" class="form-control" value="500000" readonly required>
                    </div>

                    <!-- Total Leave Days -->
                    <div class="form-group">
                        <label>Total Leave Days</label>
                        <input type="number" id="total_leave_days" class="form-control" value="0" readonly>
                    </div>
                    
                    <!-- Adjusted Salary -->
                    <div class="form-group">
                        <label>Adjusted Salary</label>
                        <input type="number" id="adjusted_salary" name="adjusted_salary" class="form-control" value="500000" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="saveSalaryButton" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Success Message Modal -->
<div id="successModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Success</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Salary added successfully!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Fake data for each customer (map with PHP id)
    const fakeData = {
        7: { leaveDays: 5, adjustedSalary: 401500 },
        9: { leaveDays: 3, adjustedSalary: 401800 },
        5: { leaveDays: 7, adjustedSalary: 401400 },
        4: { leaveDays: 2, adjustedSalary: 401900 },
    };

    // Handle employee selection
    document.getElementById('employeeSelect').addEventListener('change', function () {
        const employeeId = this.value;

        if (employeeId && fakeData[employeeId]) {
            const { leaveDays, adjustedSalary } = fakeData[employeeId];

            // Update fields dynamically
            document.getElementById('total_leave_days').value = leaveDays;
            document.getElementById('adjusted_salary').value = adjustedSalary.toFixed(2);
        } else {
            // Reset fields if no employee selected
            document.getElementById('total_leave_days').value = 0;
            document.getElementById('adjusted_salary').value = 500000;
        }
    });

    // Handle Save button click
    document.getElementById('saveSalaryButton').addEventListener('click', function (event) {
        event.preventDefault();

        // Hide Add Salary modal and show success modal
        $('#add_salary').modal('hide');
        $('#add_salary').on('hidden.bs.modal', function () {
            $('#successModal').modal('show');
        });
    });
</script>