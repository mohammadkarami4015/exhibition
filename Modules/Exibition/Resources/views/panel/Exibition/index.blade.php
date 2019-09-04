@extends('adminlte::page')

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <a href="{{route('exibition.create')}}" class="btn btn-primary">افزودن نمایشگاه</a>
                <a href="{{route('booth.index')}}" class="btn btn-info">غرفه ها</a>
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
                        <form action="/panel/search">
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
                            <th>عنوان نمایشگاه</th>
                            <th>شروع برگذاری</th>
                            <th>پایان برگذاری</th>
                            <th>شروع ثبت نام</th>
                            <th>پایان ثبت نام</th>
                            <th>تعداد غرفه</th>
                            <th>نمایش داده شود</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($exhibitions as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->start_holding}}</td>
                                <td>{{$value->end_holding}}</td>
                                <td>{{$value->start_reg}}</td>
                                <td>{{$value->end_reg}}</td>
                                <td>{{$value->booth_count}}</td>
                                <td>@if($value->is_show == 1)
                                        بله
                                        @else
                                            خیر
                                        @endif
                                </td>
                                <td>
                                    <form onsubmit="return confirm('آیا مایل به حذف این نمایشگاه می باشید؟');" action="/panel/exibition/destroy/{{$value->id}}" method="post">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}
                                        <div class="btn-groupr btn-group-xs">
                                            <a href="/panel/exibition/edit/{{$value->id}}" class="btn btn-primary">ویرایش</a>
                                            <a href="/panel/exibition/{{$value->id}}" class="btn btn-info">جزئیات</a>
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

