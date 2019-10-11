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
        $bet = App\Bet::InsertBet($request, 'Dom', 'Domicile');
        $bet = App\Bet::InsertBet($request, 'Ext', 'Exterieur');

        return json_encode('OK');
    }

    public function resultat(Request $request)
    {
        $bet = App\MatchEquipe::UpdateScore($request);

        return json_encode('OK');
    }

}
