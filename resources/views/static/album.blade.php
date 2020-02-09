@extends('static.default')
@section('content')
    <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
    <div class="container" style="padding-top: 50px">
            <h5><span class="h5-span">公司相册</span></h5>

        {{--album row s--}}
            <div class="row text-center" style="padding-top: 40px">
                @foreach($results as $result)
                    <div class="col-md-3">
                        <img src="{{$result->img_url}}" class="img-fluid" style="height:150px " alt="">
                        <p>名称</p>
                    </div>
                    @endforeach

            </div>
        {{--album row s--}}

    </div>
@endsection
