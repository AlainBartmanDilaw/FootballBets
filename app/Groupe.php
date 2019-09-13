<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    //
    public $table = "Groupe";

    public static function GetIdtByCod($CompEditIdt, $cod)
    {
        $groupes = Groupe::where([
            ['Cod', $cod],
            ['CompEdit_Idt', $CompEditIdt],
        ])->get();
        foreach ($groupes as $groupe) {
            return $groupe->idt; //
        }
        return -1; // Non trouvé !
    }

}
