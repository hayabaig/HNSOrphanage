<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('customer_id');
            $table->integer('orphan_id');
            $table->string('customer_name');
            $table->string('orphan_name');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('orphan_id')->references('id')->on('orphans');
            $table->foreign('customer_name')->references('name')->on('customers');
            $table->foreign('orphan_name')->references('name')->on('orphans');
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
        Schema::dropIfExists('adoptions');
    }
}
