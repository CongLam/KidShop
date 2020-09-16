@extends('frontend/master/master')

@section('title', 'Danh mục')

@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Tìm kiếm sản phẩm với từ khóa "{{ $keyword }}"</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ asset('/') }}">Home</a> / <span>Tìm kiếm</span>
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
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Kết quả tìm kiếm</h4>
							<div class="row" >
								@foreach ($itemsSeach as $item)
                                    <div class="col-sm-3" style="margin-bottom: 25px;">
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
                            {{-- <div class="pagination" >
                                {{ $itemsSeach->links() }}
                            </div> --}}
						</div> <!-- .beta-products-list -->
						<div class="space50">&nbsp;</div>
					</div>
				</div> <!-- end section with sidebar and main content -->

			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
