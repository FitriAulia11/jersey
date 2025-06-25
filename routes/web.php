<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jersey/{nama}', function ($nama) {
    // Daftar gambar & judul sesuai input
    $data = [
        'g (1).jpg' => 'Jersey Futsal Hijau Batik',
        'g (2).jpg' => 'Jersey Futsal Putih Abu',
        'g (9).jpg' => 'Jersey Badminton Batik Emas',
        // tambahkan sesuai nama file yang lain
    ];

    $judul = $data[$nama] ?? 'Detail Jersey';
    return view('jersey-detail', [
        'gambar' => $nama,
        'judul' => $judul
    ]);
});

Route::get('/desain', function () {
    return view('desain', [
        'judul' => 'Desain Jersey Bandung',
        'futsal' => ['g (1).jpg', 'g (2).jpg', 'g (3).jpg'],
        'badminton' => ['g (9).jpg', 'g (10).jpg', 'g (11).jpg']
        // tambahkan lainnya jika ada
    ]);
});

Route::get('/search-jersey', function (\Illuminate\Http\Request $request) {
    $keyword = strtolower($request->query('q'));

    $all = [
        'Jersey Futsal',
        'Jersey Gowes',
        'Jersey Volly',
        'Jersey Esports',
        'Jersey Badminton',
        'Jersey Custem',
    ];

    $results = array_filter($all, function($item) use ($keyword) {
        return str_contains(strtolower($item), $keyword);
    });

    return response()->json(array_values($results));
});

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/spesifikasi', function () {
    return view('spesifikasi');
})->name('spesifikasi');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

