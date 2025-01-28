<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Attendance extends Model
// {
//     //
// }


// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Attendance extends Model
// {
//     protected $fillable = ['employee_id', 'attendance_date', 'status'];

//     public function employee()
//     {
//         return $this->belongsTo(Employee::class, 'employee_id'); // Manually define the foreign key
//     }
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['employee_id', 'attendance_date', 'status'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function employe()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}


