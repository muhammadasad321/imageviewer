<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'images';

    protected $fillable = [
        
        'categories_id',
        'name',
        'image',
        'status',
        
    ];
}
