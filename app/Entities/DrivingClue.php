<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * App\Entities\DrivingClue
 *
 * @property int $id
 * @property string $channel 线索来源：JIA_KAO_BAO_DIAN-驾考宝典 CHE_LUN-车轮驾考通 37_LIFE-自营平台线索 BAIDU-百度推广 TOUTIAO-今日头条 WECHAT-微信分享 OTHER-其他
 * @property int $isStudent 是否是学生
 * @property int $bdUserId 客户开发人员
 * @property string $customerName 客户姓名
 * @property string $customerMobile 客户电话
 * @property string $drivingLicenseType 驾照类型
 * @property int $followUpTime 跟进时间
 * @property string $intention 客户意向
 * @property string $followUpRecord 跟进备注
 * @property string $customerPlan 学车报名计划
 * @property int $actualEnrollTime 实际报名时间
 * @property int $expectPhysicalExaminationTime 预计体检时间
 * @property int $expectExaminationOneTime 预计科目一考试时间
 * @property int $expectExaminationTwoTime 预计科目二考试时间
 * @property int $expectExaminationThreeTime 预计科目三考试时间
 * @property int $expectExaminationFourTime 预计科目四考试时间
 * @property int $expectGetLicenseTime 预计拿证时间
 * @property int $actualPhysicalExaminationTime 实际体检时间
 * @property int $actualExaminationOneTime 实际科目一考试时间
 * @property int $actualExaminationTwoTime 实际科目二考试时间
 * @property int $actualExaminationThreeTime 实际科目三考试时间
 * @property int $actualExaminationFourTime 实际科目四考试时间
 * @property int $actualGetLicenseTime 实际拿证时间
 * @property int $provinceId 学员省份
 * @property int $cityId 城市id
 * @property int $countyId 区县id
 * @property string $location 客户所在的经纬度:{x:120.231323112, y: 231.2312432}
 * @property string $address 客户所在地址
 * @property string $wantDrivingSchool 意向驾校
 * @property string $drivingSchool 推荐驾校
 * @property string $trainingPlace 训练场地
 * @property float $planFee 预算价格
 * @property float $quotedPrice 报价
 * @property int $dealTime 成交时间
 * @property float $dealPrice 成交价
 * @property float $basePrice 底价
 * @property float $profit 利润
 * @property float $commission 提出
 * @property float $bonus 管理分红
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string|null $deletedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualEnrollTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualExaminationFourTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualExaminationOneTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualExaminationThreeTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualExaminationTwoTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualGetLicenseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereActualPhysicalExaminationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereBdUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCountyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCustomerMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereCustomerPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereDealPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereDealTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereDrivingLicenseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereDrivingSchool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereExpectExaminationFourTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereExpectExaminationOneTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereExpectExaminationThreeTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereExpectExaminationTwoTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereExpectGetLicenseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereExpectPhysicalExaminationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereFollowUpRecord($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereFollowUpTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereIntention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereIsStudent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue wherePlanFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereProfit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereQuotedPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereTrainingPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingClue whereWantDrivingSchool($value)
 * @mixin \Eloquent
 */
class DrivingClue extends Model implements Transformable
{
    use TransformableTrait;

    const WAIT = 0;

    const DEVELOPING = 1;

    const SUCCESS_DEVELOP = 2;

    const FAILED_DEVELOP = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
