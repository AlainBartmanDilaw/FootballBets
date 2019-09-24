<?php

use Illuminate\Database\Seeder;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Match')->insert([

            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 1, 'DteHre' => '2019-09-17 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Siro'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 2, 'DteHre' => '2019-09-17 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('OL Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 3, 'DteHre' => '2019-09-17 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Paolo'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 4, 'DteHre' => '2019-09-17 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Red Bull Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 5, 'DteHre' => '2019-09-17 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('BVB Stadion Dortmund'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 6, 'DteHre' => '2019-09-17 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estádio do Sport Lisboa e Benfica'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 7, 'DteHre' => '2019-09-17 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stamford Bridge'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-17 '), 'Num' => 8, 'DteHre' => '2019-09-17 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Johan Cruijff Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 9, 'DteHre' => '2019-09-18 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Jan Breydelstadion'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 10, 'DteHre' => '2019-09-18 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio Georgios Karaiskakis'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 11, 'DteHre' => '2019-09-18 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Parc des Princes'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 12, 'DteHre' => '2019-09-18 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Football Arena Munich'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 13, 'DteHre' => '2019-09-18 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Maksimir'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 14, 'DteHre' => '2019-09-18 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('OSK Metalist Stadion'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 15, 'DteHre' => '2019-09-18 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('BayArena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-09-18 '), 'Num' => 16, 'DteHre' => '2019-09-18 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estadio Metropolitano'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 17, 'DteHre' => '2019-10-01 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Estadio Santiago Bernabéu'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 18, 'DteHre' => '2019-10-01 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Siro'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 19, 'DteHre' => '2019-10-01 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Ali Sami Yen Spor Kompleksi '), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 20, 'DteHre' => '2019-10-01 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Tottenham Hotspur Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 21, 'DteHre' => '2019-10-01 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Rajko Mitić'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 22, 'DteHre' => '2019-10-01 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('City of Manchester Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 23, 'DteHre' => '2019-10-01 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Juventus Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-01 '), 'Num' => 24, 'DteHre' => '2019-10-01 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Lokomotiv'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 25, 'DteHre' => '2019-10-02 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('KRC Genk Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 26, 'DteHre' => '2019-10-02 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Eden Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 27, 'DteHre' => '2019-10-02 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Anfield'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 28, 'DteHre' => '2019-10-02 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Camp Nou'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 29, 'DteHre' => '2019-10-02 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('RB Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 30, 'DteHre' => '2019-10-02 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Saint Petersburg Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 31, 'DteHre' => '2019-10-02 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stade Pierre Mauroy'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-02 '), 'Num' => 32, 'DteHre' => '2019-10-02 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Camp de Mestalla'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 33, 'DteHre' => '2019-10-22 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('OSK Metalist Stadion'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 34, 'DteHre' => '2019-10-22 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Estadio Metropolitano'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 35, 'DteHre' => '2019-10-22 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Jan Breydelstadion'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 36, 'DteHre' => '2019-10-22 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Ali Sami Yen Spor Kompleksi '), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 37, 'DteHre' => '2019-10-22 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio Georgios Karaiskakis'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 38, 'DteHre' => '2019-10-22 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Tottenham Hotspur Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 39, 'DteHre' => '2019-10-22 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('City of Manchester Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-22 '), 'Num' => 40, 'DteHre' => '2019-10-22 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Juventus Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 41, 'DteHre' => '2019-10-23 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('RB Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 42, 'DteHre' => '2019-10-23 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Johan Cruijff Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 43, 'DteHre' => '2019-10-23 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Red Bull Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 44, 'DteHre' => '2019-10-23 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('KRC Genk Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 45, 'DteHre' => '2019-10-23 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Siro'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 46, 'DteHre' => '2019-10-23 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Eden Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 47, 'DteHre' => '2019-10-23 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estádio do Sport Lisboa e Benfica'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-10-23 '), 'Num' => 48, 'DteHre' => '2019-10-23 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stade Pierre Mauroy'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 49, 'DteHre' => '2019-11-05 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Camp Nou'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 50, 'DteHre' => '2019-11-05 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Saint Petersburg Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 51, 'DteHre' => '2019-11-05 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Paolo'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 52, 'DteHre' => '2019-11-05 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Anfield'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 53, 'DteHre' => '2019-11-05 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('BVB Stadion Dortmund'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 54, 'DteHre' => '2019-11-05 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('OL Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 55, 'DteHre' => '2019-11-05 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stamford Bridge'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-05 '), 'Num' => 56, 'DteHre' => '2019-11-05 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Camp de Mestalla'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 57, 'DteHre' => '2019-11-06 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Football Arena Munich'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 58, 'DteHre' => '2019-11-06 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Lokomotiv'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 59, 'DteHre' => '2019-11-06 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Parc des Princes'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 60, 'DteHre' => '2019-11-06 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estadio Santiago Bernabéu'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 61, 'DteHre' => '2019-11-06 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Rajko Mitić'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 62, 'DteHre' => '2019-11-06 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Maksimir'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 63, 'DteHre' => '2019-11-06 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Siro'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-06 '), 'Num' => 64, 'DteHre' => '2019-11-06 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('BayArena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 65, 'DteHre' => '2019-11-26 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Ali Sami Yen Spor Kompleksi '), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 66, 'DteHre' => '2019-11-26 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Lokomotiv'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 67, 'DteHre' => '2019-11-26 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estadio Santiago Bernabéu'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 68, 'DteHre' => '2019-11-26 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Rajko Mitić'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 69, 'DteHre' => '2019-11-26 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Tottenham Hotspur Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 70, 'DteHre' => '2019-11-26 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Siro'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 71, 'DteHre' => '2019-11-26 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('City of Manchester Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-26 '), 'Num' => 72, 'DteHre' => '2019-11-26 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Juventus Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 73, 'DteHre' => '2019-11-27 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Saint Petersburg Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 74, 'DteHre' => '2019-11-27 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Camp de Mestalla'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 75, 'DteHre' => '2019-11-27 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Anfield'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 76, 'DteHre' => '2019-11-27 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('KRC Genk Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 77, 'DteHre' => '2019-11-27 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Camp Nou'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 78, 'DteHre' => '2019-11-27 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Eden Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 79, 'DteHre' => '2019-11-27 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('RB Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-11-27 '), 'Num' => 80, 'DteHre' => '2019-11-27 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stade Pierre Mauroy'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 81, 'DteHre' => '2019-12-10 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Paolo'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 82, 'DteHre' => '2019-12-10 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Red Bull Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','E'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 83, 'DteHre' => '2019-12-10 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('BVB Stadion Dortmund'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 84, 'DteHre' => '2019-12-10 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio San Siro'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','F'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 85, 'DteHre' => '2019-12-10 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('OL Stadium'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 86, 'DteHre' => '2019-12-10 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estádio do Sport Lisboa e Benfica'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','G'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 87, 'DteHre' => '2019-12-10 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stamford Bridge'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-10 '), 'Num' => 88, 'DteHre' => '2019-12-10 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Johan Cruijff Arena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','H'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 89, 'DteHre' => '2019-12-11 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('Stadion Maksimir'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 90, 'DteHre' => '2019-12-11 18::55:00', 'Stade_Idt' => App\Stade::GetIdt('OSK Metalist Stadion'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','C'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 91, 'DteHre' => '2019-12-11 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Parc des Princes'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 92, 'DteHre' => '2019-12-11 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Jan Breydelstadion'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','A'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 93, 'DteHre' => '2019-12-11 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Football Arena Munich'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 94, 'DteHre' => '2019-12-11 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Stadio Georgios Karaiskakis'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','B'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 95, 'DteHre' => '2019-12-11 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('BayArena'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
            ['DateJournee_idt' => App\DateJournee::GetIdt('UEFACL', '66', '2019-12-11 '), 'Num' => 96, 'DteHre' => '2019-12-11 21::00:00', 'Stade_Idt' => App\Stade::GetIdt('Estadio Metropolitano'), 'Groupe_Idt' => App\Groupe::GetIdt('UEFACL', '66','D'), ],
        ]);
    }
}
