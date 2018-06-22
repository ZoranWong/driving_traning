<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * App\Entities\County
 *
 * @property int $id
 * @property int $provinceId 省份id
 * @property int $status 状态:0-未开发 1-开发 2-关停
 * @property string $name 名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\County whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\County whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\County whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\County whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\County whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\County whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $provinceId 省份id
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 */
class County extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
