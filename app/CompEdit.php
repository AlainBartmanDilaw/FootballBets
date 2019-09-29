<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompEdit extends Model
{
    //
    public $table = "CompEdit";

    public function DateJournee()
    {
        return $this->belongsTo(DateJournee::class, 'CompEdit_idt', 'idt');
    }

    public function Groupe()
    {
        return $this->belongsTo(Groupe::class, 'CompEdit_idt', 'idt');
    }

    public static function GetIdt($CompetitionCod, $EditionCod)
    {
        $values = CompEdit::where([
            ['Competition_Cod', $CompetitionCod],
            ['Edition_Cod', $EditionCod],
        ])->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }

}
