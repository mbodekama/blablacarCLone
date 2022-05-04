<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_apprenants', function (Blueprint $table) {
            $table->id();
            $table->string('lien_tp');
            $table->string('date_depot');
            $table->string('signale')->default('0');
            $table->unsignedBigInteger('tp_id');
            $table->foreign('tp_id')->references('id')
                    ->on('tp_modules')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tp_apprenants');
    }
}
