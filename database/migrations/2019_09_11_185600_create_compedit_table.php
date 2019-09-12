<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompeditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
          `Idt` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant interne',
          `Competition_Cod` varchar(30) NOT NULL COMMENT 'Code compétition',
          `Edition_Cod` varchar(10) NOT NULL COMMENT 'Identifiant (saison)',
          `Lib` varchar(100) DEFAULT NULL,
        */
        Schema::create('compedit', function (Blueprint $table) {
            $table->bigIncrements('idt');
            $table->string('Competition_Cod', 30);
            $table->char('Edition_Cod', 5);
            $table->string('Lib', 100);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('Competition_Cod')
                ->references('Cod')->on('Competition')
                ->onDelete('cascade');

            $table->foreign('Edition_Cod')
                ->references('Cod')->on('Edition')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compedit');
    }
}
