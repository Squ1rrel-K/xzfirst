<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/" style="font-weight: bold">菲斯特</a>

        {{--Toggler s--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{--Toggler e--}}

        {{--Navbar s--}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item nav-link-span">
                    <a class="nav-link" href="{{route('company')}}"><span id="nav-link-font">公司简介</span></a>
                </li>

                <li class="nav-item nav-link-span">
                    <a class="nav-link " href="{{route('articles.index')}}"><span id="nav-link-font">最新资讯</span></a>
                </li>

                <li class="nav-item nav-link-span">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" id="dropdownMenu2" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <span id="nav-link-font">产品信息</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="{{route('products.index')}}?page=电力仪器">电力仪器</a>
                            <a class="dropdown-item" href="{{route('products.index')}}?page=电动汽车转换器">电动汽车转换器</a>
                            <a class="dropdown-item" href="{{route('products.index')}}?page=足浴桶控制器">足浴桶控制器</a>
                            <a class="dropdown-item" href="{{route('products.index')}}?page=铁路产品">铁路产品</a>
                            <a class="dropdown-item" href="{{route('products.index')}}?page=单片机设计开发">单片机设计开发</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-link-span">
                    <a class="nav-link " href="{{route('album')}}"><span id="nav-link-font">公司相册</span></a>
                </li>
                <li class="nav-item nav-link-span">
                    <a class="nav-link " href="{{{route('download')}}}"><span id="nav-link-font">下载中心</span></a>
                </li>
                <li class="nav-item nav-link-span">
                    <a class="nav-link " href="{{route('message')}}"><span id="nav-link-font">在线留言</span></a>
                </li>
                <li class="nav-item nav-link-span">
                    <a class="nav-link " href="{{route('contact')}}"><span id="nav-link-font">联系我们</span></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('admin.home')}}">
                        <img src="{{URL::asset('images/nickname.png')}}" class="image img-responsive" alt="" height="25px">
                    </a>
                </li>
            </ul>
        </div>
        {{--navbar e--}}
    </div>

</nav>

