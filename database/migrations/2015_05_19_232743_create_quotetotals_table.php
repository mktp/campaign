<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotetotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotetotals', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('modelclient');
            $table->integer('compute');
            $table->integer('design');
            $table->integer('consulting');
            $table->integer('btl');
            $table->integer('other');
            $table->integer('total');
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
        Schema::drop('quotetotals');
    }
}
