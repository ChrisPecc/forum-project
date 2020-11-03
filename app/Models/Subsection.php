<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    use HasFactory;

    protected $table = 'subsections';

    protected $fillable = [
        'subsection_name',
        'section_id'
    ];

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function threads(){
        return $this->hasMany('App\Models\Thread');
    }
}
