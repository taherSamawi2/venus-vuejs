<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Client extends Model implements HasMedia
{
    use HasMediaTrait;
//    protected  $fillable = [
//    'logo','email', 'name', 'phone', 'request_date', 'note'
//
//];


    protected $guarded=[];


    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }




}
