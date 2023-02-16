<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::enableForeignKeyConstraints();
//        if(!Schema::hasTable('category_types')) {
//            Schema::create('category_types', function (Blueprint $table) {
//                $table->id();
//                $table->string('category_type_name');
//                $table->integer('image')->unsigned();
//                $table->string('desc');
//                $table->timestamps();
//                $table->foreign('image')->references('id')->on('images');
//            });
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_types');
    }
}
