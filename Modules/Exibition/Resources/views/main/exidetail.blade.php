<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<style>
    .ex{
        height: 800px;
        width: 500px;
        background:silver;
        border: darkcyan dashed ;
        float: left;
        margin-left: 25%;
        text-align: center;
    }

</style>

    <div class="ex">
        <img height="250px" width="250px" src=" {{$exibition->image}}">
        <br>
        <h2>{{$exibition->title}}</h2>
        <h4>{{$exibition->detail}}</h4>
        <h5>شروع برگزاری    {{($exibition->start_holding)}}</h5>
        <h5>پایان برگزاری    {{$exibition->end_holding}}</h5>
        <h5>شروع ثبت نام    {{$exibition->start_reg}}</h5>
        <h5>پایان ثبت نام    {{$exibition->end_reg}}</h5>
        <h4>تعداد غرفه ها    {{$exibition->booth_count}}</h4>
        <h4>تعداد غرفه رزرو شده    {{$reservedCount}}</h4>
        <h5>استان    {{$exibition->province}} <p>شهر    {{$exibition->city}}</p></h5>
        <h5><h3>آدرس : </h3>{{$exibition->address}}</h5>
        <br>
        <a href="/main/showboots/{{$exibition->id}}">
            <button style="background: green; height: 40px;" >رزرو غرفه در این نمایشگاه</button>
        </a>
    </div>

</body>
</html>

