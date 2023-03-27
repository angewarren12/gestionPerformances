<?php

namespace App\Http\Controllers;

use App\Models\Objectif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjectifController extends Controller
{


    
    public function index()
    {
        $objectif=DB::table('objectifs')
        ->select('*')
        ->get();
        

        return view('admin.objectif')->with(compact('objectif'));
        
    }
}
