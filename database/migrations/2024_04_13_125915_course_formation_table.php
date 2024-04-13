<?php

use App\Models\Course;
use App\Models\Formation;
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
        Schema::create('course_formation', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Formation::class);
            $table->foreignIdFor(Course::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_formation');
    }
};
