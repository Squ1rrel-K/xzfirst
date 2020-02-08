@extends('static.default')
@section('content')
    <div>
        <img src="{{URL::asset('images/subbg.jpg')}}" class="img-fluid">
        <div class="container" style="padding-top: 50px">
            <h5 style="padding-bottom: 40px"><span class="h5-span">最新资讯</span></h5>
            @foreach($articles as $article)
                <div class="col-md-12">
                <a class="nav-link articles-link home-link-border"
                   href="{{route('articles.show',$article->id)}}">
                    <p class="articles-paragraph">
                        {{$article->title}}
                        <span style="font-size: 12px;float: right">
                                    {{// Cut time str, only remain to days
                                     '['.substr($article->created_at,0,10).']'
                                     }}
                                </span>
                    </p>


                </a>

                </div>
            @endforeach
            <div class="row" style="padding-top: 20px">
                <div class="offset-md-5 col-md-4">{!! $articles->render() !!}</div>
            </div>
        </div>


    </div>
@endsection
