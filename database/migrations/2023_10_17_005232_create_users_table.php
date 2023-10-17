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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("user_id", 100);
            $table->string('names');
            $table->string('lastnames');
            $table->string('password');
            $table->string('telephone_number');
            $table->string('email')->unique();
            $table->foreignId("pfg_id")->nullable()->constrained("pfgs")->onUpdate("cascade");
            $table->foreignId("rol_id")->constrained("roles")->onUpdate("cascade");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
