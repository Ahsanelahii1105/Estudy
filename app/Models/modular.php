<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modular extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subjectname',
        'class',

        'a_section_question',
        'a_awnser',
        'a_section_questiontwo',
        'a_awnsertwo',
        'a_section_questionthree',
        'a_awnserthree',
        'a_section_questionfour',
        'a_awnserfour',
        'a_section_questionfive',
        'a_awnserfive',

        'b_section_question',
        'b_awnser',
        'b_section_questiontwo',
        'b_awnsertwo',
        'b_section_questionthree',
        'b_awnserthree',
        'b_section_questionfour',
        'b_awnserfour',
        'b_section_questionfive',
        'b_awnserfive',

        'c_section_question',
        'c_awnser',
        'c_section_questiontwo',
        'c_awnsertwo',
        'c_section_questionthree',
        'c_awnserthree',
        'c_section_questionfour',
        'c_awnserfour',
        'c_section_questionfive',
        'c_awnserfive',
    ];
}
