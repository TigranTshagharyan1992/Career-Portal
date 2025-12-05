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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slider1_title')->nullable();
            $table->text('slider1_description')->nullable();
            $table->string('slider2_title')->nullable();
            $table->text('slider2_description')->nullable();
            $table->string('slider3_title')->nullable();
            $table->text('slider3_description')->nullable();
            $table->longText('text1')->nullable();
            $table->longText('text2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
