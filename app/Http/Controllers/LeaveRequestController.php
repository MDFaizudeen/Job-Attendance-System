<?php

namespace App\Http\Controllers;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{
    public function go()
    {
        $leaves = LeaveRequest::with('employee')->get();
  
        return view('leave_requests.go', compact('leaves'));
    }

    public function move()
    {
        return view('leave_requests.move');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'employee_id' => 'required|exists:employees,id', // assuming 'employees' table for employees
            'leave_type' => 'required|in:sick,loss of pay,casual',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required|string',
            'status' => 'required|in:pending,approved,rejected',

        ]);

        LeaveRequest::create($request->all())->save();

        return redirect()->route('go')->with('success', 'Leave request submitted successfully');
    }
}
