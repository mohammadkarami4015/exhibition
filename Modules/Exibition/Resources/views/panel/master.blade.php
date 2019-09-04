<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>وبسایت آموزشی لاراول</title>
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link href="/css/select2.min.css" rel="stylesheet" />

</head>

<body>
<script src="/js/sweetalert.min.js"></script>
@include('sweet::alert')

@include('resources.views.section.header')
@yield('content')
@include('resources.views.section.footer')
</body>
</html>