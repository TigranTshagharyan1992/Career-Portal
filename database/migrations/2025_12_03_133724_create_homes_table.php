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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('main_title')->nullable();
            $table->string('main_image')->nullable();
            $table->string('section1_title')->nullable();
            $table->text('section1_text')->nullable();
            $table->string('section1_image')->nullable();
            $table->string('section2_title')->nullable();
            $table->text('section2_text')->nullable();
            $table->string('section2_image')->nullable();
            $table->string('section3_title')->nullable();
            $table->text('section3_text')->nullable();
            $table->string('section3_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
