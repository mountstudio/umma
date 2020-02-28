<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableQuestionCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('table_questions_category');
        Schema::create('question_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
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
        Schema::dropIfExists('question_categories');
        Schema::create('table_questions_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
    }
}
