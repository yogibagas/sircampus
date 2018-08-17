<?php

namespace App\Http\Requests\Staff\Schedule;

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
                'firstDate' => "required",
                'timeStart' => "required",
                'duration' => "required|min:50|max:100|numeric",
                'class_id' => "required",
                'lecture_id' => "required"
        ];
    }
}
