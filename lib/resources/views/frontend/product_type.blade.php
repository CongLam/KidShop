@extends('frontend/master/master')

@section('title', 'Danh mục')

@section('content')
<style>
    .single-item-title {
font-size:23px;
margin-bottom:10px;
font-weight: bolder;

}

.single-item-price {
font-size:20px;
color:rgb(184, 23, 23);
font-weight: bolder;
margin-bottom:10px;
}
</style>

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Danh mục sản phẩm </h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ asset('/') }}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<li><a href="#">
                                <img src="assets/dest/images/vertical_bn1.jpg" alt="">
                            </a></li>
                            <li><a href="#">
                                <img src="assets/dest/images/vertical_bn2.jpg" alt="">
                            </a></li>
                            <li><a href="#">
                                <img src="assets/dest/images/vertical_bn3.jpg" alt="">
                            </a></li>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
                            <h4>{{ $cateName->cate_name }}</h4>
                            <hr>
							<div class="row">
                                @foreach ($categoryProd as $item)
                                    <div class="col-sm-4" style="margin-bottom: 30px;">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{ asset('detail/'.$item->product_cate.'/'.$item->product_id.'/'.$item->product_slug.'.html') }}"><img src="{{ asset('lib/storage/app/avatar/'.$item->product_img) }}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $item->product_name }}</p>
                                                <p class="single-item-price">
                                                    <span>{{ number_format($item->product_price, 0, '.', ',') }}VNĐ</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{ asset('cart/add/'.$item->product_id) }}"><i class="fa fa-shopping-cart"></i></a>

                                                <a class="beta-btn primary" href="{{  asset('detail/'.$item->product_cate.'/'.$item->product_id.'/'.$item->product_slug.'.html') }}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div> <!-- .beta-products-list -->
                        <div class="pagination" style="margin-auto">
                            {{ $categoryProd->links() }}
                        </div>
						<div class="space50">&nbsp;</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
