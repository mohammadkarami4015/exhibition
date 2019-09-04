@extends('adminlte::page')

@section('title', 'افزودن غرفه')

@section('content')
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>

        @endforeach
    @endif

    <form method="post" action="{{route('booth.store')}}"   enctype="multipart/form-data" class="form-horizontal">
        {{csrf_field()}}

        <input  name="exibition_id" value="{{$exibition->id}}"  readonly>
        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">عنوان غرفه</label>
            <div class="col-sm-6">
                <input type="text" name="title" placeholder="عنوان غرفه را وارد کنید" class="form-control input-lg m-b">
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">توضیحات</label>
            <div class="col-sm-6">
                <input type="text" name="detail" placeholder="توضیحات غرفه را وارد کنید" class="form-control input-lg m-b">
            </div>
        </div>
        {{--<div class="form-group"><label class="col-sm-2 control-label">مربوط به نمایشگاه</label>--}}
            {{--<div class="col-sm-6">--}}
                {{--<select name="exibition_id" id="">--}}
                    {{--@foreach($exibitions as $value)--}}
                        {{--<option value="{{$value->id}}">{{$value->title}}</option>--}}
                        {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="form-group"><label class="col-sm-2 control-label">وضعیت غرفه</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2">
                        رزرو <input  name="reserved" type="radio"  value="1" >

                        <input name="reserved" type="radio"  value="0" >آزاد
                    </div>
                </div>
            </div>
        </div>


        <div class="hr-line-dashed"></div>

        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">مساحت غرفه</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-2"><input name="area" type="text" placeholder="" class="form-control"></div>

                </div>
            </div>
        </div>

        <div class="hr-line-dashed"></div>

        <div class="form-group"><label class="col-sm-2 control-label">عکس</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3"><input name="image" type="file" class="form-control"></div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button href="{{route('booth.index')}}" class="btn btn-white" type="submit">لغو</button>
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
