<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<h2> Leave Form</h2>
    <form action="{{ route('move.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="employee_id">Employee ID</label>
            <input type="number" name="employee_id" id="employee_id" class="form-control" >
           @error('employee_id')
               <span class="text-danger">{{  $message }}</span>
           @enderror
        </div>

        <div class="form-group">
            <label for="leave_type">Leave Type</label>
            <select name="leave_type" id="leave_type" class="form-control">
                <option value="sick">Sick</option>
                <option value="loss of pay">Loss Of Pay</option>
                <option value="casual">Casual</option>
            </select>
            @error('leave_type')
               <span class="text-danger">{{  $message }}</span>
           @enderror
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" >
            @error('start_date')
               <span class="text-danger">{{  $message }}</span>
           @enderror
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" >
            @error('end_date')
               <span class="text-danger">{{  $message }}</span>
           @enderror
        </div>

        <div class="form-group">
            <label for="reason">Reason</label>
            <textarea name="reason" id="reason" class="form-control"></textarea>
            @error('reason')
               <span class="text-danger">{{  $message }}</span>
           @enderror
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>