<?php

namespace Modules\Exibition\Entities;

use App\User;
use Carbon\Carbon;
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
    public function timeout($data)
    {
        $reg=Carbon::parse($data);
        $now=Carbon::now();
        $diff=$now->diffInDays($reg);
        if($diff>=1)
            return true;
        else return false;
    }
}
