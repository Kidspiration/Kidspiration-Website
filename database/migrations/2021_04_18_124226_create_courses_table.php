<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('grade')->nullable()->default(NULL);
            $table->char('course',8)->unique();
            $table->string('name')->nullable()->default(NULL);
            $table->string('writer')->nullable()->default(NULL);
            $table->text('material_1')->nullable()->default(NULL);
            $table->string('image_1')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
