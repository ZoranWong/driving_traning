<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateChannelsTable.
 */
class CreateChannelsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('channels', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique()->comment('英文标示');
            $table->string('name')->comment('渠道名称');
            $table->text('url')->nullable()->default(null)->comment('推广路径');
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
		Schema::drop('channels');
	}
}
