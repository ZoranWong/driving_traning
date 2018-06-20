<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUserPositionsTable.
 */
class CreateUserPositionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_positions', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->point('position')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->macAddress('mac')->nullable();
            $table->timestamps();
            $table->engine = 'MyISAM';
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_positions');
	}
}
