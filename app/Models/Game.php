<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tagline',
        'teaser_hero',
        'description',
        'objective',
        'genres',
        'theme',
        'platform',
        'target_audience',
        'trailer_url',
    ];
}