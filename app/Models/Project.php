<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Models\File;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function File(){
        return $this->hasMany(File::class);
    }
}
