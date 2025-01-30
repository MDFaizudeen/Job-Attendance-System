<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['employee_id', 'attendance_date', 'status']; // Specify which fields can be filled automatically

    public function employee() // Define a relationship:
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function employe()  // Define a relationship:
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}


