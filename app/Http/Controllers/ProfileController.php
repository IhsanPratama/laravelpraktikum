<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return 'Ini Halaman Profile';
    }

    public function detail(){
        $nama = 'Dewi Wulan Sari';
        return view('profile.detail', compact('nama'));
    }

    public function nama($nama){
        return view('profile.nama', compact('nama'));
    }
    public function identitas(){
        $data = [
            'NPM' => 177006021,
            'Nama' => 'Dewi Wulan Sari',
            'Angkatan' => 2017,
            'Jenis Kelamin' => 'Perempuan'
        ];
        return view('profile.identitas', compact('data'));
    }
}
