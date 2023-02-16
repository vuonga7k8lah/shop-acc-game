<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        if(!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('price');
                $table->string('gallery_image_id');
                $table->string('feature_image_path')->nullable();
                $table->text('product_tags');
                $table->text('content');
                $table->text('desc');
                $table->bigInteger('category_id')->unsigned();
                $table->timestamps();
                $table->bigInteger('user_id')->unsigned()->index(); // this is working
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
                $table->foreign('category_id')->references('id')->on('category_products')->onDelete('cascade');
            });
        }

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
