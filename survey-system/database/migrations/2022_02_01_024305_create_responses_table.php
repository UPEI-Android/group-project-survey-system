<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();//Id that we aint not gunna use

            //$table->foreignId('survey_id')->constrained()->default(0);//Just try to fix this 
            //$table->foreignId('question_id')->constrained()->default(0);//Just trying to fix this 
            
            $table->bigInteger('survey_id')->default(0);//These are temporary just to make the thing working firs
            $table->bigInteger('question_id')->default(0);//These are temporary just to make the thing working firs
            

            $table->string('response_text')->nullable();//nullability will be surpassed with validation testing, response will never be null
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('option')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
