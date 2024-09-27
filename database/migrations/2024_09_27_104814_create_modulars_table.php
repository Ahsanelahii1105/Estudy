<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModularsTable extends Migration
{
    public function up()
    {
        Schema::create('modulars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subjectname');
            $table->string('class');

            $table->string('a_section_question');
            $table->string('a_awnser');
            $table->string('a_section_questiontwo');
            $table->string('a_awnsertwo');
            $table->string('a_section_questionthree');
            $table->string('a_awnserthree');
            $table->string('a_section_questionfour');
            $table->string('a_awnserfour');
            $table->string('a_section_questionfive');
            $table->string('a_awnserfive');

            $table->string('b_section_question');
            $table->string('b_awnser');
            $table->string('b_section_questiontwo');
            $table->string('b_awnsertwo');
            $table->string('b_section_questionthree');
            $table->string('b_awnserthree');
            $table->string('b_section_questionfour');
            $table->string('b_awnserfour');
            $table->string('b_section_questionfive');
            $table->string('b_awnserfive');

            $table->string('c_section_question');
            $table->string('c_awnser');
            $table->string('c_section_questiontwo');
            $table->string('c_awnsertwo');
            $table->string('c_section_questionthree');
            $table->string('c_awnserthree');
            $table->string('c_section_questionfour');
            $table->string('c_awnserfour');
            $table->string('c_section_questionfive');
            $table->string('c_awnserfive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modulars');
    }
}
