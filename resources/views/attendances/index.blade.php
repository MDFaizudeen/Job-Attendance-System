
<table border="1">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Attendance</th>
            <th>Date</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->attendance->status ?? ''}}</td> 
            <td>{{ $employee->attendance->attendance_date?? ''}}</td> 



        </tr>
         @endforeach
    </tbody>
</table>

