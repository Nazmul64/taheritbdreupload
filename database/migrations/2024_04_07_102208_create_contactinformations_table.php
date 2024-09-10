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
        Schema::create('contactinformations', function (Blueprint $table) {
            $table->id();
            $table->string('main_photo')->nullable();
            $table->string('icon_photo')->nullable();
            $table->string('Location_photo')->nullable();
            $table->string('emailaddress_photo')->nullable();
            $table->string('information_one')->nullable();
            $table->string('information_two')->nullable();
            $table->string('Location')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->json('patner_photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactinformations');
    }
};
