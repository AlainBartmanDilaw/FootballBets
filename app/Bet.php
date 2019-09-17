<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    //
    public $table = "Bet";

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'User_Idt');
    }

    public function MatchEquipe()
    {
        return $this->hasOne(MatchEquipe::class, 'idt', 'MatchEquipe_Idt');
    }
}
