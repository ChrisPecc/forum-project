<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'thread_name',
        'user_id',
        'subsection_id',
        'section_id',
        'is_locked',
        'created_at',
        'updated_at'
    ];

    public function subsection()
    {
        return $this->belongsTo('App\Models\Subsection');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
