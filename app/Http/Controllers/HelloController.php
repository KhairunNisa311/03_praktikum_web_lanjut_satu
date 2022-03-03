<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function index()
    {
        return view('blog.konten')
                    ->with('title', 'TI-2F/Kel-10');
    }

    public function product1(){
        return view('blog.product')
                    ->with('title', 'TI-2F/Kel-10')
                    ->with('judul', 'Isi product')
                    ->with('deskripsi', 'Pilihan Buku Yang Tersedia');
    }

    public function news1($news){
        return view('blog.news')
                    ->with('title', 'TI-2F/Kel-10')
                    ->with('judul', 'Promo Buku Terbaru');
        }

        public function program1(){
            return view('blog.program')
                        ->with('title', 'TI-2F/Kel-10')
                        ->with('judul', 'Daftar Program')
                        ->with('deskripsi', 'Program GEMBAC (Gemar Membaca)');
        }

        public function aboutUs()
    {
        return view('blog.aboutUs')
                    ->with('title', 'TI-2F/Kel-10')
                    ->with('judul', 'Tentang Kami');
    }

    public function contactUs()
    {
        return view('blog.contactUs')
                    ->with('title', 'TI-2F/Kel-10')
                    ->with('judul', 'Silahkan Hubungi Kami');
    }
}