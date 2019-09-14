<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journee extends Model
{
    //
    public $table = 'Journee';

    public function Phase()
    {
        return $this->hasOne(Phase::class, 'idt', 'Phase_Idt');
    }

    public function DateJournee()
    {
        return $this->belongsTo(DateJournee::class, 'Journee_idt', 'idt');
    }

    public static function GetIdt($PhaseLibelle, $JourneeNum)
    {
        $values = Journee::where([
            ['Phase_Idt', Phase::GetIdt($PhaseLibelle)],
            ['Num', $JourneeNum],
        ])->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }

}
