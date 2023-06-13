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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('league_id')->nullable();
            $table->bigInteger('position_id')->nullable();
            $table->string('common_name')->nullable();
            $table->string('shirt_number')->nullable();
            $table->string('slug')->nullable();
            $table->string('display_name')->nullable();
            $table->string('fullname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('nationality')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('birthcountry')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
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
        Schema::dropIfExists('players');
    }
};
