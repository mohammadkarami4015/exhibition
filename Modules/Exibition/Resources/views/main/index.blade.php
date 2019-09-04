<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<style>
    .ex{
        height: 400px;
        width: 300px;
        background: red;
        border: darkcyan dashed ;
        float: left;
        text-align: center;
        margin: 5px;

    }
    .ex:hover{
        background: #1d68a7;
    }
</style>
<form action="/main/search">
    <input name="search" type="text">
    <button type="submit">search</button>
</form>
@foreach($exibition as $value)
    <div class="ex">
        <a href="{{route('show.ex',['id'=>$value->id])}}"><h4>{{$value->title}}</h4></a>
        <img height="250px" width="250px" src=" {{$value->image}}">
        <br>
        <h5>شروع برگزاری    {{$value->start_holding}}</h5>
        <h5>شروع ثبت نام    {{$value->start_reg}}</h5>
    </div>
@endforeach
</body>
</html>

