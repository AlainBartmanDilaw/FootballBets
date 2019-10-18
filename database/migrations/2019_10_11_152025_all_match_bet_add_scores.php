<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllMatchBetAddScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `allmatchbet` AS
SELECT m.Match_Idt
     , m.Match_Num
     , m.DteHre
     , m.Disponible
     , m.MatchEquipe_Idt_Dom
     , m.ScoreDomicile ScoreDomicileRealise
     , m.Equipe_Idt_Dom
     , m.Equipe_Nom_Dom
     , m.MatchEquipe_Idt_Ext
     , m.ScoreExterieur ScoreExterieurRealise 
     , m.Equipe_Idt_Ext
     , m.Equipe_Nom_Ext
     , m.Journee_Num
     , m.Journee_Lib
     , m.Phase_Lib
     , m.Stade_Nom
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
   , `users` u ");
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
