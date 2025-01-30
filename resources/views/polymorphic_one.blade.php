<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One To Many</title>
    <style>
        


    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }

 
    th {
        background-color: #4CAF50; 
        color: white;
        text-align: left;
        padding: 12px 15px;
    }


    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    
    tr:hover {
        background-color: #f5f5f5;
    }

    table {
        margin-top: 20px;
    }

    
    tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    tbody tr:nth-child(even) {
        background-color: #ffffff;
    }

   
    table, th, td {
        border: 1px solid red;
    }

 
    th {
        font-weight: bold;
    }
</style>
</head>
<body>
<h2 class="table-title">Polymorphic One Relationship</h2>
<table>
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Bio</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->profile->bio ?? '' }}</td>

   
        @endforeach
    </tbody>
</table>
</body>
</html>