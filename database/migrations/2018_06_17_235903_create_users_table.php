<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name')->comment('用户名');
            $table->string('nickname')->default('')->comment('用户昵称');
            $table->string('email', 256)->nullable()->comment('登录邮箱');
            $table->string('mobile', 11)->nullable()->comment('手机号');
            $table->enum('sex', ['MALE', 'FEMALE'])->default('MALE')->comment('性别');
            $table->unsignedTinyInteger('province_id')->default(0)->comment('省份ID');
            $table->unsignedSmallInteger('city_id')->default(0)->comment('城市ID');
            $table->unsignedSmallInteger('county_id')->default(0)->comment('区县ID');
            $table->string('birthday', 10)->nullable()->comment('出生日期');
            $table->string('password')->comment('密码');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->unique('email');
            $table->unique('mobile');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
