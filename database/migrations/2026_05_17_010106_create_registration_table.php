<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registration', function (Blueprint $table) {

            $table->id();
            //personal information
            $table->string('Full_name', 255);
            $table->integer('age');
            $table->string('gender', 10);
            $table->string('phone', 20);
            $table->string('email', 255);
            $table->string('address', 255);
            //marathon information
            $table->string('Jersey_size', 10);
            $table->string('school_organization', 255);
            $table->string('marathon_category', 255);
            //emergency contact information
            $table->string('emergency_contact_name', 255);
            $table->string('emergency_contact_phone', 20);
            $table->string('emergency_contact_relationship', 255);
           
            $table->string('runner_number', 20)->unique();
            $table->date('registration_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
