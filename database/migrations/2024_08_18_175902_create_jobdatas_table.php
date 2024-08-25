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
        Schema::create('jobdatas', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle', 100);
            $table->text('description');
            $table->text('responsability');
            $table->text('qualifications');
            $table->text('companydetail');
            $table->string('location');
            $table->float('salaryfrom');
            $table->float('salaryto');
            $table->boolean('time');
            $table->date('dateline');
            $table->string('image');
            $table->boolean('featured');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobdatas');
    }
};
