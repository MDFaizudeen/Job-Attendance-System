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

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'employee_id' => 'required|exists:employees,id',
    //         'attendance_date' => 'required|date',
    //         'status' => 'required|in:present,absent,late',
    //     ]);

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
use App\Notifications\AttendanceMarked;

class AttendanceController extends Controller  
{

public function index() // This function handles fetching and displaying employees with their attendance records
{   
    //Fetch all employees along with their attendance and departments
    $employees = Employee ::with('attendance')->get();
    return view('one_to_one', compact('employees'));
}
public function onetomany()  //Fetch employees with multiple attendance records (one-to-many)
{   
    $employees = Employee ::with('attendanceee')->get();
    return view('one_to_many', compact('employees'));
}
public function manytomany() //Fetch employees with their departments (many-to-many)
{    
    $employees = Employee::paginate(3);
    return view('many_to_many', compact('employees'));
}
public function hasonethrough() //Fetch employees with department through another model (has one through)
{
    $employees = Employee ::with('department')->get();   
    return view('has_one_through', compact('employees'));
}
public function hasthroughmany()  //Fetch employees with multiple departments (has many through)
{
    $employees = Employee::with('departmentss')->get();
    return view('has_through_many', compact('employees'));
}  
public function polymorphicone()  //Fetch employees with their profile (polymorphic one-to-one)
{
$employees = Employee::with('profile')->get();
return view('polymorphic_one', compact('employees'));
}
public function polymorphicmany() //Fetch employees with multiple profiles (polymorphic one-to-many)
{
$employees = Employee::with('profiles')->get();
return view('polymorphic_many', compact('employees'));
}
public function markAttendance($employeeId, $status)
{
    $employee = Employee::find($employeeId); // Assuming User is the model for employees
    $employee->notify(new AttendanceMarked($employee->name, $status));

    return response()->json(['message' => 'Attendance marked']);
}
}
