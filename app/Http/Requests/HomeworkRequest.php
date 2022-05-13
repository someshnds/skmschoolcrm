<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkRequest extends FormRequest
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
            'title'         => ["required"],
            'teacher_id'    => ["required"],
            'class_id'      => ["required"],
            'section_id'    => ["required"],
            'subject_id'    => ["required"],
            'start_date'    => ["required"],
            'end_date'      => ["required"],
            'description'   => ["required"],
        ];
    }
}
