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
        Schema::create('projectclients', function (Blueprint $table) {
            $table->id();
            $table->text('watchus_title');
            $table->text('see_how_title');
            $table->text('photo');
            $table->text('video_id');
            $table->text('happy_client1');
            $table->integer('happy_count1');
            $table->text('happy_client2');
            $table->integer('happy_count2');
            $table->text('happy_client3');
            $table->integer('happy_count3');
            $table->text('happy_client4');
            $table->integer('happy_count4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectclients');
    }
};
