<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


/**
 * App\Entities\Student
 *
 * @property int $id
 * @property int|null $userId 用户id
 * @property string $openId 微信open_id
 * @property string $groupId 微信群group id
 * @property string $realName 学生姓名
 * @property string $mobile 手机
 * @property string|null $qq
 * @property string|null $wechat
 * @property string|null $schoolInfo
 * @property string $status 学生学车状态
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string|null $deletedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereOpenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereQq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereSchoolInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Student whereWechat($value)
 * @mixin \Eloquent
 */
class Student extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
