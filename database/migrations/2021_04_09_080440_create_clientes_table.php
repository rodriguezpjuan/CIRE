<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cli_rif', 12)->unique();
            $table->string('cli_razon', 60);
            $table->string('cli_dir', 60)->nullable();
            $table->string('cli_telf1', 50)->nullable();
            $table->string('cli_telf2', 50)->nullable();
            $table->string('cli_telf3', 50)->nullable();
            $table->tinyInteger('cli_tipo')->nullable()->default('0');   //  0 = Contribuyente ; 1 = No Contribuyente= N
            $table->tinyInteger('cli_activo')->nullable()->default('1');
            $table->string('cli_mail1', 50)->nullable();
            $table->string('cli_mail2', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
