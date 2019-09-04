@extends('adminlte::page')
@section('content')
    <button class="btn btn-primary">افزودن غرفه</button>
    <div style="text-align: center;">
        <h3>{{$exibition->title}}</h3>
    </div>
    <div style="text-align: center;">
        <img src="{{$exibition->image}}" alt="">
    </div>
    <div align="center"  >
        <label for="">توضیحات</label>
        <h5>{{$exibition->detail}}</h5>
        <label for="">تاریخ شروع برگزاری</label>
        <h5>{{$exibition->start_holding}}</h5>
        <label for="">تاریخ پایان برگزاری</label>
        <h5>{{$exibition->end_holding}}</h5>
        <label for="">تاریخ شروع ثبت نام</label>
        <h5>{{$exibition->start_reg}}</h5>
        <label for="">تاریخ پایان ثبت نام</label>
        <h5>{{$exibition->end_reg}}</h5>
        <label for="">تعداد غرفه</label>
        <h5>{{$exibition->booth_count}}</h5>
        <label for="">قابل نمایش</label>
        <h5>
            @if($exibition->is_show == 1)بله
            @else خیر
            @endif
        </h5>
        <label for="">استان محل برگزاری</label>
        <h5>{{$exibition->province}}</h5>
        <label for="">شهر محل برگزاری</label>
        <h5>{{$exibition->city}}</h5>
        <label for="">آدرس محل برگزاری</label>
        <h5>{{$exibition->address}}</h5>
        <br>
        <br>
        <br>
    </div>

    @endsection


