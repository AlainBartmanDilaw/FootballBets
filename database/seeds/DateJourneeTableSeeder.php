<?php

use Illuminate\Database\Seeder;

class DateJourneeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('DateJournee')->insert([
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 1), 'Dte' => '2019-09-17',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 1), 'Dte' => '2019-09-18',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 2), 'Dte' => '2019-10-01',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 2), 'Dte' => '2019-10-02',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 3), 'Dte' => '2019-10-22',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 3), 'Dte' => '2019-10-23',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 4), 'Dte' => '2019-11-05',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 4), 'Dte' => '2019-11-06',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 5), 'Dte' => '2019-11-26',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 5), 'Dte' => '2019-11-27',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 6), 'Dte' => '2019-12-10',],
            ['CompEdit_Idt' => App\CompEdit::GetIdt('UEFACL', '66'), 'Journee_idt' => App\Journee::GetIdt('Phase de groupes', 6), 'Dte' => '2019-12-11',],
        ]);
    }
}
