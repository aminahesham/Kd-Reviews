<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    use HasFactory;
    protected $table='dramas';

    protected $fillable = [
        'name' ,
        'photo',
        'rate',
        'story' ,
        'cast',
        'status',
        'country',
        'classification',
        'year',
        'trending',
    ];


    


    
}
