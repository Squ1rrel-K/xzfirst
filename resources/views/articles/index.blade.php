@extends('static.default')
@section('content')
    <div>
        <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
        <div class="container" style="padding-top: 50px">
            <h5><span class="h5-span">最新资讯</span></h5>
            @foreach($articles as $article)

                <div class="row"
                     style="margin: 40px 0 0 0;padding: 20px;max-height: 200px;border-top: 1px solid #656464">
                    <div class="col-md-3">
                        <a href="{{route('articles.show',$article->id)}}">
                            <img src="{{$article->img_url}}" class="img-fluid" alt=""> </a>
                    </div>
                    <div class="col-md-9" href="{{route('articles.show',$article->id)}}">
                        <a class="nav-link" href="{{route('articles.show',$article->id)}}">
                            <h3>{{$article->title}}</h3>
                            <p>{{substr($article->content,0,10)}}</p>
                        </a>




                    </div>

                </div>
            @endforeach

            <div class="row" style="padding-top: 20px">
                <div class="offset-md-5 col-md-4">{!! $articles->render() !!}</div>
            </div>
        </div>


    </div>
@endsection
