<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JerseyController extends Controller
{
    /**
     * Tampilkan detail jersey berdasarkan nama file gambar.
     */
    public function show($gambar)
    {
        return view('jersey.detail', [
            'judul' => 'Detail Jersey',
            'gambar' => $gambar,
        ]);
    }
}
