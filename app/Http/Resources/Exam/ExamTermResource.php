<?php

namespace App\Http\Resources\Exam;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamTermResource extends JsonResource
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
            'id'            =>  $this->id,
            'name'          =>  $this->name,
            'note'          =>  $this->note,
            'created_at'    =>  $this->created_at
        ];
    }
}
