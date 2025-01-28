<?php
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Department extends Model
// {
//     protected $fillable = ['name'];

//     public function employees()
//     {
//         return $this->belongsToMany(Employee::class, 'department_employee', 'department_id', 'employee_id'); // Manually define pivot table and keys
//     }
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'department_id', );
    }
}
