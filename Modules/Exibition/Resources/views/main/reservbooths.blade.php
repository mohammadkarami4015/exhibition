<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<style>
    .ex{
        height: 500px;
        width: 300px;
        background:#3b8ab8;
        border: darkcyan dashed ;
        float: left;
        text-align: center;
        margin: 5px;
    }
    .ex:hover{
        background: #1d68a7;
    }

</style>
@foreach($booths as $value)
    <div class="ex">
        <img height="250px" width="250px" src=" {{$value->image}}">
        <br>
        <h2>{{$value->title}}</h2>
        <h4>{{$value->detail}}</h4>
        <h4>مساحت غرفه{{$value->area}}</h4>
        <br>
        @if($value->reserved == 0)
            @if(auth()->check())
                <a href="/main/reservebooth/{{$value->id}}"><button style="background: green; height: 40px;" >رزرو غرفه</button><a/>
            @else
                 <form action="/main/reservebooth/{{$value->id}}">
                     <input type="text" name="order_info">
                     <button type="submit" style="background: green; height: 40px;">رزرو غرفه</button>
                 </form>
            @endif

            @else
                <h3>این غرفه رزرو شده</h3>

        @endif
    </div>
    @endforeach

</body>
</html>

