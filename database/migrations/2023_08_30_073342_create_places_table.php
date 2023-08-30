<?php
// database/migrations/xxxx_xx_xx_create_places_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('state');
            $table->string('best_month_to_visit');
            $table->string('best_season_to_visit');
            $table->string('photo_name')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('places');
    }
}
