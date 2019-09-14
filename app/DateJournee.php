<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DateJournee extends Model
{
    //
    public $table = "DateJournee";

    public function Journee()
    {
        return $this->hasOne(Journee::class, 'idt', 'Journee_Idt');
    }

    public function CompEdit()
    {
        return $this->hasOne(CompEdit::class, 'idt', 'CompEdit_Idt');
    }

    public static function GetIdt($CompetitionCod, $EditionCod, $dte)
    {
//        echo "Recherche : " . $CompetitionCod . "/" . $EditionCod . "\n"    ;
        $values = DateJournee::where([
            ['CompEdit_Idt', CompEdit::GetIdt($CompetitionCod, $EditionCod)],
            ['Dte', $dte],
        ])->get();
        foreach ($values as $value) {
//            echo $value->idt . "\n";
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }
}
