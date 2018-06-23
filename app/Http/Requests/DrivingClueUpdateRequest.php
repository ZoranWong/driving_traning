<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrivingClueUpdateRequest extends FormRequest
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
            'channel_slug' => ['required', 'exist:channels,slug'],
            'customer_mobile' => ['required', 'regex:'.RegularExp::MOBILE_REG_EXP]
        ];
    }
}
