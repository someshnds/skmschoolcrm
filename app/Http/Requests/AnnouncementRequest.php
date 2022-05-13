<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
        if ($this->method() === 'POST') {
            return [
                'title'          =>  ['required', 'max:255', 'unique:announcements,title'],
                'date'           =>  ['required', 'date'],
                'starting_time'  =>  ['required'],
                'ending_time'    =>  ['required'],
                'venue'    =>  ['required'],
                'description'    =>  ['required'],
            ];
        } else {
            return [
                'title'          =>  ['required', 'max:255', "unique:announcements,title,{$this->announcement->id}"],
                'date'           =>  ['required', 'date'],
                'starting_time'  =>  ['required'],
                'ending_time'    =>  ['required'],
                'venue'    =>  ['required'],
                'description'    =>  ['required'],
            ];
        }
    }
}
