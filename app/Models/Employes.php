<?php

namespace App\Models;

use App\Models\Employes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employes extends Model
{
    use HasFactory;
    protected $table = 'employes';
    protected $primaryKey = 'id';
    protected $fillable = ['type_employe', 'nom', 'adresse', 'email','mobile'];
}
