<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekomendasi;
use App\Promo;
use App\KodePromo;
use App\Gallery;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $kode_promo = App\Promo::find(1)
        $rekomendasi = Rekomendasi::all();
        $promo = Promo::all();
        $kode_promo = KodePromo::all();
        $gallery =  Gallery::all();
        $article = Article::all();
        return view('home/home', ['rekomendasi' => $rekomendasi, 'promo' => $promo, 'kode_promo' => $kode_promo, 'gallery' => $gallery, 'article' => $article]);
    }
}
