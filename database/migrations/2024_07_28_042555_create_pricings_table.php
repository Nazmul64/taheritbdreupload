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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('basic');
            $table->decimal('price',50);
            $table->string('life_time_update');
            $table->string('month');
            $table->string('permitted_domain');
            $table->string('personal_project');
            $table->string('email_support');
            $table->string('skype_support');
            $table->string('anydesk_support');
            $table->string('whatsapp_support');
            $table->string('installation_cpanel');
            $table->string('photo');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
