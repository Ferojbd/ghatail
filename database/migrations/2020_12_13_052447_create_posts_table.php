<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->text('short_details')->nullable();
            $table->text('newsbody');
            $table->string('keywords')->nullable();
            $table->string('publisher');
            $table->string('publisher_id')->nullable();
            $table->dateTime('post_date')->default('2021-01-17 22:47:47');
            $table->string('status')->default('Active');
            $table->boolean('deleted')->default(0);
            $table->string('news_img')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
