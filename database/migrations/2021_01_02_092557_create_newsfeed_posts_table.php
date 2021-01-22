<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsfeedPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsfeed_posts', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('photo_id');
            $table->foreign('photo_id')->references('id')->on('user_photos')->onDelete('cascade');
            $table->longText('caption')->nullable();
            $table->text('crawled_data')->nullable();
            $table->integer('shares_count')->default(0);
            $table->integer('comments_count')->default(0);
            $table->integer('reactions_count')->default(0);
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
        Schema::dropIfExists('newsfeed_posts');
    }
}
