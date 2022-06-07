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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table-> string('unit')->nullabl();
            $table->double('price',82)->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->unsignedBigIntger('catagory_id')->foreign('catagory_id')->references('id')->on('catagories')->OnDelete('casecad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
