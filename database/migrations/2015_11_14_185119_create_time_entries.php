<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TimeEntries', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->dateTime('ClockIn');
            $table->dateTime('ClockOut')->nullable()->default(NULL);
            $table->integer('logged_in')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('TimeEntries');
    }
}
