<?php

namespace App\Models;

use Illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillablee = [
        'title',
        'tagline',
        'teaser_hero',
        'description',
        'objective',
        'genres',
        'theme',
        'platform',
        'target_audience',
        'tailer_url',
    ];
}
