<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DrivingClueRepository;
use App\Entities\DrivingClue;
use App\Validators\DrivingClueValidator;

/**
 * Class DrivingClueRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DrivingClueRepositoryEloquent extends BaseRepository implements DrivingClueRepository
{
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
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
