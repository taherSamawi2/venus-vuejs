<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\File;


class Project extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $guarded=[];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }


    public function registerMediaCollections()
    {
        $this->addMediaCollection('projects')
            ->withResponsiveImages()
            ->acceptsMimeTypes(['image/jpeg','image/jpg','image/png','image/gif']);

//        ->registerMediaConversions(function (){
//                $this->addMediaConversion('card')
//                    ->width(368)
//                    ->height(232);
//
//                $this->addMediaConversion('origin')
//                    ->width()
//                    ->height();
//             });

    }


}
