<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replycor extends Model
{
    protected $fillable = ['reply', 'librarycor_id'];

    public function librarycor()
    {
        return $this->belongsTo(librarycor::class);
    }
}
