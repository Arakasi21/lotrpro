<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagePath');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
