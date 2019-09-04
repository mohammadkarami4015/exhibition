<?php

namespace Modules\Exibition\Http\Controllers\panel;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Sluggable;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function imageUploader($file){

        $filename=time().'-'.$file->getClientOriginalName();
        $path=public_path('/uploads/images/');
        $file->move($path,$filename);
        return '/uploads/images/'.$filename;
    }


}
