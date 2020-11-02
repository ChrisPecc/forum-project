<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    use HasFactory;

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function threads(){
        return $this->hasMany('App\Thread');
    }
}
