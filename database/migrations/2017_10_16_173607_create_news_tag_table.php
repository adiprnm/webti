<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tag', function (Blueprint $table) {
            $table->unsignedInteger('news_id');
            $table->unsignedInteger('tag_id');
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();

            $table->primary(['news_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_tag');
    }
}
