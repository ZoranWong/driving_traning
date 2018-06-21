<?php

namespace App\Repositories;

use App\Repositories\Traits\RepositoryExtends;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DrivingClueRepository;
use App\Entities\DrivingClue;
use App\Validators\DrivingClueValidator;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class DrivingClueRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DrivingClueRepositoryEloquent extends BaseRepository implements DrivingClueRepository
{
    use RepositoryExtends;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return DrivingClue::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     * @throws RepositoryException
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
