<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tache;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View as ViewView;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   
     */
    public function index()
    {   
        $objectifListe=DB::table('objectifs')->select('*')->get();
        $tache=DB::table('taches')->select('*')->get();
        return view('admin.tache.tache',compact('tache','objectifListe'));
    }

   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shows($id)
    {
        $objectifListe=DB::table('objectifs')->select('*')->get();

        $tacheListe=DB::table('taches')
        ->select('*')->where(function ($query) use($id) {
            $query->where('objectif_id','=',$id);
        })
        ->get();

        //recuperer les taches en fonction des objectifs
        $tacheListeByObjectif=DB::table('objectifs')
        ->select('objectifs.*', 'taches.*',)
        ->leftJoin('taches','taches.objectif_id','=','objectifs.id')
        ->where(function ($query) use($id){
            $query->where('objectifs.id','=',$id);
        })
        ->get();


        //recuperer les taches en fonction des objectifs
        $tacheListeByObjectif=DB::table('objectifs')
        ->select('objectifs.id as objectif_id', 'taches.*','objectifs.*', 'taches.id as tache_id', 'users.id as user_id','users.*')
        ->leftJoin('taches','taches.objectif_id','=','objectifs.id')
        ->leftJoin('users','taches.user_id','=','users.id')
        ->where(function ($query) use($id){
            $query->where('objectifs.id','=',$id);
        })
        ->get();

        return View('admin.tache.tache',compact('tacheListe','objectifListe','tacheListeByObjectif'));

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
