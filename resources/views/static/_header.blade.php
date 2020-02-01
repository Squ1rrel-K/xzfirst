<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin-bottom: 10px">
    <div class="container">
        <a class="navbar-brand" href="/" style="font-weight: 600">菲斯特</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="{{route('products')}}"><span id="nav-linker">产品</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('contact')}}"><span id="nav-linker">联系</span></a>
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
    </div>
</nav>

