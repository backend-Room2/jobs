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
            $table->string('jobTitle', 100);
            $table->string('location', 100);
            $table->text('description');
            $table->text('responsibility');
            $table->text('qualifications');
            $table->text('companydetail');
            $table->float('salaryFrom');
            $table->float('salaryTo');
            $table->string('image',2000);
            $table->boolean('published');
            $table->boolean('featured');
            $table->string('time');
            $table->date('dateline');
            $table->softDeletes();
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
