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
            $table->string('user_id', 100);
            $table->string('names');
            $table->string('lastnames');
            $table->string('password');
            $table->char('sex', 1);
            $table->date('date_of_birth');
            $table->string('telephone_number');
            $table->string('email')->unique();
            $table->foreignId('pfg_fk')->nullable()->constrained('pfgs')->onUpdate('cascade');
            $table->foreignId('rol_fk')->constrained('roles')->onUpdate('cascade');
            $table->longText('profile_photo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last_visit')->nullable();
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
