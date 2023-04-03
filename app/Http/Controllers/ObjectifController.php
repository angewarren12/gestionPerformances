<?php

namespace App\Http\Controllers;

use App\Models\Objectif;
use App\Models\Tache;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjectifController extends Controller
{


    
    public function index()
    {
        $objectif=DB::table('objectifs')->select('*')->get();
        

        return view('admin.objectif.objectif')->with(compact('objectif'));
        
    }

    public function objectifView($id)
    {
        $liste_user=User::all();
        $objectif=Objectif::find($id);
        $user_obj=DB::table('employe_objectif')
        ->select('users.*', 'employe_objectif.user_id', 'objectifs.*')
        ->leftJoin('objectifs','employe_objectif.objectif_id','=','objectifs.id')
        ->leftJoin('users','employe_objectif.user_id','=','users.id')
        ->where(function ($query) use($id) {
            $query->where('employe_objectif.user_id','=',$id);
        })
        ->get();


        $tache_all=DB::table('objectifs')
        ->select('objectifs.id', 'taches.*', 'users.*')
        ->leftJoin('taches','taches.objectif_id','=','objectifs.id')
        ->leftJoin('users','taches.user_id','=','users.id')
        ->where(function ($query) use($id) {
            $query->where('objectifs.id','=',$id);
        })
        ->get();

        $completed_tasks=DB::table('objectifs')
        ->select('objectifs.id', 'taches.*', 'users.*')
        ->leftJoin('taches','taches.objectif_id','=','objectifs.id')
        ->leftJoin('users','taches.user_id','=','users.id')
        ->where(function ($query){
            $query->where('taches.status','=','terminer');
        })
        ->get();

        $pending_tasks=DB::table('objectifs')
        ->select('objectifs.id', 'taches.*', 'users.*')
        ->leftJoin('taches','taches.objectif_id','=','objectifs.id')
        ->leftJoin('users','taches.user_id','=','users.id')
        ->where(function ($query){
            $query->where('taches.status','=','en cours');
        })
        ->get();
        
        return view('admin.objectif.objectifView',compact('objectif','user_obj','liste_user','tache_all','completed_tasks','pending_tasks'));
        
    }





    public function create()
    {
        return view('admin.objectif.createObjectif'); 
    }

    public function ouvreUpdateObjectif($id){
        $objectif = Objectif::findOrFail($id);

        return view('admin.objectif.updateObjectif', compact('objectif'));

    }
    public function objectifViewAssigner(request $request, $id,$idObjectif){
        $objectif = Objectif::findOrFail($idObjectif);
        $user = User::findOrFail($id);


         return view('admin.objectifView', compact('objectif','user'));
    }




    

 

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date_debut' => ['required'],
            'date_fin' => 'required',
            


        ]);
        
        Objectif::create([
            "titre"=>$request->titre,
            "description"=>$request->description,
            "date_debut"=>$request->date_debut,
            "date_fin"=>$request->date_fin,
            
            ]
            );

        return redirect()->route('admin.objectif')->with('success','Company has been created successfully.');
    }

   

    public function update(Request $request, $id)
    {
       
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            
        ]);
        
        $crud = Objectif::find($id);  
        $crud->titre =  $request->get('titre');  
        $crud->description = $request->get('description');  
        $crud->date_debut = $request->get('date_debut');  
        $crud->date_fin = $request->get('date_fin');  
        
        $crud->save();  
        return redirect()->route('admin.objectif')->with('success','Company Has Been updated successfully');
    }

    public function delete($id)
    {
        $crud = Objectif::find($id);  
        
        
        $crud->delete();  
        return redirect()->route('admin.objectif')->with('success','Company has been deleted successfully');
    }


    public function assigneUserObjectif(Request $request,$id){
        
        
        return redirect()->route('admin.objectif');
    }



    public function updateStatusTache(Request $request,$id){
        $request->validate([
            
            'status' => 'required',
            
        ]);
        
        $updateStatusTache = Tache::find($id);  
       
        $updateStatusTache->status = $request->get('status'); 
        if($request->status == 'en cours'){
            $updateStatusTache->status='terminer';
        } 
        
        $updateStatusTache->save();  



        if($request->status == 'terminer'){
            $disable='checked disabled';
        }
        elseif($request->status == 'en cours' or 'en attente'){
            $disable='';
        }
        return redirect()->route('admin.objectif',compact('disable'))->with('success','status Has Been updated successfully');


    }


}

