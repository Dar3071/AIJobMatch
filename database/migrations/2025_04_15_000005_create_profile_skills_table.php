<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profile_skills', function (Blueprint $table) {
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->foreignId('skill_id')->constrained()->onDelete('cascade');
            $table->primary(['profile_id', 'skill_id']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('profile_skills');
    }
};