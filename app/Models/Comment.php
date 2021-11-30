<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';

    protected $fillable = [
        'comment',
        'user_id',
        'drama_id',
        'movie_id',
        'user_name',
        'created_at',
    ];

    public function users()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
   
}
