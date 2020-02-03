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
                <li class="nav-item nav-linker">
                    <a class="nav-link" href="{{route('company')}}"><span id="nav-linker">公司简介</span></a>
                </li>

                <li class="nav-item nav-linker">
                    <a class="nav-link " href="{{route('news')}}"><span id="nav-linker">最新资讯</span></a>
                </li>

                <li class="nav-item nav-linker">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" id="dropdownMenu2" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <span id="nav-linker">产品信息</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="{{route('products')}}?page=p1">电力仪器</a>
                            <a class="dropdown-item" href="{{route('products')}}?page=p2">电动汽车转换器</a>
                            <a class="dropdown-item" href="{{route('products')}}?page=p3">足浴桶控制器</a>
                            <a class="dropdown-item" href="{{route('products')}}?page=p4">铁路产品</a>
                            <a class="dropdown-item" href="{{route('products')}}?page=p5">单片机设计开发</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-linker">
                    <a class="nav-link " href="{{route('album')}}"><span id="nav-linker">公司相册</span></a>
                </li>
                <li class="nav-item nav-linker">
                    <a class="nav-link " href="#"><span id="nav-linker">下载中心</span></a>
                </li>
                <li class="nav-item nav-linker">
                    <a class="nav-link " href="#"><span id="nav-linker">在线留言</span></a>
                </li>
                <li class="nav-item nav-linker">
                    <a class="nav-link " href="{{route('contact')}}"><span id="nav-linker">联系我们</span></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('admin.home')}}">
                        <img src="images/nickname.png" class="image img-responsive" alt="" height="25px">
                    </a>
                </li>
            </ul>
        </div>
        {{--        Navbar e--}}
    </div>

</nav>

