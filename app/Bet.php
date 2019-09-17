<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    //
    public $table = "Bet";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Score',
        'matchequipe_idt',
        'User_Id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'User_id', 'id');
    }

    public function MatchEquipe()
    {
        return $this->belongsTo(MatchEquipe::class, 'matchequipe_idt', 'idt');
    }
}

