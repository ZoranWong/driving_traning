<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


/**
 * App\Entities\Province
 *
 * @property int $id
 * @property string $code 行政编码
 * @property int $status 状态:0-未开发 1-开发 2-关停
 * @property string $firstWord 首字母
 * @property string $name 名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereFirstWord($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Province whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Province extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
