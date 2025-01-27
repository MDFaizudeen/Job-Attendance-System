<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Attendance</title>
</head>
<body>
    <h1>Create Attendance</h1>

    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf
        <!-- <label for="employee_id">Employee</label>
        <select name="employee_id" id="employee_id" required> -->
        <label for="employee_name">Employee Name</label>
<input type="text" name="employee_name" id="employee_name" required>

         

        <label for="attendance_date">Attendance Date</label>
        <input type="date" name="attendance_date" required>

        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="present">Present</option>
            <option value="absent">Absent</option>
            <option value="late">Late</option>
        </select>

        <button type="submit">Save</button>
    </form>
</body>
</html>
