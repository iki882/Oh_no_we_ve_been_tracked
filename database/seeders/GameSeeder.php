<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::create([
            'title' => "We've Been Hacked",
            'tagline' => 'The system has been compromised. Can you uncover the truth?',
            'teaser_hero' => 'Sebuah insiden keamanan terjadi. Temukan apa yang sebenarnya terjadi dan amankan sistem.',
            'description' => 'Game edukasi cybersecurity yang mengajak pemain memahami berbagai ancaman keamanan digital melalui permainan.',
            'objective' => 'Mengenali ancaman cybersecurity dan mengambil keputusan yang tepat untuk mengamankan sistem.',
            'genres' => 'Educational, Adventure, Puzzle',
            'theme' => 'Cybersecurity',
            'platform' => 'PC / Web',
            'target_audience' => 'Students / Beginners',
            'trailer_url' => null,
        ]);
    }
}