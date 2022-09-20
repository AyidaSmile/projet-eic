<?php
   
namespace App\Models;
   
use App\Models\Reservation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
   
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
 
     */
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'sexe',
        'email',
        'password',
        'type'
    ];
    // ici on vient dire que notre model user a plusieurs reservation 
    // dc on cré une fn public a qui on retourn plsrs reservations et on oublie pas
    //  d'importer la classe Reservation afin de pouvoir appeler les reservations dans notre vue chez le user
    public function reservations() 
    // ici on met s à reservation par convention pour dire plusieurs reservations
    {
        return $this->hasMany(Reservation::class);
    }
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
 
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
   
    /**
     * The attributes that should be cast.
     *
     * @var array
 
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin"][$value],
        );
    }
}