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
        Schema::create('project_period', function (Blueprint $table) {
            $table->id();
            $table->foreignId("period_fk")->constrained("academic_period")->onUpdate("cascade");
            $table->foreignId("project_fk")->constrained("projects")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //

        Schema::dropIfExists('project_period');
    }
};
