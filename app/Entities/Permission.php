<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


/**
 * App\Entities\Permission
 *
 * @property int $id
 * @property string $slug 权限唯一标识
 * @property string $displayName 显示名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Permission whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
