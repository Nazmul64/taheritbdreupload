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
        Schema::create('expertises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('photo');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('youtube_link');
            $table->timestamps();
        });
    }
  
    public function down(): void
    {
        Schema::dropIfExists('expertises');
    }
};
