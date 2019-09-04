<?php

namespace Modules\Exibition\Http\Controllers\main;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use http\Exception;
use Modules\Exibition\Entities\Booth;
use Modules\Exibition\Entities\Exibition;

class ExController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
//    public function search()
//    {
//        return 'jlsdkfjsd';
//        $data=\request('search');
//        $exhibition=Exibition::Search($data)->get();
//        return view('exibition::main.index',compact('exhibition'));
//    }
    public function search(Request $request)
    {
         $data=\request('search');
        $exibition=Exibition::Search($data)->get();
        return view('exibition::main.index',compact('exibition'));
    }

    public function index()
    {
        try{
            $exibition=Exibition::whereIs_show(1)->latest()->paginate(20);
            return view('exibition::main.index',compact('exibition'));
        }
        catch (Exception $e){}
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('exibition::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(Exibition $exibition)
    {
        $reservedCount= $exibition->booths()->whereReserved(1)->count();
        return view('exibition::main.exidetail',compact('exibition','reservedCount'));
    }

    public function showboots(Exibition $exibition)
    {
        $booths=$exibition->booths()->get();
        return view('exibition::main.reservbooths',compact('booths'));
    }

    public function reserve(Booth $booth)
    {
        try{
            if (\auth()->check()) {
                $booth['reserved'] = 1;
                $booth['time_order'] = Carbon::now();
                $booth['user_id'] = Auth::user()->id;
                $booth->save();
                return redirect()->back();
            }else{
                $booth['reserved'] = 1;
                $booth['time_order'] = Carbon::now();
                $booth['order_info'] = \request('order_info');
                $booth->save();
                return redirect()->back();
            }
        }
        catch (Exception $e)
        {
        }


    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('exibition::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Booth $booth)
    {

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
