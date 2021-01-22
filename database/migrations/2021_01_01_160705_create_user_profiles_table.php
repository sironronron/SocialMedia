<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();
            
            // Basic Info
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nickname')->nullable();
            $table->text('about_me')->nullable();
            $table->date('birthday');
            $table->enum('gender', ['Unspecified', 'Male', 'Female']);
            $table->boolean('is_application_user')->default(1);

            // Images
            $table->string('picture_big_url')->nullable();
            $table->string('picture_small_url')->nullable();
            $table->string('picture_url')->nullable();

            $table->string('cover_picture_big_url')->nullable();
            $table->string('cover_picture_small_url')->nullable();
            $table->string('cover_picture_url')->nullable();

            // Other Info
            $table->string('polictical_view')->nullable();
            $table->string('religion')->nullable();
            $table->enum('looking_for', ['Dating', 'Friendship', 'RandomPlay', 'Relationship', 'Unspecified', 'WhateverICanGet']);
            $table->enum('looking_for_genders', ['Unspecified', 'Male', 'Female']);
            $table->enum('relationship_status', ['Engaged', 'InAnOpenRelationship', 'InARelationship', 'IsSingle', 'ItsComplicated', 'Married', 'Unspecified']);
            $table->unsignedBigInteger('significant_other_id')->nullable();
            $table->foreign('significant_other_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('affiliate_code');
            $table->text('work_places')->nullable();
            $table->text('schools')->nullable();
        
            // Counts
            $table->integer('wall_count')->default(0);
            $table->integer('work_place_count')->default(0);
            $table->integer('school_count')->default(0);
            $table->integer('notes_count')->default(0);
            $table->integer('affiliation_count')->default(0);


            $table->enum('privacy_setting', ['Public', 'Friends', 'OnlyMe']);

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
        Schema::dropIfExists('user_profiles');
    }
}
