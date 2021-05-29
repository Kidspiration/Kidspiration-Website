<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('grade')->nullable()->default(NULL);
            $table->string('name')->nullable()->default(NULL);
            $table->string('writer')->nullable()->default(NULL);
            $table->string('quiz_1')->nullable()->default(NULL);
            $table->text('quiz_1_answer')->nullable()->default(NULL);
            $table->text('quiz_1_correct')->nullable()->default(NULL);
            $table->text('quiz_1_option1')->nullable()->default(NULL);
            $table->text('quiz_1_option2')->nullable()->default(NULL);
            $table->text('quiz_1_option3')->nullable()->default(NULL);
            $table->text('quiz_1_option4')->nullable()->default(NULL);
            $table->text('quiz_1_option5')->nullable()->default(NULL);
            $table->string('quiz_2')->nullable()->default(NULL);
            $table->text('quiz_2_answer')->nullable()->default(NULL);
            $table->text('quiz_2_correct')->nullable()->default(NULL);
            $table->text('quiz_2_option1')->nullable()->default(NULL);
            $table->text('quiz_2_option2')->nullable()->default(NULL);
            $table->text('quiz_2_option3')->nullable()->default(NULL);
            $table->text('quiz_2_option4')->nullable()->default(NULL);
            $table->text('quiz_2_option5')->nullable()->default(NULL);
            $table->string('quiz_3')->nullable()->default(NULL);
            $table->text('quiz_3_answer')->nullable()->default(NULL);
            $table->text('quiz_3_correct')->nullable()->default(NULL);
            $table->text('quiz_3_option1')->nullable()->default(NULL);
            $table->text('quiz_3_option2')->nullable()->default(NULL);
            $table->text('quiz_3_option3')->nullable()->default(NULL);
            $table->text('quiz_3_option4')->nullable()->default(NULL);
            $table->text('quiz_3_option5')->nullable()->default(NULL);
            $table->string('quiz_4')->nullable()->default(NULL);
            $table->text('quiz_4_answer')->nullable()->default(NULL);
            $table->text('quiz_4_correct')->nullable()->default(NULL);
            $table->text('quiz_4_option1')->nullable()->default(NULL);
            $table->text('quiz_4_option2')->nullable()->default(NULL);
            $table->text('quiz_4_option3')->nullable()->default(NULL);
            $table->text('quiz_4_option4')->nullable()->default(NULL);
            $table->text('quiz_4_option5')->nullable()->default(NULL);
            $table->string('quiz_5')->nullable()->default(NULL);
            $table->text('quiz_5_answer')->nullable()->default(NULL);
            $table->text('quiz_5_correct')->nullable()->default(NULL);
            $table->text('quiz_5_option1')->nullable()->default(NULL);
            $table->text('quiz_5_option2')->nullable()->default(NULL);
            $table->text('quiz_5_option3')->nullable()->default(NULL);
            $table->text('quiz_5_option4')->nullable()->default(NULL);
            $table->text('quiz_5_option5')->nullable()->default(NULL);
            $table->string('quiz_6')->nullable()->default(NULL);
            $table->text('quiz_6_answer')->nullable()->default(NULL);
            $table->text('quiz_6_correct')->nullable()->default(NULL);
            $table->text('quiz_6_option1')->nullable()->default(NULL);
            $table->text('quiz_6_option2')->nullable()->default(NULL);
            $table->text('quiz_6_option3')->nullable()->default(NULL);
            $table->text('quiz_6_option4')->nullable()->default(NULL);
            $table->text('quiz_6_option5')->nullable()->default(NULL);
            $table->string('quiz_7')->nullable()->default(NULL);
            $table->text('quiz_7_answer')->nullable()->default(NULL);
            $table->text('quiz_7_correct')->nullable()->default(NULL);
            $table->text('quiz_7_option1')->nullable()->default(NULL);
            $table->text('quiz_7_option2')->nullable()->default(NULL);
            $table->text('quiz_7_option3')->nullable()->default(NULL);
            $table->text('quiz_7_option4')->nullable()->default(NULL);
            $table->text('quiz_7_option5')->nullable()->default(NULL);
            $table->string('quiz_8')->nullable()->default(NULL);
            $table->text('quiz_8_answer')->nullable()->default(NULL);
            $table->text('quiz_8_correct')->nullable()->default(NULL);
            $table->text('quiz_8_option1')->nullable()->default(NULL);
            $table->text('quiz_8_option2')->nullable()->default(NULL);
            $table->text('quiz_8_option3')->nullable()->default(NULL);
            $table->text('quiz_8_option4')->nullable()->default(NULL);
            $table->text('quiz_8_option5')->nullable()->default(NULL);
            $table->string('quiz_9')->nullable()->default(NULL);
            $table->text('quiz_9_answer')->nullable()->default(NULL);
            $table->text('quiz_9_correct')->nullable()->default(NULL);
            $table->text('quiz_9_option1')->nullable()->default(NULL);
            $table->text('quiz_9_option2')->nullable()->default(NULL);
            $table->text('quiz_9_option3')->nullable()->default(NULL);
            $table->text('quiz_9_option4')->nullable()->default(NULL);
            $table->text('quiz_9_option5')->nullable()->default(NULL);
            $table->string('quiz_10')->nullable()->default(NULL);
            $table->text('quiz_10_answer')->nullable()->default(NULL);
            $table->text('quiz_10_correct')->nullable()->default(NULL);
            $table->text('quiz_10_option1')->nullable()->default(NULL);
            $table->text('quiz_10_option2')->nullable()->default(NULL);
            $table->text('quiz_10_option3')->nullable()->default(NULL);
            $table->text('quiz_10_option4')->nullable()->default(NULL);
            $table->text('quiz_10_option5')->nullable()->default(NULL);
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
            $table->string('image_10')->nullable();
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
        Schema::dropIfExists('quizzes');
    }
}
