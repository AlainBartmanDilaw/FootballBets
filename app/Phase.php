<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    //
    public $table = "Phase";

    public function Journee()
    {
        return $this->belongsTo(Journee::class, 'Phase_idt', 'idt');
    }

    public static function GetIdt($PhaseLibelle)
    {
        $values = Phase::where([
            ['Lib', $PhaseLibelle],
        ])->get();
        foreach ($values as $value) {
            return $value->idt; //
        }
        return -1; // Non trouvé !
    }
}
