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
        

        return view('admin.objectif.objectif')->with(compact('objectif'));
        
    }

    public function objectifView($id)
    {
        $objectif=Objectif::find($id);
        

        return view('admin.objectif.objectifView');
        
    }

}

