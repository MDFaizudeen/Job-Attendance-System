<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // create_department_employee_table.php
public function up()
{
    Schema::create('department_employee', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employee_id'); // Foreign key without constraint
        $table->unsignedBigInteger('department_id'); // Foreign key without constraint
        $table->timestamps();
    });
}


    
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
    
};
