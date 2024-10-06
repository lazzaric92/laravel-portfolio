<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dev extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'github' ];

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
