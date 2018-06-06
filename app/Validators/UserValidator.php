<?php

namespace App\Validators;

use Illuminate\Validation\Rule;
use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => [
                'required',
                'string'
            ],
            'email' => ['email', 'required_if_no:mobile'],
            'mobile' => ['mobile', 'required_if_no:email']
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
