<?php

use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllMatchBetView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `allmatchbet` AS SELECT m.*
     , u.Id User_Id
   , ( SELECT b.Score
	      FROM `bet` b
		  WHERE b.User_Id = u.id
		    AND b.MatchEquipe_Idt = m.MatchEquipe_Idt_Dom
     ) ScoreDomicile
   , ( SELECT b.Score
	      FROM `bet` b
		  WHERE b.User_Id = u.id
		    AND b.MatchEquipe_Idt = m.MatchEquipe_Idt_Ext
	  ) ScoreExterieur
FROM `allmatch` m
   , `users` u");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS `AllMatchBet`');
    }
}
