<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpisoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spisoks', function (Blueprint $table) {
/*$table->bigIncrements('id');
$table->string('cne');
$table->string('firstname');
$table->string('secondname');
$table->integer('age');
$table->string('speciality');
$table->timestamps();*/

            /*$table->id();*/
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('company');
            $table->string('speciality');
            $table->string('mob_tel');
            $table->string('email');
            $table->string('groupe');
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
        Schema::dropIfExists('spisoks');
    }
}
