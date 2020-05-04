<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class client extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $clientLogo='';
        foreach ($this->getMedia('logos') as  $logo){
              $clientLogo =  $logo->getFullUrl();
        }

        return [
            'id'                         => $this->id,
            'name'                          => $this->name,
            'email'                         => $this->email,
            'logo'                            =>$clientLogo,
            'about_client'                    => $this->about_client,
            'client_opinion'                   => $this->client_opinion,
        ];

    }
}
