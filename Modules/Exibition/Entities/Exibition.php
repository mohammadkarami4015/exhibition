<?php

namespace Modules\Exibition\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Exibition extends Model
{

    protected $guarded = [];

    public function booths()
    {
        return $this->hasMany(Booth::class);

 }
    public  function scopeSearch($query,$data)
    {
        $query->where('title','like','%'.$data.'%')
            ->orwhere('detail','like','%'.$data.'%')
            ->orwhere('province','like','%'.$data.'%')
            ->orwhere('city','like','%'.$data.'%')
            ->orwhere('address','like','%'.$data.'%');
        return $query;
    }

}
