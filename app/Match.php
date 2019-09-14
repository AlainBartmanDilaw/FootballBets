<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    public $table = "Match";

    public static function GetIdt($CompetitonCod, $EditionCod, $MatchNum, $Dte)
    {
        $values = Match::where([
            'DateJournee_Idt' => DateJournee::GetIdt($CompetitonCod, $EditionCod, $Dte),
            'Num' => $MatchNum,
        ])->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }
}
