<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


/**
 * App\Entities\DrivingSchool
 *
 * @property int $id
 * @property float $amount 余额
 * @property float $totalWithdrewAmount 已提现钱
 * @property float $totalAmount 累计总额
 * @property string $name 驾校名称
 * @property string|null $trainingPlace 训练场地
 * @property string|null $location 驾校位置信息
 * @property string|null $instructions 驾校说明
 * @property int $studentNum 学生数量
 * @property int $cluesNum 教练人数
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string|null $deletedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereCluesNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereStudentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereTotalWithdrewAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereTrainingPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\DrivingSchool whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property float $totalWithdrewAmount 已提现钱
 * @property float $totalAmount 累计总额
 * @property string|null $trainingPlace 训练场地
 * @property int $studentNum 学生数量
 * @property int $cluesNum 教练人数
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string|null $deletedAt
 */
class DrivingSchool extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
