<?php

use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllMatchView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `allmatch` AS SELECT m.Idt Match_Idt, m.Num Match_Num
     , m.DteHre
     , case sign(m.DteHre-NOW()) when 1 then 'OK' ELSE 'KO' END Disponible
     , med.Idt MatchEquipe_Idt_Dom
     , ed.Idt Equipe_Idt_Dom
     , ed.Nom Equipe_Nom_Dom
     , mee.Idt MatchEquipe_Idt_Ext
     , ee.Idt Equipe_Idt_Ext
     , ee.Nom Equipe_Nom_Ext
     , j.Num Journee_Num
     , j.Lib Journee_Lib
     , p.Lib Phase_Lib
     , s.Nom Stade_Nom
  FROM `Match` m
  JOIN `Groupe` g ON g.Idt = m.Groupe_Idt
  JOIN `DateJournee` dj ON dj.Idt = m.DateJournee_Idt
  JOIN `CompEdit` ce ON ce.Idt = dj.CompEdit_Idt
  JOIN `Journee` j ON j.Idt = dj.Journee_Idt
  JOIN `Phase` p ON p.Idt = j.Phase_Idt
  JOIN `Stade` s ON s.Idt = m.Stade_Idt
  JOIN `Ville` v ON v.Idt = s.Ville_Idt
  JOIN `MatchEquipe` med ON med.Match_Idt = m.Idt AND med.DomExt = 'D'
  JOIN `Equipe` ed ON ed.Idt = med.Equipe_Idt
  JOIN `MatchEquipe` mee ON mee.Match_Idt = m.Idt AND mee.DomExt = 'E'
  JOIN `Equipe` ee ON ee.Idt = mee.Equipe_Idt
WHERE 1 = 1
  AND ce.Competition_Cod = 'UEFACL'
  AND ce.Edition_Cod = '66' -- ???
 ORDER BY m.DteHre, m.Num ;
");
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
