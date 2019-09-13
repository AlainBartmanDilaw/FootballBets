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
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Ajax'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Atalanta'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Atlético'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Barcelona'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Bayern'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Benfica'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'G'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Chelsea'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Club Brugge'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Crvena zvezda'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Dinamo Zagreb'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Dortmund'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Galatasaray'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Genk'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Internazionale'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Juventus'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Leipzig'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'G'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Leverkusen'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Liverpool'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Lokomotiv Moskva'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'D'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('LOSC'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Lyon'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'G'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Man. City'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Napoli'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Olympiacos'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Paris'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Real Madrid'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'A'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Salzburg'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'E'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Shakhtar Donetsk'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'C'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Slavia Praha'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'F'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Tottenham'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'B'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Valencia'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'H'), ],
            [ 'Equipe_Idt' => App\Equipe::GetIdtByNom('Zenit'), 'Groupe_Idt' => App\Groupe::GetIdtByCod(1, 'G'), ],
            ]);
    }
}
