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
        Schema::create('sitelogos', function (Blueprint $table) {
            $table->id();
            $table->longText('information');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('adderes');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('site_icon');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitelogos');
    }
};
