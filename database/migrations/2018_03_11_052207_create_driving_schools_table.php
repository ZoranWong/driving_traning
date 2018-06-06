<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrivingSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount', 12, 4)->default(0)->comment('余额');
            $table->float('total_withdrew_amount', 12, 4)->default(0)->comment('已提现钱');
            $table->float('total_amount', 12, 4)->default(0)->comment('累计总额');
            $table->string('name')->default('')->comment('驾校名称');
            $table->string('training_place')->nullable()->comment('训练场地');
            $table->point('location')->nullable()->comment('驾校位置信息');
            $table->text('instructions')->nullable()->comment('驾校说明');
            $table->unsignedInteger('student_num')->default(0)->comment('学生数量');
            $table->unsignedInteger('clues_num')->default(0)->comment('教练人数');
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
        Schema::dropIfExists('driving_schools');
    }
}
