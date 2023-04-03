<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObjectifController;
use App\Http\Controllers\TacheController;
use App\Models\Objectif;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');





Route::get('admin/employe.liste', [EmployeController::class, 'index'])->name('admin.employe')->middleware('is_admin');
Route::get('admin/employe/ajout', [EmployeController::class, 'ajoutEmploye'])->name('ajout.employe')->middleware('is_admin');
Route::post('admin/employeCreate', [EmployeController::class, 'store'])->name('create.employe')->middleware('is_admin');
Route::delete('admin/employe/{id}', [EmployeController::class, 'delete'])->name('delete.employe')->middleware('is_admin');
Route::get('admin/employeCreate/{id}', [EmployeController::class, 'profile'])->name('profile.employe')->middleware('is_admin');
Route::get('admin/employe/{id}', [EmployeController::class, 'edit'])->name('edit.employe')->middleware('is_admin');
Route::put('admin/employe/{id}', [EmployeController::class, 'update'])->name('update.employe')->middleware('is_admin');

/**** objectif */

Route::get('admin/employe.objectif', [ObjectifController::class, 'index'])->name('admin.objectif')->middleware('is_admin');
Route::get('admin/employe.objectifView/{id}/assigner/{ids}', [ObjectifController::class, 'assigneUserObjectif'])->name('admin.assigneUserObjectif')->middleware('is_admin');
Route::get('admin/employe.objectifView/{id}', [ObjectifController::class, 'objectifView'])->name('admin.objectifView')->middleware('is_admin');
Route::delete('admin/employe/objectifView/{id}', [ObjectifController::class, 'delete'])->name('delete.objectif')->middleware('is_admin');
Route::put('admin/employe.objectifView/{id}/', [ObjectifController::class, 'updateStatusTache'])->name('admin.objectifTacheUpdate')->middleware('is_admin');
Route::get('admin/employe.objectifViews/{id}', [ObjectifController::class, 'objectifViewAssigner'])->name('admin.objectifViewAssigner')->middleware('is_admin');


Route::post('admin/employe.objectifViewCreate', [ObjectifController::class, 'store'])->name('admin.objectifStore')->middleware('is_admin');
Route::get('admin/employe.objectifViewCreate', [ObjectifController::class, 'create'])->name('admin.objectifCreate')->middleware('is_admin');
Route::get('admin/employe.objectifUpdates/{id}', [ObjectifController::class, 'ouvreUpdateObjectif'])->name('admin.objectifUpdates')->middleware('is_admin');
Route::put('admin/employe.objectifUpdates/{id}/', [ObjectifController::class, 'update'])->name('admin.objectifUpdate')->middleware('is_admin');

/**** tache */

Route::get('admin/employe.tache', [TacheController::class, 'index'])->name('admin.tache')->middleware('is_admin');
Route::get('admin/employe.tache/{id}', [TacheController::class, 'shows'])->name('admin.tacheView')->middleware('is_admin');



route::resource('objectif',TacheController::class);



route::get('/homee',function(){
    $liste_user=User::all();

    return view('tests',compact('liste_user'));
});
route::get('/homee/{id}',function($id){
    $liste_user=User::all();
    $liste_objectif=Objectif::find(10);

    $test=User::find($id);
    
    $liste_objectif->user()->attach($id);


    

    return view('tests',compact('liste_objectif','liste_user'));
    
})->name('view');


