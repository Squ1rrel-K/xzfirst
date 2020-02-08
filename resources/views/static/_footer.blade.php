<div class="bg-light" style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <span style="padding-top: 16px"> © 2004-2020 徐州菲斯特公司版权所有
            </span>
            <nav class="navbar navbar-expand-md navbar-light bg-light">

                {{--Navbar s--}}
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item nav-link-span">
                            <a class="nav-link" href="{{route('company')}}"><span class="footer-nav-link-span">公司简介</span></a>
                        </li>

                        <li class="nav-item nav-link-span">
                            <a class="nav-link" href="#"><span class="footer-nav-link-span">最新资讯</span></a>
                        </li>

                        <li class="nav-item nav-link-span">
                            <div class="dropup">
                                <a class="dropdown-toggle nav-link" id="dropdownMenu2" href="#" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <span class="footer-nav-link-span">产品信息</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a class="dropdown-item" href="{{route('products.index')}}?page=p1">电力仪器</a>
                                    <a class="dropdown-item" href="{{route('products.index')}}?page=p2">电动汽车转换器</a>
                                    <a class="dropdown-item" href="{{route('products.index')}}?page=p3">足浴桶控制器</a>
                                    <a class="dropdown-item" href="{{route('products.index')}}?page=p4">铁路产品</a>
                                    <a class="dropdown-item" href="{{route('products.index')}}?page=p5">单片机设计开发</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-link-span">
                            <a class="nav-link " href="#"><span class="footer-nav-link-span">公司相册</span></a>
                        </li>
                        <li class="nav-item nav-link-span">
                            <a class="nav-link " href="#"><span class="footer-nav-link-span">下载中心</span></a>
                        </li>
                        <li class="nav-item nav-link-span">
                            <a class="nav-link " href="#"><span class="footer-nav-link-span">在线留言</span></a>
                        </li>
                        <li class="nav-item nav-link-span">
                            <a class="nav-link " href="{{route('contact')}}"><span class="footer-nav-link-span">联系我们</span></a>
                        </li>
                    </ul>
                </div>
                {{--Navbar e--}}

            </nav>
        </div>
    </div>
</div>
