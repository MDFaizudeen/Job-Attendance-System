<?php

// namespace App\Http\Controllers;

// use App\Models\Attendance;
// use App\Models\Employee;
// use Illuminate\Http\Request;

// class AttendanceController extends Controller
// {
//     public function index()
//     {
//         $attendances = Attendance::with('employee')->get();
//         return view('attendances.index', compact('attendances'));
//     }

//     public function create()
//     {
//         $employees = Employee::all();
//         return view('attendances.create', compact('employees'));
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'employee_id' => 'required|exists:employees,id',
//             'attendance_date' => 'required|date',
//             'status' => 'required|in:present,absent,late',
//         ]);

//         Attendance::create($request->all());

//         return redirect()->route('attendances.index')->with('success', 'Attendance recorded successfully.');
//     }

//     public function edit($id)
//     {
//         $attendance = Attendance::findOrFail($id);
//         $employees = Employee::all();
//         return view('attendances.edit', compact('attendance', 'employees'));
//     }

//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'employee_id' => 'required|exists:employees,id',
//             'attendance_date' => 'required|date',
//             'status' => 'required|in:present,absent,late',
//         ]);

//         $attendance = Attendance::findOrFail($id);
//         $attendance->update($request->all());

//         return redirect()->route('attendances.index')->with('success', 'Attendance updated successfully.');
//     }
// }

 

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Department;
class AttendanceController extends Controller  
{

public function index()
{
    // Fetch all employees along with their attendance and departments
    $employees = Employee::with(['attendances', 'departments'])->get();

    return view('attendances.index', compact('employees'));
}

public function create()
{
    // Fetch all employees to display in the dropdown
    $employees = Employee::all();
    return view('attendances.create', compact('employees'));
}
}
