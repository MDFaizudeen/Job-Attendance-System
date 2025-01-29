<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One To Many</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h2.table-title {
            text-align: center;
            color: #333;
            margin-top: 40px;
            font-size: 28px;
            font-weight: bold;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table th, table td {
            padding: 15px 20px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 16px;
        }

        table th {
            background-color: #007BFF;
            color: white;
            font-size: 18px;
        }

        table td {
            background-color: #f9f9f9;
            color: #333;
        }

        table tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        table tr:hover td {
            background-color: #f1f1f1;
        }

        .employee-name {
            font-weight: bold;
            color: #007BFF;
        }

        .dept-name {
            color: #555;
        }

        .department-section {
            margin-top: 20px;
        }

        .department-section td {
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
</head>
<body>
    <h2 class="table-title">Has Through Many</h2>
    <table>
        @foreach ($employees as $employee)
            <tr>
                <td colspan="2" class="employee-name">{{ $employee->name }}</td>
            </tr>
            @foreach ($employee->departmentss as $department)
                <tr class="department-section">
                    <td class="dept-name">Department:</td>
                    <td>{{ $department->dept_name }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
</body>
</html>
