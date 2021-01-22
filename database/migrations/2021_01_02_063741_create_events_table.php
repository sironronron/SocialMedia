<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_types', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id')->index();
            
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);

            $table->timestamps();
        });

        Schema::create('event_subtypes', function (Blueprint $table) {
            $table->id();
            $table->string('public_id');

            $table->unsignedBigInteger('event_type_id');
            $table->foreign('event_type_id')->references('id')->on('event_types')->onDelete('cascade');

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);

            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('public_id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('event_type_id');
            $table->foreign('event_type_id')->references('id')->on('event_types')->onDelete('cascade');
            $table->unsignedBigInteger('event_subtype_id');
            $table->foreign('event_subtype_id')->references('id')->on('event_subtypes')->onDelete('cascade');

            $table->text('hosts');

            $table->string('name');
            $table->text('description');
            $table->string('tag_line');

            $table->string('image_large_url');
            $table->string('image_medium_url');
            $table->string('image_small_url');
            
            $table->timestamp('start_time');
            $table->timestamp('end_time')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->enum('privacy_settings', ['Open', 'Closed']);

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
        Schema::dropIfExists(['events', 'event_types', 'event_subtypes']);
    }
}
