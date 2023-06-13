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
        Schema::create('stadia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('team_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('capacity')->nullable();
            $table->longText('description')->nullable();
            $table->string('image_path')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stadia');
    }
};
