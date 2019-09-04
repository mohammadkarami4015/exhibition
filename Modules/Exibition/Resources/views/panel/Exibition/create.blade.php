@extends('adminlte::page')

@section('title', 'افزودن نمایشگاه')

@section('content')
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>

        @endforeach
    @endif

    <form method="post" action="/panel/exibition"  enctype="multipart/form-data" class="form-horizontal">
        {{csrf_field()}}
        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">عنوان نمایشگاه</label>
            <div class="col-sm-6">
                <input type="text" name="title" placeholder="عنوان نمایشگاه را وارد کنید" class="form-control input-lg m-b">
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">توضیحات</label>
            <div class="col-sm-6">
                <input type="text" name="detail" placeholder="توضیحات نمایشگاه را وارد کنید" class="form-control input-lg m-b">
            </div>
        </div>


        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">تاریخ شروع برگزاری</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="start_holding" type="text" placeholder="" class="date form-control"></div>
                    <label class="col-sm-2 control-label">تاریخ پایان برگزاری</label>
                    <div class="col-md-2"><input  name="end_holding" type="text" placeholder="" class="date form-control"></div>
                </div>
            </div>
        </div>


        <div class="form-group"><label class="col-sm-2 control-label">تاریخ شروع ثبت نام</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="start_reg" type="text" placeholder="" class="date form-control"></div>
                    <label class="col-sm-2 control-label">تاریخ پایان ثبت نام</label>
                    <div class="col-md-2"><input name="end_reg"   type="text" placeholder="  " class="date form-control"></div>
                </div>
            </div>
        </div>

        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">تعداد غرفه</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="booth_count" type="text" placeholder="" class="form-control"></div>

                </div>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">استان</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3"><input name="province" type="text" placeholder="استان نمایشگاه را وارد کنید" class="form-control"></div>
                    <label class="col-sm-1 control-label">شهر</label>
                    <div class="col-md-3"><input name="city" type="text" placeholder="شهر برگزاری نمایشگاه را وارد کنید" class="form-control"></div>
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">آدرس نمایشگاه</label>
            <div class="col-sm-6">
                <input name="address" type="text" placeholder="آدرس نمایشگاه را وارد کنید" class="form-control input-lg m-b">
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">نمایش داده شود</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2">
                        بله <input name="is_show" type="radio"  value="1" >

                        <input  name="is_show" type="radio"  value="0" >خیر
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">عکس</label>
            <div class="col-sm-10">
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
