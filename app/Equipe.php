<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    //
    public $table = "Equipe";

    public function Ville()
    {
        return $this->hasOne('App\Ville', 'idt', 'Ville_Idt');
    }

    public static function GetIdtByNom($nom)
    {
        echo "Recherche GetIdtByNom " . $nom . "\n";
        $equipes = Equipe::where('Nom', $nom)->get();
        foreach ($equipes as $equipe) {
            return $equipe->idt; //
        }
        return -1; // Non trouvé !
    }

    public static function GetVilleIdtByNom($nom)
    {
        echo "Recherche " . $nom . "\n";
        $equipes = Equipe::where('Nom', $nom)->get();
        foreach ($equipes as $equipe) {
            echo "Retour " . $equipe->Ville->Idt . "\n";
            return $equipe->Ville->Idt; //
        }
        return -1; // Non trouvé !
    }
}
