<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'bio'];

    // Define the polymorphic inverse relation
    public function profileable()
    {
        return $this->morphTo();
    }
    public function profileable1()
{
    return $this->morphTo();
}
}
