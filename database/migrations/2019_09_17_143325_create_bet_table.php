<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet', function (Blueprint $table) {
            $table->bigIncrements('idt');

            $table->unsignedBigInteger('matchequipe_idt')->comment('Identifiant de match');
            $table->unsignedBigInteger('User_Id')->comment('Identifiant d\'utilisateur');
            $table->unsignedTinyInteger('Score')->comment('Score parié')->nullable();

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('matchequipe_idt')
                ->references('Idt')
                ->on('MatchEquipe');

            $table->foreign('User_Id')
                ->references('Id')
                ->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bet');
    }
}
