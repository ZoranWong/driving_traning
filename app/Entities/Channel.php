<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Channel.
 *
 * @package namespace App\Entities;
 * @property int $id
 * @property string $slug 英文标示
 * @property string $name 渠道名称
 * @property string|null $url 推广路径
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Channel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Channel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Channel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Channel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Channel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Channel whereUrl($value)
 * @mixin \Eloquent
 */
class Channel extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'name',
        'url'
    ];

}
