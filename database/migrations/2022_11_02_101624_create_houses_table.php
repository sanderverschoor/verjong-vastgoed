<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('building_name')->nullable();
            $table->string('street_name');
            $table->string('house_number');
            $table->string('house_number_addition')->nullable();
            $table->string('postal_code');
            $table->string('city');
            $table->string('province');;
            $table->boolean('smoking_allowed')->default(false);
            $table->boolean('pets_allowed')->default(false);
            $table->boolean('furnished')->default(false);
            $table->boolean('garden')->default(false);
            $table->boolean('balcony')->default(false);
            $table->text('description');
            $table->integer('rent');
            $table->boolean('rent_with_extra_costs')->default(false);
            $table->integer('floors');
            $table->integer('surface');
            $table->integer('rooms');
            $table->text('image')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
