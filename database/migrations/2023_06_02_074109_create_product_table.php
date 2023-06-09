<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('alt')->nullable();
            $table->text('description')->nullable();
            $table->text('detail')->nullable();
            $table->double('price');
            $table->double('price_sale');
            $table->integer('stock');
            $table->string('thumb');
            $table->string('image');
            $table->integer('image_detail_id');
            $table->integer('category_id');
            $table->integer('view')->default(0);
            $table->boolean('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('product');
    }
}
