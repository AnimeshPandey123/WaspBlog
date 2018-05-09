<?php

namespace App\Http\Resources\Project;

use App\Http\Resources\Project\ProjectResource;
use App\Http\Resources\Changelog\ChangelogResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        ProjectResource::collection( $this->collection)
       
        ];
    }
}
