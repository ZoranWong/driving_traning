<?php

namespace App\Http\Requests;

use App\Utils\RegularExp;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClueCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'channel' => ['required', Rule::in(['JIA_KAO_BAO_DIAN', 'CHE_LUN', '37_LIFE', 'BAIDU', 'TOUTIAO', 'WECHAT', 'OTHER'])],
            'customer_name' => ['required'],
            'customer_mobile' => ['required', 'regex:'.RegularExp::MOBILE_REG_EXP]
        ];
    }
}
