<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserPosition;

/**
 * Class UserPositionTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserPositionTransformer extends TransformerAbstract
{
    /**
     * Transform the UserPosition entity.
     *
     * @param \App\Entities\UserPosition $model
     *
     * @return array
     */
    public function transform(UserPosition $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
