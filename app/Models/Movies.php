<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table='movies';

    protected $fillable = [
        'name' ,
        'story' ,
        'photo',
        'rate',
        'cast',
        'type',
        'country',
        'classification',
        'year',
        'trending',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
      }
}
