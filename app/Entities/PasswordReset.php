<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * App\Entities\PasswordReset
 *
 * @property string $email
 * @property string $mobile
 * @property string $token
 * @property \Carbon\Carbon|null $createdAt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\PasswordReset whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\PasswordReset whereToken($value)
 * @mixin \Eloquent
 * @property \Carbon\Carbon|null $createdAt
 */
class PasswordReset extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
