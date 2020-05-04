<?php

namespace App\Http\Resources;
use App\Http\Resources\client as ClientResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Project extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $project_thumbs=[];
        foreach ( $this->getMedia('thumbnail_project') as  $thumb){
            $project_thumbs[] = $thumb->getFullUrl();
        }

        $project_photos=[];
        foreach ( $this->getMedia('project_photos') as  $photo){
            $project_photos[] = $photo->getUrl();
        }

        return [
            'id'                     => $this->id,
            'name'                   => $this->name,
            'department'             => $this->department,
            'client' =>                 ClientResource::collection($this->clients),
            'industry'               => $this->industry,
            'work_we_delivered'      => $this->work_we_delivered,
            'description'            => $this->description,
            'thumbnail'              => $project_thumbs,
            'project_photos'         =>  $project_photos,
            'date_start'             => $this->date_start,
            'date_end'               => $this->date_end,
        ];
    }

}
