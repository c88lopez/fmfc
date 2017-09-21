<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionalUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functional_units', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('consortium_id')->unsigned();
            $table->integer('functional_unit_owner_id')->unsigned();

            $table->string('code', 6);

            $table->foreign('consortium_id')->references('id')->on('consortia');
            $table->foreign('functional_unit_owner_id')->references('id')->on('functional_unit_owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functional_units');
    }
}
