<?php

namespace App\Http\Resources\Changelog;

use Illuminate\Http\Resources\Json\JsonResource;

class ChangelogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
            //  'id'=>$this->id,
            'title'        => $this->title,
            'project_name' => $this->project->title,
            'date'         => $this->date,
            'description'  => $this->description,
        ];
    }
}
