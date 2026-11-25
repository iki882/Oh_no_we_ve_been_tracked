<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/how-to-play', function () {
    return view('pages.how-to-play');
})->name('how-to-play');

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

// Rute untuk Halaman Handler Manual (Agar Navbar-nya ikut tampil)
Route::get('/handler-manual', function () {
    return view('handler Field Manual');
})->name('handler-manual');

// Rute untuk menampilkan halaman leaderboard
Route::get('/leaderboard', function () {
    $path = public_path('oh-no-leaderboard.json');
    $leaderboardData = [];
    
    if (file_exists($path)) {
        $json = file_get_contents($path);
        $leaderboardData = json_decode($json, true);
    }
    
    return view('pages.leaderboard', compact('leaderboardData'));
});

// Rute untuk memproses upload file JSON leaderboard baru
Route::post('/leaderboard/import', function (Request $request) {
    $request->validate([
        'json_file' => 'required|file|mimes:json,txt',
    ]);

    $file = $request->file('json_file');
    $file->move(public_path(), 'oh-no-leaderboard.json');

    return redirect('/leaderboard')->with('success', 'File leaderboard berhasil di-import dan diperbarui!');
});

// Rute untuk menghapus / mereset file JSON leaderboard
Route::post('/leaderboard/reset', function () {
    $path = public_path('oh-no-leaderboard.json');
    
    if (file_exists($path)) {
        unlink($path);
    }

    return redirect('/leaderboard')->with('success', 'Data leaderboard berhasil dihapus/direset!');
});