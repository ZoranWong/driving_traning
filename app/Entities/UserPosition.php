<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


/**
 * App\Entities\UserPosition
 *
 * @property int $id
 * @property int $userId
 * @property string|null $position
 * @property string|null $ip
 * @property string|null $mac
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition whereMac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\UserPosition whereUserId($value)
 * @mixin \Eloquent
 */
class UserPosition extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
