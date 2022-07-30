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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->unique();
            $table->unsignedBigInteger("rarity_id");
            $table->text("description")->nullable();
            $table->unsignedBigInteger("weapon_id");
            $table->unsignedBigInteger("element_id");
            $table->text("image_link")->nullable();
            $table->timestamps();

            $table->foreign("rarity_id")->references('id')->on('rarities');
            $table->foreign("weapon_id")->references('id')->on('weapons');
            $table->foreign("element_id")->references('id')->on('elements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
