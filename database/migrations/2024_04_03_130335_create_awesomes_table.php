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
        Schema::create('awesomes', function (Blueprint $table) {
            $table->id();
            $table->string('awesome_title');
            $table->text('awesome_description');
            $table->text('photo');
            $table->string('status')->default('hide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awesomes');
    }
};
