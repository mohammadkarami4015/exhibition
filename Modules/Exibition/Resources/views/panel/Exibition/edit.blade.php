@extends('adminlte::page')

@section('title', 'ویرایش ')

@section('content')
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>

        @endforeach
    @endif

    <form method="post" action="/panel/exibition/update/{{$exibition->id}}" enctype="multipart/form-data" class="form-horizontal">
        {{method_field('patch')}}
        {{csrf_field()}}
        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">عنوان نمایشگاه</label>
            <div class="col-sm-6">
                <input type="text" name="title" value="{{$exibition->title}}" class="form-control input-lg m-b">
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">توضیحات</label>
            <div class="col-sm-6">
                <input type="text" name="detail" value="{{$exibition->detail}}" class="form-control input-lg m-b">
            </div>
        </div>


        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">تاریخ شروع برگزاری</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="start_holding" type="text" value="{{$exibition->start_holding}}" class="date form-control"></div>
                    <label class="col-sm-2 control-label">تاریخ پایان برگزاری</label>
                    <div class="col-md-2"><input  name="end_holding" type="text" value="{{$exibition->end_holding}}" class="date form-control"></div>
                </div>
            </div>
        </div>


        <div class="form-group"><label class="col-sm-2 control-label">تاریخ شروع ثبت نام</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="start_reg" type="text" value="{{$exibition->start_reg}}" laceholder="" class="date form-control"></div>
                    <label class="col-sm-2 control-label">تاریخ پایان ثبت نام</label>
                    <div class="col-md-2"><input name="end_reg"   type="text" value="{{$exibition->end_reg}}" class="date form-control"></div>
                </div>
            </div>
        </div>

        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">تعداد غرفه</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="booth_count" type="text" value="{{$exibition->booth_count}}" class="form-control"></div>

                </div>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">استان</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3"><input name="province" type="text" value="{{$exibition->province}}" class="form-control"></div>
                    <label class="col-sm-1 control-label">شهر</label>
                    <div class="col-md-3"><input name="city" type="text"value="{{$exibition->city}}" class="form-control"></div>
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">آدرس نمایشگاه</label>
            <div class="col-sm-6">
                <input name="address" type="text" value="{{$exibition->address}}" class="form-control input-lg m-b">
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">نمایش داده شود </label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2">
                        بله <input @if($exibition->is_show == 1) checked @endif name="is_show" type="radio"  value="1" >

                        <input @if($exibition->is_show == 0) checked @endif name="is_show" type="radio"  value="0" >خیر
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">عکس</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3"><img height="300px" width="300px" src="{{$exibition->image}}" ></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><input name="image" type="file" class="form-control"></div>
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button href="/exibition/panel" class="btn btn-white" type="submit">لغو</button>
                <button class="btn btn-primary" type="submit">ذخیره</button>
            </div>
        </div>
    </form>

@endsection
@section('js')
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy-mm-dd'
        });
        function show() {
            console.log(document.getElementById('date').value());
        }
    </script>


@stop
