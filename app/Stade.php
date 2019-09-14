<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stade extends Model
{
    //
    public $table = "Stade";

    public static function GetIdt($lib)
    {
        $values = Stade::where('Nom', $lib)->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }
    public static function GetIdtByNom($nom)
    {
        $values = Stade::where('Nom', $nom)->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }
}
