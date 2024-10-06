<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'github',
        'date',
        'description',
        'is_visible',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
