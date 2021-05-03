<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('trn_teacher_id')->constrained('trn_teachers');
            $table->integer('result');
            $table->timestamp('lesson_datetime')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trn_evaluation');
    }
}
