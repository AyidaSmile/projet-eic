<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ReservationController;
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

// Ici la route pour la page d'acceuil.
Route::get('/acceuil', function () {
    return view('acceuil');
});

// Ici la route pour la page services
Route::get('/services', function () {
    return view('services');
});

Auth::routes();

// Ici la route pour le compte utilisateur.
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
// Dans le midleware admin on différentes routes

// Ici la route pour le dashboard admin
    Route::get('dashboardAdmin', [HomeController::class, 'dashboardAdmin'])->name('dashboardAdmin');

// Ici la route pour la liste des utilisateurs
    Route::get('/listeUtilisateurs', [adminHomeController::class, 'listeUtilisateurs']);

    // Ici la route pour le profil admin
    Route::get('profil_admin', function () {
        return view('profil_admin');
    });

// Ici la route pour la liste des employés.
    Route::resource('employes', EmployeController::class);

// Ici la route pour la liste des personnes qui envoient leur message dans la partie contactez- nous.
    Route::get('/list_contact', [ContactsController::class, 'list_contact'])->name('list_contact');

// Ici la route pour les utilisateurs qui ont fait la reservation de notre service.
    Route::get('Utilisateurs.index', [ReservationController::class, 'index']);

});

// ICI LES ROUTES POUR LA PAGE CONTACTEZ-NOUS.
// Ici la route pour l'envoie des données dans la BD
Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
// Ici la route pour la recupération et l'affichage.
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');
// Ici la route pour l'envoie de la reponse à ceux qui nous envoient des messages via la partie contactez-nous
Route::get('/message', function () {
    return view('message');
});
// Ici la route pour la page contactez-nous.
Route::get('/page-contact', function () {
    return view('page-contact');
});



