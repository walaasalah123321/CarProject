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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Content');
            $table->integer('Luggages');
            $table->integer('Doors');
            $table->integer('Passengers');
            $table->float('Price');
            $table->boolean('Active');
            $table->string('Image');
            $table->foreignId("Cat_id")->constrained("categories");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
