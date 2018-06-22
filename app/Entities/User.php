<?php

namespace App\Entities;

use App\Entities\Traits\ModelAttributesAccess;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


/**
 * App\Entities\User
 *
 * @property int $id
 * @property string $userName 用户名
 * @property string $nickname 用户昵称
 * @property string|null $email 登录邮箱
 * @property string|null $mobile 手机号
 * @property string $sex 性别
 * @property int $provinceId 省份ID
 * @property int $cityId 城市ID
 * @property int $countyId 区县ID
 * @property string|null $birthday 出生日期
 * @property string $password 密码
 * @property string|null $rememberToken
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string|null $deletedAt
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereCountyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereUserName($value)
 * @mixin \Eloquent
 * @property string $userName 用户名
 * @property int $provinceId 省份ID
 * @property int $cityId 城市ID
 * @property int $countyId 区县ID
 * @property string|null $rememberToken
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string|null $deletedAt
 */
class User extends Model implements Transformable
{
    use TransformableTrait, Notifiable, ModelAttributesAccess;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'nickname',
        'email',
        'mobile',
        'sex',
        'province_id',
        'city_id',
        'county_id',
        'birthday',
        'password',
        'remember_token'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

}
