<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeGroupeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipegroupe', function (Blueprint $table) {
            $table->bigIncrements('idt');

            $table->unsignedBigInteger('Equipe_Idt');
            $table->unsignedBigInteger('Groupe_Idt');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('Groupe_Idt')
                ->references('Idt')
                ->on('Groupe');

            $table->foreign('Equipe_Idt')
                ->references('Idt')
                ->on('Equipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipegroupe');
    }
}
