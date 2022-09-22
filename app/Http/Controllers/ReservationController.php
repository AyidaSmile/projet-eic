<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;

class ReservationController extends Controller
{
    public function index(){
        // Ici User et Reservation sont les models, reservations et user sont les noms 
        // des functions contenu dans les # models(reservations = function dans le model User et 
        // user = function dans model Reservation )
        $reservations = Reservation::with('user')->get();
        $users = User::with('reservations')->get();
        // Dans la view(vue), users au niveau de compact = à la table users
        //  dans la base de donnée et reservations = à la table reservation dans la base de donnée.
        return view ('Utilisateurs.index', compact('reservations', 'users'));
    }
    // function showData(){
    //     return DB::table('reservations')
    //     ->join('users', 'users.id', "=", 'reservations.user_id')
        // pour afficher seulement les éléments de reservation, on fait ça.
        // ->select('reservations.*')
        // Si c'est pour users je fais ça.
        // ->select('users.*')
        // Si c'est pour afficher quelque chose de spécifique et non tout tu vas faire 
        // ->where('users.name', 'ABALO') ça pour afficher les info d'ABALO seulement
        // Mais si c'est id tu veux tu fais ce qui suit en bas
        // ->where('users.id', '3')
    //     ->get();
    // }
}
