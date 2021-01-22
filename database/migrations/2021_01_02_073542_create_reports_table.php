<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('participant_id');
            $table->foreign('participant_id')->references('id')->on('conversation_participants')->onDelete('cascade');
            $table->enum('report_type', ['Harassment', 'Suicide or Self-Injury', 'Pretending to be Someone', 'Sharing Inappropriate Things', 'Hate Speech', 'Unauthorized Sales', 'Other']);
            $table->longText('notes')->nullable();
            $table->enum('status', ['Pending', 'False Report', 'On-process', 'Processed', 'Retracted']);
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
        Schema::dropIfExists('reports');
    }
}
