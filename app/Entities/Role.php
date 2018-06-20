<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Role.
 *
 * @package namespace App\Entities;
 * @property int $id
 * @property string $slug 角色唯一标识
 * @property string $displayName 角色显示名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $displayName 角色显示名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 * @property string $displayName 角色显示名称
 * @property \Carbon\Carbon|null $createdAt
 * @property \Carbon\Carbon|null $updatedAt
 */
class Role extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
