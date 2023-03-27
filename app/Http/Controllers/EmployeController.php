<?php
namespace Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Relations\Pivot;

namespace App\Http\Controllers;
use App\Models\Objectif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeController extends Controller
{
    public function index()
    {   
        $employe=User::orderBy("name","asc")->get();
        return view('admin.employe.employe',compact("employe"));
    }
    public function ajoutEmploye()
    {
       
        return view('admin.employe.createEmploye');
    }

    public function store(Request $request)
    {   


        $userData =$request->validate([
        'name'=>'required',
        'prenom'=>'required',
        'date_naissance'=>'required',
        'contact'=>'required',
        'matricule'=>'required',
        'adresse'=>'required',
        'sexe'=>'required',
        'poste'=>'required',
        'avatar'=>'', 'image', 'mimes:jpeg,png,svg,jpg,bmp','max:5000',
        'email'=>'required',
        'password'=>'required',
        'is_admin'=>'required',
        
       ]);
       if(request()->has('avatar')){
        $avatarUpload=request()->file('avatar');
        $avatarName=time().'.'.$avatarUpload->getClientOriginalExtension() ;
        $avatarPath=public_path('/assets/img/profiles/');
        $avatarUpload->move($avatarPath,$avatarName);
         User::create([
            "name"=>$request->name,
            "prenom"=>$request->prenom,
            "date_naissance"=>$request->date_naissance,
            "contact"=>$request->contact,
            "matricule"=>$request->matricule,
            "sexe"=>$request->sexe,
            "poste"=>$request->poste,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "is_admin"=>$request->is_admin,
            "avatar"=>'/assets/img/profiles/'.$avatarName,
           ]);
        }else{
            User::create([
                "name"=>$request->name,
                "prenom"=>$request->prenom,
                "date_naissance"=>$request->date_naissance,
                "contact"=>$request->contact,
                "poste"=>$request->poste,
                "matricule"=>$request->matricule,
                "adresse"=>$request->adresse,
                "sexe"=>$request->sexe,
                "email"=>$request->email,
                "password"=>Hash::make($request->password),
                "is_admin"=>$request->is_admin,
                ]
                );
        }
        
        return redirect()->route('admin.employe.employe')
        ->with('success','employe ajouté avec  succes');
    }

    public function update(Request $request, User $user){
        $userData =$request->validate([
            'name'=>'required',
            'prenom'=>'required',
            'date_naissance'=>'required',
            'matricule'=>'required',
            'contact'=>'required',
            'adresse'=>'required',
            'sexe'=>'required',
            'poste'=>'required',
            'avatar'=>'', 'image', 'mimes:jpeg,png,svg,jpg,bmp','max:5000',
            'email'=>'required',
            'password'=>'required',
            'is_admin'=>'required',
            
           ]);
           if(request()->has('avatar')){
            $avatarUpload=request()->file('avatar');
            $avatarName=time().'.'.$avatarUpload->getClientOriginalExtension() ;
            $avatarPath=public_path('/assets/img/profiles/');
            $avatarUpload->move($avatarPath,$avatarName);
            $user->update([
                "name"=>$request->name,
                "prenom"=>$request->prenom,
                "date_naissance"=>$request->date_naissance,
                "matricule"=>$request->matricule,
                "adresse"=>$request->adresse,
                "contact"=>$request->contact,
                "sexe"=>$request->sexe,
                "poste"=>$request->poste,
                "email"=>$request->email,
                "password"=>Hash::make($request->password),
                "is_admin"=>$request->is_admin,
                "avatar"=>'/assets/img/profiles/'.$avatarName,
               ]);
            }else{
                $user->update([
                    "name"=>$request->name,
                    "prenom"=>$request->prenom,
                    "date_naissance"=>$request->date_naissance,
                    "matricule"=>$request->matricule,
                    "contact"=>$request->contact,
                    "adresse"=>$request->adresse,
                    "sexe"=>$request->sexe,
                    "poste"=>$request->poste,
                    "email"=>$request->email,
                    "password"=>Hash::make($request->password),
                    "is_admin"=>$request->is_admin,
                    ]
                    );
            }
            
        
           return back()->with('success','employe Modifier avec succes');
    }


    public function edit($id){
        $user = User::findOrFail($id);

        return view('admin.employe.edit', compact('user'));

    }

    public function delete(User $user){
        $user->delete();

        return redirect()->route('admin.employe.employe')
                        ->with('success','employe deleted successfully');
    }



    public function profile($id){
        
        $user=User::find($id);

        $objectif=DB::table('objectifs')
        ->select('employe_objectif.*', 'objectifs.*', 'users.*')
        ->leftJoin('employe_objectif','employe_objectif.objectif_id','=','objectifs.id')
        ->leftJoin('users','employe_objectif.user_id','=','users.id')
        ->where(function ($query) use($id){
            $query->where('employe_objectif.user_id','=',$id);
        })
        ->get();
        
        $emp_obj=DB::table('objectifs')
        ->select('employe_objectif.*', 'objectifs.*', 'users.*')
        ->leftJoin('employe_objectif','employe_objectif.objectif_id','=','objectifs.id')
        ->leftJoin('users','employe_objectif.user_id','=','users.id')
        
        ->get();
        
        
    
        return view('admin.employe.profile')->with(compact('user','objectif','emp_obj'));
    }
    

}

