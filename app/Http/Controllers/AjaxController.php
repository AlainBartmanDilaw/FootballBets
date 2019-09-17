<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use App;

class AjaxController extends Controller
{
//    public function ajax_call()
//    {
//        \Log::info("ajax_call()");
//        $nb_users = \DB::table('users')->count();
//        $nb_users = json_encode($nb_users);
//        return $nb_users;
//    }

    public function ajax_call(Request $request)
    {
        \Log::info("ajax_call()");
        \Log::info($request->all());
        \Log::info($request->get('Match_Idt'));

        $bet = new App\Bet();
        $bet->User()->associate($request->get('User_id'));
        $bet->MatchEquipe()->associate($request->get('MatchEquipe_Idt_Dom'));
        $bet->score = $request->get('ScoreDomicile');
        $bet->save();
        \Log::info("after save");

        $bet = new App\Bet;
        $bet->User()->associate($request->get('User_id'));
        $bet->MatchEquipe()->associate($request->get('MatchEquipe_Idt_Ext'));
        $bet->score = $request->get('ScoreExterieur');
        $bet->save();

        $retour = json_encode('OK');
        return $retour;
    }
}
