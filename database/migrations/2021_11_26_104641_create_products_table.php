<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('price');
            $table->boolean('is_ready')->default(true);
            $table->string('colour');
            $table->string('size');
            $table->float('weight');
            $table->string('image');
            $table->string('description')->default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusamus eveniet blanditiis quam fuga maiores assumenda dolorum deserunt in porro, beatae, nulla reprehenderit necessitatibus ipsa consequatur commodi similique a saepe.');

            $table->integer('id_category');
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
        Schema::dropIfExists('products');
    }
}
