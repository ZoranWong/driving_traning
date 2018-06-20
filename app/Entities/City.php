<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class City.
 *
 * @package namespace App\Entities;
 * @property int $id
 * @property int $provinceId 省份id
 * @property int $status 状态:0-未开发 1-开发 2-关停
 * @property string $name 名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\City whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\City whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\City whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $provinceId 省份id
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property int $provinceId 省份id
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 */
class City extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
