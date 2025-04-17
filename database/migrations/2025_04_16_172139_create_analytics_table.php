<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('analytics', function (Blueprint $table) {
            $table->id();
            $table->string('metric');
            $table->text('value');
            $table->timestamp('recorded_at')->useCurrent();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('analytics');
    }
};