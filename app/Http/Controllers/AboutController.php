<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        return  view('about', [
            'nama' => 'Rizqi Harisma U.',
            'nidn' => '07654321',
            'matakuliah' => 'Pemrograman Web Lanjut',
            'framework' => 'Laravel 12'
        ]);
    }
}
