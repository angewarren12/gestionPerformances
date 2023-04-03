<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Objectif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        $objectifCount=DB::table('Objectifs')->count();
        $userCount=DB::table('users')->count();

        return view('adminHome',compact('objectifCount','userCount'));
    }
    public function adminEmploye()
    {
        return view('admin.employe');
    }
    


}
