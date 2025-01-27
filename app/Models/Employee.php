<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Employee extends Model
// {
//     //
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email'];

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'employee_id'); // Defining foreign key manually
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_employee', 'employee_id', 'department_id'); // Manually define pivot table and keys
    }
}


