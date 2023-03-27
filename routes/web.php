<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObjectifController;
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
Route::patch('admin/employe/{id}', [EmployeController::class, 'update'])->name('update.employe')->middleware('is_admin');

/**** objectif */

Route::get('admin/employe.objectif', [ObjectifController::class, 'index'])->name('admin.objectif')->middleware('is_admin');
Route::get('admin/employe.tache', [ObjectifController::class, 'ouvreTache'])->name('admin.tache')->middleware('is_admin');
Route::get('admin/employe.objectifView/{id}', [ObjectifController::class, 'objectifView'])->name('admin.objectifView')->middleware('is_admin');





route::get('/homee',function(){
    $objectif=DB::table('objectifs')
    ->select('*')
    ->get();
    return $objectif;
});

