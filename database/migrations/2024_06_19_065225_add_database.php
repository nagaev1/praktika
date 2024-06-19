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
        Schema::create('sciences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ru_name');
            $table->timestamps();
        });

        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ru_name');
            $table->timestamps();
            $table->foreignId('science_id')->references('id')->on('sciences');
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ru_name');
            $table->timestamps();
            $table->foreignId('topic_id')->references('id')->on('topics');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
