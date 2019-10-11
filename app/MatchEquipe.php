<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Exception;

class MatchEquipe extends Model
{
    //
    protected $primaryKey = 'idt';
    public $table = "MatchEquipe";

    protected $fillable = [
        'Score',
    ];

    public function Bet()
    {
        return $this->hasOne(Bet::class, 'matchequipe_idt', 'idt');
    }

    public static function Get($matchequipeIdt): MatchEquipe
    {
        $values = MatchEquipe::where([
            ['Idt', $matchequipeIdt],
        ])->get();
        foreach ($values as $value) {
            return $value; //
        }
    }

    public static function UpdateScoreRole($request, $role, $role2): MatchEquipe
    {

        $matchequipeIdt = $request->get('MatchEquipe_Idt_' . $role);
        $score = $request->get('Score' . $role2);

        \Log::info("Idt " . $matchequipeIdt);
        \Log::info("Score " . $score);
        $matchequipe = MatchEquipe::Get($matchequipeIdt);
        \Log::info("Get " . $matchequipe);

        $matchequipe->Score = $score;
        \Log::info("Apres score " . $matchequipe);

        $matchequipe->save();
        \Log::info("Apres save");

        return $matchequipe;
    }

    public static function UpdateScore($request)
    {
//        , 'Dom', 'Domicile');
//        $bet = App\MatchEquipe::UpdateScore($request, 'Ext', 'Exterieur');
        \Log::info("UpdateScore " . $request);
        try {
            $matchequipe = self::UpdateScoreRole($request, 'Dom', 'Domicile');
            $matchequipe = self::UpdateScoreRole($request, 'Ext', 'Exterieur');
        } catch (\Exception $exc) {
            return false;
        }
        return true;
    }
    /**
     * @param Request $request
     * @return App\Bet
     */
}
