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
            $table->string('b_section_question');
            $table->string('b_awnser');
            $table->string('c_section_question');
            $table->string('c_awnser');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modulars');
    }
}
