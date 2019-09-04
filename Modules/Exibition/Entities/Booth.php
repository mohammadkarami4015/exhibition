<?php

namespace Modules\Exibition\Entities;

use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Booth extends Model
{

    protected $guarded = [];



    public function exibition()
    {
        return $this->belongsTo(Exibition::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public  function scopeSearch($query,$data)
    {
        $query->where('title','like','%'.$data.'%')
            ->orwhere('detail','like','%'.$data.'%')
            ->orwhere('area','like','%'.$data.'%');
        return $query;
    }
}
