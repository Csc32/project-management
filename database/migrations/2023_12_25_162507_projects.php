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
        //

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->longText("resume");
            $table->foreignId("pfg_fk")->constrained("pfgs")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("kind_fk")->constrained("kind_projects")->onUpdate("cascade")->onDelete("cascade");
            $table->boolean("isPresent")->default(0);
            $table->timestamps();
            $table->date("presented_at")->nullable();
            $table->longText("source")->nullable();
            $table->string("image")->nullable();
            $table->foreignId("teacher_fk")->constrained("users")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('projects');
    }
};
