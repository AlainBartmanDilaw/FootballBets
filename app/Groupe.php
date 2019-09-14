<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    //
    public $table = "Groupe";

    public static function GetIdtByCod($CompEditIdt, $cod)
    {
        $values = Groupe::where([
            ['Cod', $cod],
            ['CompEdit_Idt', $CompEditIdt],
        ])->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }

    public static function GetIdt($CompetionCod, $EditionCod, $cod)
    {
        $values = Groupe::where([
            ['Cod', $cod],
            ['CompEdit_Idt', CompEdit::GetIdt($CompetionCod, $EditionCod)],
        ])->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }

}
