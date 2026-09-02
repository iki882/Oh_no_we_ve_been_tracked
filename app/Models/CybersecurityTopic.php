<?php

namespace App\Models;

use Illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CybersecurityTopic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'description',
        'in_game',
    ];
}
