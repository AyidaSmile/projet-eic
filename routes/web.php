<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Admin\adminHomeController;
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
Route::get('/acceuil', function () {
    return view('acceuil');
});


Route::get('/services', function () {
    return view('services');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('Utilisateurs.profil_utilisateur', function () {
        return view('Utilisateurs.profil_utilisateur');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('dashboardAdmin', [HomeController::class, 'dashboardAdmin'])->name('dashboardAdmin');
    Route::get('/listeUtilisateurs', [adminHomeController::class, 'listeUtilisateurs']);

    Route::get('profil_admin', function () {
        return view('profil_admin');
    });
    Route::resource('employes', EmployeController::class);
    Route::get('/list_contact', [ContactsController::class, 'list_contact'])->name('list_contact');
});
Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');

Route::get('/message', function () {
    return view('message');
});
Route::get('/page-contact', function () {
    return view('page-contact');
});



