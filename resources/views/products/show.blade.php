@extends('static.default')
@section('content')
    <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
    <div class="container" style="margin-top: 50px;border: 1px solid #efefef;padding-top: 25px;padding-bottom: 50px">
        <h1 class="text-center">{{$result->name}}</h1>
        <div class="container" style="padding-top: 50px">
            {!!$result->content!!}
        </div>
    </div>
@endsection
