<?php

namespace App\Http\Resources\Changelog;

use App\Http\Resources\Changelog\ChangelogResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ChangelogCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ChangelogResource::Collection($this->collection);
    }
}
