<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'config';
    protected $fillable = [
       'colour_background',
        'colour_text_background',
        'colour_titles',
        'colour_text',
        'facebook',
        'twitter',
        'instagram',
        'email',
        'phone'
    ];
}
