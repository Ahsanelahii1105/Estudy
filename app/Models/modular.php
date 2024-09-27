<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modular extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subjectname',
        'class',
        'a_section_question',
        'a_awnser',
        'b_section_question',
        'b_awnser',
        'c_section_question',
        'c_awnser',
    ];
}
