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
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topicId')->unsigned();
            $table->foreign('topicId')->references('id')->on('topics')->cascadeOnDelete();
            $table->string('title', 255);
            $table->longText('content')->nullable();
            $table->string('imagePath', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
