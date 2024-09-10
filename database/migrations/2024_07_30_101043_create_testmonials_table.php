<?php declare(strict_types=1); 

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
        Schema::create('testmonials', function (Blueprint $table) {
            $table->id();
            $table->string('testmonial')->nullable();
            $table->string('clientsay')->nullable();
            $table->string('description_1')->nullable();
            $table->string('description_2');
            $table->string('name');
            $table->string('title_1');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testmonials');
    }
};
