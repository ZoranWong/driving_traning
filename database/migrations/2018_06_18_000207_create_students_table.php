<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateStudentsTable.
 */
class CreateStudentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->comment('用户id');
            $table->string('open_id')->default(null)->comment('微信open_id');
            $table->string('group_id')->default(null)->comment('微信群group id');
            $table->string('real_name')->comment('学生姓名');
            $table->string('mobile', 11)->comment('手机');
            $table->string('qq', 9)->nullable();
            $table->string('wechat', 60)->nullable();
            $table->string('school_info')->nullable();
            $table->enum('status', ['UNKNOWN', 'STUDY', 'DONE'])->default('UNKNOWN')->comment('学生学车状态');
            $table->timestamps();
            $table->softDeletes();
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
		Schema::drop('students');
	}
}
