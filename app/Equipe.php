<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    //
    public $table = "Equipe";

    public function Ville()
    {
        return $this->hasOne(Ville::class, 'idt', 'Ville_Idt');
    }

    public static function GetIdt($nom)
    {
        $values = Equipe::where('Nom', $nom)->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }

    public static function GetVilleIdtByNom($nom)
    {
        $values = Equipe::where('Nom', $nom)->get();
        foreach ($values as $value) {
            return $value->Ville->idt; //
        }
        return -1; // Non trouvé !
    }
}
