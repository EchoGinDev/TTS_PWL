<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function proses(Request $request)
    {
        $nim = $request->input('nim');
        $nama = $request->input('nama');

        return view('hasil', compact('nim', 'nama'));
    }
}
