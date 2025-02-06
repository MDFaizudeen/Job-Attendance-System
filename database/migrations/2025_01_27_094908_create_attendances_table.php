<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // create_attendances_table.php
public function up()
{
    Schema::create('attendances', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employee_id'); // Foreign key without constraint
        $table->date('attendance_date');
        $table->enum('status', ['present', 'absent', 'leave']);
        $table->timestamp('marked_at')->useCurrent();
        $table->timestamps();
    });
}

    
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
    
};
