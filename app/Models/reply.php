<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    protected $fillable = ['reply', 'library_id']; // library_id is the foreign key

    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}

