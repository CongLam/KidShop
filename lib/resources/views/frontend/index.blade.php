@extends('frontend/master/master')

@section('title', 'Trang chủ')

@section('content')

	<div class="rev-slider">
	    <div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>

								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
												</div>
											</div>

						        </li>

								<li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg" data-src="assets/dest/images/thumbs/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
												</div>
											</div>

						        </li>
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="row">
								@foreach ($newProducts as $item)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <form>
                                                {{-- {{ csrf_field() }} --}}
                                                <input type="hidden" value="{{ $item->product_id }}" class="cart_product_id_{{ $item->product_id }}">
                                                <input type="hidden" value="{{ $item->product_name }}" class="cart_product_name_{{ $item->product_id }}">
                                                <input type="hidden" value="{{ $item->product_price }}" class="cart_product_price_{{ $item->product_id }}">
                                                <input type="hidden" value="{{ $item->product_img }}" class="cart_product_img_{{ $item->product_id }}">
                                                <input type="hidden" value="1" class="cart_product_qty_{{ $item->product_id }}">


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
                                                    {{-- <button class="btn btn-primary add-to-cart" name="add-to-cart" data-id_product="{{ $item->product_id }}" >
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button> --}}

                                                    <a class="beta-btn primary" href="{{ asset('detail/'.$item->product_cate.'/'.$item->product_id.'/'.$item->product_slug.'.html') }}">Details <i class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm nổi bật</h4>
							<div class="row" >
								@foreach ($featureProducts as $feaProd)
                                    <div class="col-sm-3" style="margin-bottom: 25px;">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{ asset('detail/'.$feaProd->product_cate.'/'.$feaProd->product_id.'/'.$feaProd->product_slug.'.html') }}"><img src="{{ asset('lib/storage/app/avatar/'.$feaProd->product_img) }}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $feaProd->product_name }}</p>
                                                <p class="single-item-price">
                                                    <span>{{ number_format($feaProd->product_price, 0, '.', ',') }}VNĐ</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{ asset('cart/add/'.$feaProd->product_id) }}"><i class="fa fa-shopping-cart"></i></a>

                                                <a class="beta-btn primary" href="{{ asset('detail/'.$feaProd->product_cate.'/'.$feaProd->product_id.'/'.$feaProd->product_slug.'.html') }}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
							<div class="space40">&nbsp;</div>

						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection


