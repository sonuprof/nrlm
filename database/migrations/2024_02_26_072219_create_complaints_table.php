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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('agency')->nullable();
            $table->string('district')->nullable();
            $table->string('location')->nullable();
            $table->string('mobile')->nullable();
            $table->string('complaint')->nullable();
            $table->string('complainee_name')->nullable();
            $table->string('complainee_mobile')->nullable();
            $table->string('created_by')->nullable();
            $table->string('pia')->nullable();
            $table->string('dist')->nullable();
            $table->string('breda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
