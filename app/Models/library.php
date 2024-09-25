<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}

