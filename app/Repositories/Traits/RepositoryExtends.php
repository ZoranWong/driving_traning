<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/6/20
 * Time: 下午9:33
 */

namespace App\Repositories\Traits;


trait RepositoryExtends
{
    public function count()
    {
        return $this->get()->count();
    }
}