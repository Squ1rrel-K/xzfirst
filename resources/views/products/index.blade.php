@extends('static.default')
@section('content')
    <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
    <div class="container">
        <h5 style="padding-top: 50px;padding-bottom: 40px"><span class="h5-span">{{$results[0]->category}}</span></h5>
        <div class="row text-center">
            @foreach($results as $result)
                <div class="col-md-3" style="padding-bottom: 20px">
                        <a href="{{route('products.show',$result->id)}}">
                        <img src="{{$result->img_url}}" class="img-fluid" alt="" style="height: 150px">

                        <span class="nav-link" style="color: black">{{$result->name}}</span>
                        </a>
                    </div>
            @endforeach
                <div class="row" style="padding-top: 20px">
                <div class="offset-md-5 col-md-4">{!! $results->render() !!}</div>
        </div>
        </div>
    </div>
@endsection
