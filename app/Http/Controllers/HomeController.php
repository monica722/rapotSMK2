<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru_Mapel;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Raport;
use App\Models\Role;
use App\Models\Semester;
use App\Models\Siswa;
use App\Models\Walikelas;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // auth()->user()->assignRole('siswa');
        /* if(Auth::user()->hasRole('admin')){
            $guru = Guru_Mapel::all();
            $jurusan = Jurusan::all();
            $kelas = Kelas::all();
            $mapel = Matapelajaran::all();
        } */
        return view('home');
    }
}
