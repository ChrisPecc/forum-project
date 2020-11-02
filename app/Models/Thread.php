<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    public function subsection()
    {
        return $this->belongsTo('App\Subsection');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
