<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    public $table = "ville";

    public static function GetByNom($nom){
        $villes = Ville::where( 'nom', $nom)->get();
        foreach ($villes as $ville) {
            return $ville->idt; // 
        }
        return -1; // Non trouvé !
    }
    // use Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'username', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
