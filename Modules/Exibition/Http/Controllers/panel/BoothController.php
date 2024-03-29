<?php

namespace Modules\Exibition\Http\Controllers\panel;

use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Exibition\Entities\Booth;
use Modules\Exibition\Entities\Exibition;
use Modules\Exibition\Http\Requests\BoothRequest;

class BoothController extends AdminController
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */


    public function search(Request $request)
    {
        $data=\request('search');
        $booths=Booth::Search($data)->get();
        return view('exibition::panel.booth.index',compact('booths'));
    }
    public function index()
    {
       try{
           $booths=Booth::all();

//unreserve after 24h
           foreach ($booths as $booth){
               if ($booth['confrim_order']==0) {
                   if ($booth->timeout($booth['time_order'])) {
                       $booth['reserved'] = 0;
                       $booth['time_order'] = null;
                       $booth['order_info'] = null;
                       $booth['user_id'] = 0;
                       $booth->save();
                   }
               }
           }
           return view('exibition::panel.booth.index',compact('booths'));
       }
       catch (Exception $e){}
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Exibition $exibition)
    {
        try{
//            $exibitions=Exibition::all();
            return view('exibition::panel.booth.create',compact('exibition'));
        }
        catch (Exception $e){}
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(BoothRequest $request)
    {
        try {
            $image = $this->imageUploader($request->file('image'));

            Booth::create(array_merge($request->all(), ['image' => $image]));
            return redirect(route('booth.index'));
        }
        catch (Exception $e){
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(Booth $booth)
    {
        return view('exibition::panel.booth.show',compact('booth'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Booth $booth)
    {
        $exibitions=Exibition::all();
        return view('exibition::panel.booth.edit',compact('booth','exibitions'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(BoothRequest $request, Booth $booth)
    {

        try {
            if ($request['image']) {
                $file = $this->imageUploader($request['image']);
            } else {
                $file = $booth->image;
            }
            $data = $request->all();
            $data['image'] = $file;
//
            $booth->update($data);
            return redirect(route('booth.index'));
        }
        catch (Exception $e){

        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Booth $booth)
    {
        $booth->delete();
        return redirect(route('booth.index'));
    }

    public function confrim(Booth $booth)
    {
        if ($booth['reserved'] == 1){
            $booth['confrim_order'] = 1;
            $booth->save();
        }
        return redirect()->back();

    }
    public function unconfrim(Booth $booth)
    {
        $booth['confrim_order'] = 0;
        $booth['order_info'] = null;
        $booth['user_id'] = 0;
        $booth['reserved']= 0;
        $booth['time_order']=null;
        $booth->save();
        return redirect()->back();
    }

}
