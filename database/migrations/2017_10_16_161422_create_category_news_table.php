<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_news', function (Blueprint $table) {
            $table->unsignedInteger('news_id');
            $table->unsignedInteger('category_id');
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();

            $table->primary(['news_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_news');
    }
}
