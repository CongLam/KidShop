<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> Thanh Bình, Hà Đông, Hà Nội</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 037 353 9357</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li><a href="#">Đăng kí</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{ asset('/') }}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{ asset('search') }}">
                        <input type="text" value="" name="enterKeyword" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <a href="{{ asset('cart/show') }}">
                            <i class="fa fa-shopping-cart"></i> Giỏ hàng({{ Cart::count() }})
                        </a>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->

    {{--<div class="header-bottom" style="background-color: #0277b8;">
         <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ asset('/') }}">Trang chủ</a></li>
                    <li><a>Danh mục sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($categories as $item)
                                <li><a href="{{asset('category/'.$item->cate_id.'/'.$item->cate_slug.'.html')}}" >{{$item->cate_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ asset('about') }}">Giới thiệu</a></li>
                    <li><a href="{{ asset('contact') }}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom --> --}}

    <div  >
        <nav class="navbar navbar-inverse header-bottom" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ asset('/') }}">Trang chủ</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Danh  mục sản phẩm <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $item)
                                <li><a href="{{asset('category/'.$item->cate_id.'/'.$item->cate_slug.'.html')}}" >{{$item->cate_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ asset('about') }}">Giới thiệu</a></li>
                    <li><a href="{{ asset('contact') }}">Liên hệ</a></li>
                </ul>

            </div>
        </nav>
    </div> <!-- .header-bottom -->

</div> <!-- #header -->
