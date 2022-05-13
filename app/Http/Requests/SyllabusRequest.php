<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SyllabusRequest extends FormRequest
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
            'exam_id' => 'required',
            'subject_id' => 'required',
            'class_id' => 'required',
            'attachment' => 'required'
        ];
    }
}
