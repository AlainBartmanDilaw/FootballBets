<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchEquipe extends Model
{
    //
    public $table = "MatchEquipe";

    public function Bet()
    {
        return $this->hasOne(Bet::class, 'matchequipe_idt', 'idt');
    }

}
