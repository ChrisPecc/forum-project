<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_name'
    ];

    public function subsections(){
        return $this->hasMany('App\Models\Subsection');
    }

    public function threads() {
        return $this->hasMany('App\Models\Thread');
    }
    
}
