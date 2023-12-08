<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techset extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function Project(){
        return $this->hasMany('App\Models\Project');
    }
}
