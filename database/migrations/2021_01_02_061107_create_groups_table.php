<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_types', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('group_subtypes', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();
            $table->unsignedBigInteger('group_type_id');
            $table->foreign('group_type_id')->references('id')->on('group_types')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('group_type_id');
            $table->foreign('group_type_id')->references('id')->on('group_types')->onDelete('cascade');
            $table->unsignedBigInteger('group_subtype_id');
            $table->foreign('group_subtype_id')->references('id')->on('group_subtypes')->onDelete('cascade');

            $table->string('image_big_url');
            $table->string('image_medium_url');
            $table->string('image_small_url');

            $table->string('name');
            $table->string('office');
            $table->string('website');
            $table->unsignedBigInteger('venue_location_id');
            $table->foreign('venue_location_id')->references('id')->on('locations')->onDelete('cascade');

            $table->enum('privacy_settings', ['Open', 'Closed']);

            $table->timestamps();
        });

        Schema::create('group_memberships', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            
            $table->enum('membership_type', ['NotReplied', 'Member', 'Officer', 'Admin']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(['groups', 'group_types', 'group_subtypes', 'group_memberships']);
    }
}
