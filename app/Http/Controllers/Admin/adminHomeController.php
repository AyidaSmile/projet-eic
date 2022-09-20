<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminHomeController extends Controller
{
   public function listeUtilisateurs (){
// creons une var users à qui on assigne le model user et ses données
      $users = User::all();
      // retournons la vue ci-dessous avec les var
      // après on retourne dans la vue listUtilisateur pour faire une boucle sur ce qu'on veux recupérer pour afficher
    return view('listeUtilisateurs')->with('users', $users);
   }
}
