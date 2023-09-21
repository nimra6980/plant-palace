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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('detail')->nullable();
            $table->text('detail1')->nullable();
            $table->text('detail2')->nullable();
            $table->text('detail3')->nullable();
            $table->string('category')->nullable();
            $table->text('quote')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
