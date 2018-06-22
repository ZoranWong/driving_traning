<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateDrivingCluesTable.
 */
class CreateDrivingCluesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('driving_clues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('channel')
                ->default('owner')
                ->comment('线索来源');
            $table->boolean('is_student')->default(false)->comment('是否是学生');
            $table->unsignedInteger('bd_user_id')->default(0)->comment('客户开发人员');
            $table->string('customer_name', 60)->default('')->comment('客户姓名');
            $table->string('customer_mobile', 11)->default('')->comment('客户电话');
            $table->enum('driving_license_type', ['A1', 'A2','A3','B1','B2','C1','C2','C3','C4','D',
                'E', 'F', 'M', 'N', 'P'])->default('C1')->comment('驾照类型');
            $table->unsignedInteger('follow_up_time')->default(0)->comment('跟进时间');
            $table->enum('intention', ['NEED_NOT', 'POTENTIAL', 'HIGH_DEMAND', 'LOW_DEMAND', 'DEAL',
                'NO_ANSWER'])->default(null)->comment('客户意向');
            $table->string('follow_up_record')->default('')->comment('跟进备注');
            $table->enum('customer_plan', ['HAD_BEEN', 'ONE_WEEK', 'ONE_MONTH', 'THREE_MONTH', 'SIX_MONTH',
                'NOT_PLAN'])->default(null)->comment('学车报名计划');
            $table->unsignedInteger('actual_enroll_time')->default(0)->comment('实际报名时间');
            $table->unsignedInteger('expect_physical_examination_time')->default(0)->comment('预计体检时间');
            $table->unsignedInteger('expect_examination_one_time')->default(0)->comment('预计科目一考试时间');
            $table->unsignedInteger('expect_examination_two_time')->default(0)->comment('预计科目二考试时间');
            $table->unsignedInteger('expect_examination_three_time')->default(0)->comment('预计科目三考试时间');
            $table->unsignedInteger('expect_examination_four_time')->default(0)->comment('预计科目四考试时间');
            $table->unsignedInteger('expect_get_license_time')->default(0)->comment('预计拿证时间');

            $table->unsignedInteger('actual_physical_examination_time')->default(0)->comment('实际体检时间');
            $table->unsignedInteger('actual_examination_one_time')->default(0)->comment('实际科目一考试时间');
            $table->unsignedInteger('actual_examination_two_time')->default(0)->comment('实际科目二考试时间');
            $table->unsignedInteger('actual_examination_three_time')->default(0)->comment('实际科目三考试时间');
            $table->unsignedInteger('actual_examination_four_time')->default(0)->comment('实际科目四考试时间');
            $table->unsignedInteger('actual_get_license_time')->default(0)->comment('实际拿证时间');

            $table->unsignedInteger('province_id')->default(0)->comment('学员省份');
            $table->unsignedInteger('city_id')->default(0)->comment('城市id');
            $table->unsignedInteger('county_id')->default(0)->comment('区县id');
            $table->string('location')->default(null)->comment('客户所在的经纬度:{x:120.231323112, y: 231.2312432}');
            $table->string('address')->default('')->comment('客户所在地址');
            $table->string('want_driving_school')->default('')->comment('意向驾校');
            $table->string('driving_school')->default('')->comment('推荐驾校');
            $table->string('training_place')->default('')->comment('训练场地');
            $table->float('plan_fee')->default(0)->comment('预算价格');
            $table->float('quoted_price')->default(0)->comment('报价');
            $table->unsignedInteger('deal_time')->default(0)->comment('成交时间');
            $table->float('deal_price')->default(0)->comment('成交价');
            $table->float('base_price')->default(0)->comment('底价');
            $table->float('profit')->default(0)->comment('利润');
            $table->float('commission')->default(0)->comment('提出');
            $table->float('bonus')->default(0)->comment('管理分红');
            $table->integer('status')->default(0)->comment('0待开发 1 开发中 2 开发成功 3 开发失败');
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('driving_clues');
	}
}
