<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function prefecture()
    {
        return $this->hasMany(Prefecture::class);
    }
}
