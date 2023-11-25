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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("resume");
            $table->foreignId('student_id')->constrained('users')->onUpdate("cascade");
            $table->foreignId('teacher_id')->constrained('users')->onUpdate("cascade");
            $table->foreignId("pfg_fk")->constrained("pfgs")->onUpdate("cascade");
            $table->timestamps();
            $table->date("presented_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
