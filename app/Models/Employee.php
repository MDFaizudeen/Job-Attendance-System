<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Employee extends Model
// {
//     //
// }
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Employee extends Model
// {
//     protected $fillable = ['name', 'email'];

//     public function attendance()
//     {
//         return $this->hasone(Attendance::class, 'employee_id'); // Defining foreign key manually
//     }

//     public function departments()
//     {
//         return $this->belongsTo(Department::class, 'department_employee', 'employee_id', 'department_id'); // Manually define pivot table and keys
//     }
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'password'];

    public function attendance()
    {
        return $this->hasOne(Attendance::class, 'employee_id');
    }
    public function attendanceee()
    {
        return $this->hasMany(Attendance::class, 'employee_id');
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_employee','employee_id','department_id');
    }
    public function department()
    {
        return $this->hasOneThrough(Department::class, DepartmentEmployee::class, 'employee_id', 'id', 'id', 'department_id');
    }
    public function departmentss()
    {
        return $this->hasManyThrough(Department::class, DepartmentEmployee::class, 'employee_id', 'id', 'id', 'department_id');
    }
    public function attendances()
{
    return $this->hasMany(Attendance::class);
}
public function profile()
{
    return $this->morphOne(Profile::class, 'profileable');
}
public function profiles()
{
    return $this->hasMany(Profile::class, 'profileable_id')
        ->where('profileable_type', Employee::class);
}
}
 

