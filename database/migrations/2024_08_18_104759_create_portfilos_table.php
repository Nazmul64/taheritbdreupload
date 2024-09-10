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
        Schema::create('portfilos', function (Blueprint $table) {
            $table->id();
            $table->integer('portfoli_category_id');
            $table->text('name');
            $table->text('slug');
            $table->text('short_description');
            $table->text('description');
            $table->text('photo');
            $table->text('banner');
            $table->text('project_client')->nullable();
            $table->text('project_company')->nullable();
            $table->text('project_start_date')->nullable();
            $table->text('project_end_date')->nullable();
            $table->text('project_cost')->nullable();
            $table->text('project_website')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfilos');
    }
};
