@extends('frontend/master/master')

@section('title', 'Chi tiết sản phẩm')

@section('content')


<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('lib/storage/app/avatar/'.$product->product_img) }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">{{ $product->product_name }}</p>
                            <p class="single-item-price">
                                <span>{{ number_format($product->product_price, 0, '.', ',') }}VNĐ</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>Bảo hành: {{ $product->product_warranty }}</p>
                            <div class="space20">&nbsp;</div>
                            <p>Phụ kiện: {{ $product->product_accessories }}</p>
                            <div class="space20">&nbsp;</div>
                            <p>Tình trạng: {{ $product->product_condition }}</p>
                            <div class="space20">&nbsp;</div>
                            <p>Khuyến mại: {{ $product->product_promotion }}<</p>
                            <div class="space20">&nbsp;</div>
                            <p>Kho:
                                @if($product->product_status == 1)
                                    Còn hàng
                                @else
                                    Hết hàng
                                @endif
                            </p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Chọn số lượng:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="color">
                                <option>Số lượng</option>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart pull-left" href="{{ asset('cart/add/'.$product->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả chi tiết</a></li>
                        <li><a href="#tab-reviews">Reviews (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        {!! $product->product_description !!}
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        @foreach ($relatedProducts as $item)
                            <div class="col-sm-4">
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
                                        <a class="beta-btn primary" href="{{ asset('detail/'.$item->product_cate.'/'.$item->product_id.'/'.$item->product_slug.'.html') }}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Best Sellers</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($featureProducts as $item)
                                <div class="media beta-sales-item">
                                    <a class="pull-left" href="{{ asset('detail/'.$item->product_cate.'/'.$item->product_id.'/'.$item->product_slug.'.html') }}"><img src="{{ asset('lib/storage/app/avatar/'.$item->product_img) }}" alt=""></a>
                                    <div class="media-body">
                                        {{ $item->product_name }}
                                        <span class="beta-sales-price">{{ number_format($item->product_price, 0, '.', ',') }}VNĐ</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm mới</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($newProducts as $item)
                                <div class="media beta-sales-item">
                                    <a class="pull-left" href="{{ asset('detail/'.$item->product_cate.'/'.$item->product_id.'/'.$item->product_slug.'.html') }}"><img src="{{ asset('lib/storage/app/avatar/'.$item->product_img) }}" alt=""></a>
                                    <div class="media-body">
                                        {{ $item->product_name }}
                                        <span class="beta-sales-price">{{ number_format($item->product_price, 0, '.', ',') }}VNĐ</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->



	<!--customjs-->
	<script type="text/javascript">
        $(function() {
            // this will get the full URL at the address bar
            var url = window.location.href;

            // passes on every "a" tag
            $(".main-menu a").each(function() {
                // checks if its the same on the address bar
                if (url == (this.href)) {
                    $(this).closest("li").addClass("active");
                    $(this).parents('li').addClass('parent-active');
                }
            });
        });
    </script>

    <script>
	 jQuery(document).ready(function($) {
                'use strict';

        // color box

        //color
        jQuery('#style-selector').animate({
        left: '-213px'
        });

        jQuery('#style-selector a.close').click(function(e){
        e.preventDefault();
        var div = jQuery('#style-selector');
        if (div.css('left') === '-213px') {
            jQuery('#style-selector').animate({
            left: '0'
            });
            jQuery(this).removeClass('icon-angle-left');
            jQuery(this).addClass('icon-angle-right');
        } else {
            jQuery('#style-selector').animate({
            left: '-213px'
            });
            jQuery(this).removeClass('icon-angle-right');
            jQuery(this).addClass('icon-angle-left');
        }
        });

    });
	</script>


@endsection
