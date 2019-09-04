@extends('adminlte::page')
@section('content')
    <button class="btn btn-primary">افزودن غرفه</button>
    <div style="text-align: center;">
        <h3>{{$booth->title}}</h3>
    </div>
    <div style="text-align: center;">
        <img height="400px" width="400px" src="{{$booth->image}}" alt="">
    </div>
    <div align="center"  >
        <label for="">توضیحات</label>
        <h5>{{$booth->detail}}</h5>
        <label for="">مربوط به نمایشگاه</label>
        <h5>{{$booth->exibition->title}}</h5>
        <label for="">مساحت غرفه</label>
        <h5>{{$booth->area}}</h5>
        <label for="">وضعیت غرفه</label>
        <h5>
            @if($booth->reserved == 1)  رزرو شده
            @else آزاد
                @endif
        </h5>
        <br>
        <br>
        <br>
    </div>

    @endsection


