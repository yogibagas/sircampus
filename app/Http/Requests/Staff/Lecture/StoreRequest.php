<?php

namespace App\Http\Requests\Staff\Lecture;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'phone'=>'required|numeric',
            'address'=>'required',
            'idCourses'=>'required'
        ];
    }
}
