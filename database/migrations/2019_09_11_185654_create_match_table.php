<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->bigIncrements('idt');

            $table->unsignedBigInteger('DateJournee_Idt');
            $table->unsignedTinyInteger('Num')->comment('Numméro d\'ordre de match dans la compétition');
            $table->dateTime('DteHre');
            $table->unsignedBigInteger('Stade_Idt');
            $table->unsignedBigInteger('Groupe_Idt')->nullable();

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('DateJournee_Idt')
                ->references('Idt')
                ->on('DateJournee');
            $table->foreign('Stade_Idt')
                ->references('Idt')
                ->on('Stade');
            $table->foreign('Groupe_Idt')
                ->references('Idt')
                ->on('Groupe');

            $table->unique(['DateJournee_Idt', 'Num']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match');
    }
}
