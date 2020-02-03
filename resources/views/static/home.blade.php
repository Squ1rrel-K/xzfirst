@extends('static.default')
@section('content')
    <div>
        {{--jum s--}}
        <div class="jumbotron jumbotron-image" style="background-image: url('{{URL::asset('images/bg.jpg')}}')">
            <div class="container text-center">
                <h1 class="display-3" style="font-weight: bold">徐州菲斯特</h1>
                <p class="lead">我们专注于新能源、电力仪器仪表以及物联网系列产品等研发生产</p>
                <p class="lead">
                    <a class="btn btn-primary" href="#">了解更多</a>
                </p>
            </div>
        </div>
        {{--jum e--}}

        {{--Carousel s--}}
        <div class="container" >
            <h5><span class="h5-span">最新产品</span></h5>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top: 15px">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('images/item.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('images/item.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('images/item.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('images/item.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{--Carousel e--}}

        {{--News s--}}
        <div class="container" style="padding-top: 50px">
            <h5><span class="h5-span">最新资讯</span></h5>
            <div class="row" style="padding: 15px 0 0 15px">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <a class="nav-link news-a" href="#"><p class="news-p">重大喜讯，恭喜xxx成为我的客户 重大喜讯，恭喜xxx成为我的客户</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">重大喜讯，恭喜xxx成为我的客户 重大喜讯，恭喜xxx成为我的客户</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">重大喜讯，恭喜xxx成为我的客户 重大喜讯，恭喜xxx成为我的客户</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">重大喜讯，恭喜xxx成为我的客户 重大喜讯，恭喜xxx成为我的客户</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">重大喜讯，恭喜xxx成为我的客户 重大喜讯，恭喜xxx成为我的客户</p></a>

                </div>

            </div>
        </div>
        {{--News e--}}

        {{--Download s--}}
        <div class="container" style="padding-top: 50px">
            <h5><span class="h5-span">下载中心</span></h5>
            <div class="row" style="padding: 15px 0 0 15px">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/fake.jpg')}}" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <a class="nav-link news-a" href="#"><p class="news-p">XXXX产品说明</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">XXXX产品说明</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">XXXX产品说明</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">XXXX产品说明</p></a>
                    <a class="nav-link news-a" href="#"><p class="news-p">XXXX产品说明</p></a>
                </div>

            </div>
        </div>
        {{--Download s--}}
    </div>



@endsection
