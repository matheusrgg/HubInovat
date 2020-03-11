<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
   
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 300);
            $table->string('descricao', 300);
            $table->integer('quantidade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->float('preco', 10, 2);
            $table->timestamps();
        });
    }





    public function down()
    {
        Schema::dropIfExists('products');
    }
}
