<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Changelog\ChangelogResource;
use App\Http\Resources\Changelog\ChangelogCollection;

class ProjectResource extends JsonResource
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
      $this->title =>[
                      'title'=>$this->title,
                      'description'=>$this->description,
                       'changelogs'=>
                        ChangelogResource::collection($this->changelogs()->paginate())
            ]
        ];
    }
}
