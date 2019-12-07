<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\objectRule;

class Validate extends FormRequest
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
        // su dung cloure
//        return [
//            'number' => ['required',function($attribute, $value, $fail) {
//                if (!(($value % 4 == 0) && ($value % 100!= 0)) || ($value%400 == 0)) {
//                    $fail('day khong la mot nam nhuan');
//                }
//            }]
//        ];
        // su dung extendtends
        return [
            'number' => ['required','number1']
        ];
        // su dung object rules
//        return [
//                'number' => ['required', 'string', new objectRule],
//        ];
    }
    public function messages()
    {
        return ['number.required'=> 'number is required'];
    }
}
