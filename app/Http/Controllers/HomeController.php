<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View //type 0 == user
    {
        return view('home');
    }

    public function superadminHome(): View  //type 1 == superadmin
    {
        return view('superadminHome');
    }

    public function adminHome(): View //type 2 == admin
    {
        return view('adminHome');
    }

    public function dosenHome(): View //type 3 == dosen
    {
        return view('dosenHome');
    }

    public function mahasiswaHome(): View //type 4 == mahasiswa
    {
        return view('mahasiswaHome');
    }

    public function tendikHome(): View //type 5 == tendik
    {
        return view('tendikHome');
    }

    public function adminakademikHome(): View //type 6 == adminakademik
    {
        return view('adminakademikHome');
    }

    public function adminkeuanganHome(): View //type 7 == adminkeuangan
    {
        return view('adminkeuanganHome');
    }

    public function direkturHome(): View //type 8 == direktur
    {
        return view('direkturHome');
    }

    public function wakildirektur1Home(): View //type 9 == wakildirektur1
    {
        return view('wakildirektur1Home');
    }

    public function wakildirektur2Home(): View //type 10 == wakildirektur2
    {
        return view('wakildirektur2Home');
    }

    public function wakildirektur3Home(): View //type 11 == wakildirektur3
    {
        return view('wakildirektur3Home');
    }

    public function adminlppmHome(): View //type 12 == adminlppm
    {
        return view('adminlppmHome');
    }

    public function adminsdmHome(): View //type 13 == adminsdm
    {
        return view('adminsdmHome');
    }
}
