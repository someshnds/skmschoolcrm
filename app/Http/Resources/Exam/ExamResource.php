<?php

namespace App\Http\Resources\Exam;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        =>  $this->id,
            'name'      =>  $this->name,
            'start_date'      =>  $this->start_date,
            'end_date'      =>  $this->end_date,
            'note'      =>  $this->note,
            'session_id'   =>  $this->session_id,
        ];
    }
}
