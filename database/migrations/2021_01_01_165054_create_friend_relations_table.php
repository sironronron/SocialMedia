<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_relations', function (Blueprint $table) {
            $table->id();
            $table->boolean('are_friends')->default(0);
            $table->unsignedBigInteger('user_id_1');
            $table->foreign('user_id_1')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id_2');
            $table->foreign('user_id_2')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('friend_relations');
    }
}
