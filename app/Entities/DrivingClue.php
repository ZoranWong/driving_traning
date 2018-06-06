<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class DrivingClue.
 *
 * @package namespace App\Entities;
 */
class DrivingClue extends Model implements Transformable
{
    use TransformableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'channel', 'is_student', 'bd_user_id', 'customer_name', 'customer_mobile', 'driving_license_type', 'follow_up_time',
        'intention', 'follow_up_record', 'customer_plan', 'actual_enroll_time', 'expect_physical_examination_time',
        'expect_examination_one_time', 'expect_examination_two_time', 'expect_examination_three_time', 'expect_examination_four_time',
        'expect_get_license_time', 'actual_physical_examination_time', 'actual_examination_one_time', 'actual_examination_two_time',
        'actual_examination_three_time', 'actual_examination_four_time', 'actual_get_license_time', 'province_id', 'city_id', 'county_id',
        'location', 'address', 'want_driving_school', 'driving_school', 'training_place', 'plan_fee', 'quoted_price', 'deal_time',
        'deal_price', 'base_price', 'profit', 'commission', 'bonus'
    ];

    const EXCEL_HEADER_TITLES = [
        'id' => 'ID', 'channel' => '渠道', 'is_student' => '是否学生', 'bd_user_name' => 'BD', 'customer_name' => '学员姓名',
        'customer_mobile' => '学员电话', 'driving_license_type' => '驾照类型', 'follow_up_time' => '最后跟进时间',
        'intention' => '意向度', 'follow_up_record' => '备注', 'customer_plan' => '计划报名时间', 'actual_enroll_time' => '实际报名时间',
        'expect_physical_examination_time' => '预期体检时间', 'actual_physical_examination_time' => '实际体检时间',
        'expect_examination_one_time' => '预期科目一考试时间', 'actual_examination_one_time' => '实际科目一考试时间',
        'expect_examination_two_time' => '预期科目二考试时间', 'actual_examination_two_time' => '实际科目二考试时间',
        'expect_examination_three_time' => '预期科目三考试时间', 'actual_examination_three_time' => '实际科目三考试时间',
        'expect_examination_four_time' => '预期科目四考试时间', 'actual_examination_four_time' => '实际科目四考试时间',
        'expect_get_license_time' => '预期拿证时间', 'actual_get_license_time' => '实际拿证时间',
        'location' => '定位', 'address' => '学员地址', 'want_driving_school' => '意向驾校', 'driving_school' => '推荐驾校',
        'training_place' => '推荐训练场', 'plan_fee' => '学员预算', 'quoted_price' => '报价', 'deal_time' => '成交时间',
        'deal_price' => '成交价', 'base_price' => '底价', 'profit' => '利润', 'commission' => '提成', 'bonus' => '分红'
    ];

}
