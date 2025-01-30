<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphic One To Many</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2.table-title {
            text-align: center;
            color: #333;
            margin-top: 20px;
            font-size: 24px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
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
    </style>
</head>
<body>
    <h2 class="table-title">Polymorphic One To Many</h2>
    <table>
        @foreach ($employees as $employee)

            <tr>
                <td colspan="2"><strong>Employee:</strong> {{ $employee->name }}</td>
            </tr>
            <tr>
                <th> Name</th>
                <th>Employee Bio</th>
            </tr>
            <tr>
            @foreach ($employee->profiles as $profile)
                <th>{{ $employee->name }}</th>
                <th>{{$profile->bio ?? ''}}</th>
            </tr>
           
        @endforeach
        @endforeach
    </table>
</body>
</html>
