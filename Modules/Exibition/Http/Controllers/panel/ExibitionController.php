<?php

namespace Modules\Exibition\Http\Controllers\panel;

use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Exibition\Entities\Exibition;
use Modules\Exibition\Http\Requests\ExiRequest;

class ExibitionController extends AdminController
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
      $exhibitions=Exibition::Search($data)->get();
        return view('exibition::panel.Exibition.index',compact('exhibitions'));
    }
    public function index()
    {
        $exhibitions=Exibition::latest()->paginate(10);
        return view('exibition::panel.Exibition.index',compact('exhibitions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('exibition::panel.Exibition.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(ExiRequest $request)
    {
        try {
            $image = $this->imageUploader($request->file('image'));

            Exibition::create(array_merge($request->all(), ['image' => $image]));
            return redirect(route('exibition.index'));
        }
        catch (Exception $e){

        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(Exibition $exibition)
    {
        return view('exibition::panel.Exibition.show',compact('exibition'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Exibition $exibition)
    {
        try {
            return view('exibition::panel.Exibition.edit', compact('exibition'));
        }
        catch (Exception $e){

        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(ExiRequest $request, Exibition $exibition)
    {
        try {
            if ($request['image']) {
                $file = $this->imageUploader($request['image']);
            } else {
                $file = $exibition->image;
            }
            $data = $request->all();
            $data['image'] = $file;
//
            $exibition->update($data);
            return redirect(route('exibition.index'));
        }
        catch (Exception $e){

        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Exibition $exibition)
    {
       try{
           $exibition->delete();
           return redirect(route('exibition.index'));
       }
       catch (Exception $e){

       }
    }
}
