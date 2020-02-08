@extends('static.default')
@section('content')
    <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
    <div class="container" style="padding-top: 50px">
            <h5><span class="h5-span">公司相册</span></h5>

        {{--album row s--}}
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                    <p>名称</p>
                </div>
            </div>
        {{--album row s--}}

    </div>
@endsection
