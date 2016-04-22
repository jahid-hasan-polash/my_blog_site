<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tag', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('blog_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('blog_id')->references('id')->on('blog')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_tag');
    }
}
