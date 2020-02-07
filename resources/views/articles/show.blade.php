@extends('static.default')
@section('content')
    <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
    <div class="container" style="padding-top: 50px">
        {{$result->title}}


    </div>
    @endsection
