<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // adicionando a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
          $table->unsignedBigInteger('motivo_contatos_id');
        });
        //atribuindo motivo_contato para a nova coluna motivo_contatoss_id
        DB::statement('UPDATE site_contatos set motivo_contatos_id = motivo_contato');
        // criando a fk e remover a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
          });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //criar a coluna motivo_contato
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contatos');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //atribuindo motivo_contatos_id para a coluna motivo_contato
        DB::statement('UPDATE site_contatos  set motivo_contato = motivo_contato_id');
        Schema::table('site_contatos', function (Blueprint $table){
            $table->dropColumn('motivo_contatos_id');
        });
    }
}
