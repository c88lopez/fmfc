<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionalUnitOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functional_unit_owners', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name', 45);
            $table->string('lastname', 45);
            $table->string('email', 90);
            $table->string('tel', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functional_unit_owners');
    }
}
