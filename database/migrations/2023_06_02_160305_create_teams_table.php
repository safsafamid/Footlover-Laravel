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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('legacy_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('stadium_id')->nullable();
            $table->bigInteger('league_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('short_code')->nullable();
            $table->string('manager')->nullable();
            $table->string('founded')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('current_season_id')->nullable();
			$table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
