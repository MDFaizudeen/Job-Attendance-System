<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name','dept_name'];

    public function employees() //
    {
        return $this->belongsTo(Employee::class, 'department_id', );
    }
    public function employeesmany()
    {
        return $this->belongsToMany(Employee::class,  'department_employee','employee_id','department_id');
    }
    public function employeess()
    {
        return $this->hasManyThrough(
            Employee::class,  // The related model (Employee)
            DepartmentEmployee::class,  // The intermediate model (DepartmentEmployee)
            'employee_id',  // Foreign key on the intermediate model
            'id',  // Foreign key on the related model (Employee)
            'id',  // Local key on the Department model
            'department_id'  // Local key on the intermediate model (DepartmentEmployee)
        );
    }
    public function employeesmanythrough()   //Define a many-to-many relationship:
    {
        return $this->belongsToMany(Employee::class,  'department_employee','employee_id','department_id');
    }
    public function profile() //Define a polymorphic relationship
    {
        return $this->morphOne(Profile::class, 'profileable');
    }
}
