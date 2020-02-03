<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>徐州菲斯特</title>
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
</head>
<body>

<div style="width: 100%;height: 100%">
    @include('static._header')
        @yield('content')
    @include('static._footer')
</div>

</body>
</html>
