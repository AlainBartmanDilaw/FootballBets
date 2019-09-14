<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatejourneeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datejournee', function (Blueprint $table) {
            $table->bigIncrements('idt');

            $table->unsignedBigInteger('CompEdit_Idt');
            $table->unsignedBigInteger('Journee_idt');
            $table->date('Dte');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('Journee_idt')
                ->references('idt')->on('journee')
                ->onDelete('cascade');

            $table->foreign('CompEdit_Idt')
                ->references('idt')->on('CompEdit')
                ->onDelete('cascade');

            $table->unique(['CompEdit_Idt', 'Journee_idt', 'dte']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datejournee');
    }
}
