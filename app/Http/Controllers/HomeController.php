<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class HomeController extends Controller
{
    public function index()
    {
        // kalau tabel punya kolom 'nama'
        $anggotas = Anggota::orderBy('nama', 'asc')->get();

        return view('pages.home', compact('anggotas'));
    }
}
