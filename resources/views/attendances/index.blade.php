<table border="1">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Attendance</th>
            <th>Departments</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee->attendance as $attendance)
                        <tr>
                            <td>{{ $attendance->attendance_date }}</td>
                            <td>{{ $attendance->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
            <td>
                <ul>
                    @foreach ($employee->departments as $department)
                    <li>{{ $department->name }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
