<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->default(0)->comment('合伙人user id');
            $table->float('commission_amount', 12, 4)->default(0)->comment('合伙人佣金余额');
            $table->float('total_commission_amount', 12, 4)->default(0)->comment('合伙人佣金累计额度');
            $table->float('total_withdrew_commission_amount', 12, 4)->default(0)->comment('合伙人佣金已提现额度');
            $table->unsignedTinyInteger('level')->default(1)->comment('等级：1-班长；2-排长；3-连长；');
            $table->unsignedInteger('father_id')->nullable()->comment('上级合伙人ID');
            $table->unsignedInteger('grant_father_id')->nullable()->comment('上上级合伙人ID');
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
        Schema::dropIfExists('partners');
    }
}
