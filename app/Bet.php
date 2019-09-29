<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    //
    protected $primaryKey = 'idt';
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

    public static function Get($userid, $matchequipe) : Bet
    {
        \Log::info("Recherche Bet " . $userid . " " . $matchequipe);
        $values = Bet::where([
            ['User_Id', $userid],
            ['MatchEquipe_Idt', $matchequipe],
        ])->get();
        foreach ($values as $value) {
            \Log::info("Enregistrement trouvé : " . $value->idt);
            return $value; //
        }

        \Log::info("Enregistrement non trouvé... Création");
        $bet = new Bet();
        $bet->User()->associate($userid);
        $bet->MatchEquipe()->associate($matchequipe);
        return $bet; // Non trouvé !
    }


    /**
     * @param Request $request
     * @return App\Bet
     */
    public static function InsertBet($request, $role, $role2): Bet
    {
        $userid = $request->get('User_id');
        $matchequipe = $request->get('MatchEquipe_Idt_' . $role);

        $bet = Bet::Get($userid, $matchequipe);

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

