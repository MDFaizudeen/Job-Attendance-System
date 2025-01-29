<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    td {
        color: #333;
    }

    h2 {
        text-align: center;
        color: #333;
        font-family: 'Arial', sans-serif;
        margin-bottom: 15px;
    }
</style>

<h2>Has One Through Relationship</h2>

<table>
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->department->dept_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
