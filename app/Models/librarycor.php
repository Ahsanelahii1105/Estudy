<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class librarycor extends Model
{
    public function replycors()
    {
        return $this->hasMany(replycor::class);
    }
}
