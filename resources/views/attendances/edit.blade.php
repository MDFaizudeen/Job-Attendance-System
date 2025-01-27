<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Attendance</title>
</head>
<body>
    <h1>Edit Attendance</h1>

    <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="employee_id">Employee</label>
        <select name="employee_id" id="employee_id" required>
            @foreach($employees as $employee)
                <option value="{{ $employee->id }}" {{ $attendance->employee_id == $employee->id ? 'selected' : '' }}>
                    {{ $employee->name }}
                </option>
            @endforeach
        </select>

        <label for="attendance_date">Attendance Date</label>
        <input type="date" name="attendance_date" value="{{ $attendance->attendance_date }}" required>

        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="present" {{ $attendance->status == 'present' ? 'selected' : '' }}>Present</option>
            <option value="absent" {{ $attendance->status == 'absent' ? 'selected' : '' }}>Absent</option>
            <option value="late" {{ $attendance->status == 'late' ? 'selected' : '' }}>Late</option>
        </select>

        <button type="submit">Update</button>
    </form>
</body>
</html>
