<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * \\ ekhane true kore dibo .. auth set korar por abar false kore dibe
     */
    public function authorize()
    {
        return true;
    }

    /**
     * \\ ekhane true kore dibo .. auth set korar por abar false kore dibe
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
