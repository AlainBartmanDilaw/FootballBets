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

    /**
     * @param Request $request
     * @return App\Bet
     */
    public static function InsertBet($request, $role, $role2): Bet
    {
        $bet = new Bet();
        $bet->User()->associate($request->get('User_id'));
        $bet->MatchEquipe()->associate($request->get('MatchEquipe_Idt_' . $role));
        $bet->score = $request->get('Score' . $role2);
        $bet->save();
        return $bet;
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'User_id', 'id');
    }

    public function MatchEquipe()
    {
        return $this->belongsTo(MatchEquipe::class, 'matchequipe_idt', 'idt');
    }
}

