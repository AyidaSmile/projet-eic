<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    // ici on cré une function user et user ne prend pas s car une reservation ne peut avoir qu'un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
