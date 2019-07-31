<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('asunto');
            $table->string('cuerpo');
            $table->timestamps();
            $table->boolean('remitenteisadmin');
            $table->bigInteger('idpropiedad');
            $table->foreign('idpropiedad')->references('idpropiedad')->on('habitantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacions');
    }
}
