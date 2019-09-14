<?php

use Illuminate\Database\Seeder;

class EquipeGroupeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('EquipeGroupe')->insert([
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Ajax'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Atalanta'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Atlético'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Barcelona'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Bayern'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Benfica'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'G'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Chelsea'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Club Brugge'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Crvena zvezda'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Dinamo Zagreb'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Dortmund'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Galatasaray'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Genk'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Internazionale'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Juventus'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Leipzig'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'G'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Leverkusen'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Liverpool'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Lokomotiv Moskva'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('LOSC'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Lyon'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'G'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Man. City'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Napoli'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Olympiacos'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Paris'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Real Madrid'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Salzburg'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Shakhtar Donetsk'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Slavia Praha'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Tottenham'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Valencia'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdt('Zenit'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66', 'G'), ],
            ]);
    }
}
