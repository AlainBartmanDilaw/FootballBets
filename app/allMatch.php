<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllMatch extends Model
{
    //
    public $table = "allMatch";

    public static function GetRow($matchIdt)
    {
//        \Log::info("Recherche de : " . $matchIdt);
        $values = AllMatch::where([
            ['Match_Idt', $matchIdt],
        ])->get();

//        \Log::info("Nombre  : >" . $values->count() . "<");
//        \Log::info("All");
//        \Log::info($values->all());
//        \Log::info("Tab[][]");
//        \Log::info($values[0]['attributes']['match_idt']);
//        \Log::info("Tab[]->");
//        \Log::info($values[0]->match_idt);

        foreach ($values as $value) {
//            \Log::info("Trouvé : >" . $value->match_idt . "<");
            return $value; //
        }
        return array(); // Non trouvé !
    }
}
