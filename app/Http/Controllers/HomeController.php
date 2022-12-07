<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Pricing;
use App\Models\Transportasi;


class HomeController extends Controller
{
    function index(){
        //memanggil view landing page pada folder frontpage
        //disertai dengan variable title yang dapat ditampilkan pada layout
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }

    function first(){
        return view('frontpage.firstpage', ['title' => "first page"]);
    }

    function about(){
        return view('frontpage.about', ['title' => "About page"]);
    }

    function contact(){
        return view('frontpage.contact', ['title' => "Contact page"]);
    }

    public function tbwisata(){
        $wisata= Wisata::all();
        return view('elo.wisata', compact('wisata'));
    }

    public function tbpricing(){
        $pricing= Pricing::all();
        return view('elo.pricing', compact('pricing'));
    }

    public function tbtransportasi(){
        $transportasi= transportasi::all();
        return view('elo.pricing', compact('transportasi'));
    }

    public function input(){
        $pricing= Pricing::all();
        return view('backpage.input')->with('input', $pricing); //view ke input dengan mengambil data pricing sebagai variabel input
    }
}
