<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPhotoAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_photo_albums', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('cover_photo_url');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('user_locations')->onDelete('cascade');
            $table->integer('size')->default(0);
            $table->enum('privacy_setting', ['Public', 'Friends', 'OnlyMe']);
            $table->unsignedBigInteger('user_privacy_id')->default(0);
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
        Schema::dropIfExists('user_photo_albums');
    }
}
