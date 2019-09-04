@extends('adminlte::page')

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <a href="{{route('exibition.index')}}" class="btn btn-primary">نمایشگاه ها</a>
            </div>
            <div class="ibox-content">
                <div class="row">
                    {{--<div class="col-sm-5 m-b-xs"><select class="input-sm form-control input-s-sm inline">--}}
                            {{--<option value="0">گزینه 1</option>--}}
                            {{--<option value="1">گزینه 2</option>--}}
                            {{--<option value="2">گزینه 3</option>--}}
                            {{--<option value="3">گزینه 4</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4 m-b-xs">--}}
                        {{--<div data-toggle="buttons" class="btn-group">--}}
                            {{--<label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> روز </label>--}}
                            {{--<label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> هفته </label>--}}
                            {{--<label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> ماه </label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-sm-3">
                        <form action="/panel/search1">
                        <div class="input-group"><input name="search" type="text" placeholder="جستجو" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="submit"  class="btn btn-sm btn-primary"> برو!</button> </span></div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>عنوان غرفه</th>
                            <th>توضیحات</th>
                            <th>مساحت</th>
                            <th>مربوط به نمایشگاه</th>
                            <th>تایید رزرو</th>
                            <th>وضعیت</th>
                            <th>مشخصات سفارش دهنده</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($booths as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->detail}}</td>
                                <td>{{$value->area}}</td>
                                <td>{{$value->exibition['title']}}</td>
                                <td>@if($value->confrim_order == true )
                                        <a href="{{route('unconfrim_reserve',['id'=>$value->id])}}"><button class="btn btn-primary">تایید شده</button></a>
                                        @else
                                        <a  href="{{route('confrim_reserve',['id'=>$value->id])}}"><button class="btn btn-danger" >تایید نشده</button></a>
                                        @endif

                                </td>
                                <td>
                                    @if($value->reserved==true && $value->confrim_order==true)
                                        <p class="btn-sm btn-default">رزرو شده</p>
                                        @elseif($value->reserved==true)
                                        <p class="btn-sm btn-primary">سفارش داده شده</p>
                                        @else
                                            <p class="btn-sm btn-danger">آزاد</p>
                                        @endif

                                </td>
                                <td> @if($value->reserved==true)
                                        {{$value->user['name']}}
                                        {{ $value->order_info}}
                                    @endif
                                </td>
                                <td>
                                    <form onsubmit="return confirm('آیا مایل به حذف این غرفه می باشید؟');" action="/panel/booth/{{$value->id}}" method="post">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}
                                        <div class="btn-groupr btn-group-xs">
                                            <a href="/panel/booth/edit/{{$value->id}}" class="btn btn-primary">ویرایش</a>
                                            <a href="/panel/booth/{{$value->id}}" class="btn btn-info">جزئیات</a>
                                            <button type="submit" class="btn btn-danger">حذف</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@stop

