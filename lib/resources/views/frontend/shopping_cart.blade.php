@extends('frontend/master/master')

@section('title', 'Giỏ hàng')

@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Shopping Cart</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Shopping Cart</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">

			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-price">Price</th>
							<th class="product-quantity">Qty</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
                        @foreach ($items as $item)
                            <tr class="cart_item">
                                <td class="product-name">
                                    <div class="media">
                                        <img width="100px" class="pull-left" src="{{ asset('lib/storage/app/avatar/'.$item->options->img) }}" alt="">
                                        <div class="media-body">
                                            <p class="font-large table-title">{{ $item->name }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <span class="amount">{{ number_format($item->price,0,',','.') }} VNĐ</span>
                                </td>

                                <td class="product-quantity">
                                    <input name="product-qty" id="product-qty" type="number" value="{{ $item->qty }}" onchange="updateCart(this.value,'{{ $item->rowId }}')">
                                </td>

                                <td class="product-subtotal">
                                    <span class="amount">{{ number_format($item->price*$item->qty,0,',','.') }} VNĐ</span>
                                </td>

                                <td class="product-remove">
                                    <a href="{{ asset('cart/delete/'.$item->rowId) }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach


					</tbody>

					<tfoot>
						<tr>
							<td colspan="5" class="actions">
                                <div class="col-sm-8">
                                    <h3>Tổng tiền: {{ $totalPrice }}</h3>
                                </div>
                                <div class="col-sm-4">
									<a href="{{ asset('cart/checkout') }}" type="submit" class="beta-btn primary" name="apply_coupon">Thanh toán<i class="fa fa-chevron-right"></i></a>
                                </div>
							</td>
						</tr>
					</tfoot>
				</table>
				<!-- End of Shop Table Products -->
			</div>

		</div> <!-- #content -->
	</div> <!-- .container -->

	<!--customjs-->
	<script type="text/javascript">
        (function() {
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

    <script type="text/javascript">
        function updateCart(qty, rowId){
            console.log(qty);
            console.log(rowId);
            jQuery.get(
                "{{ asset('cart/update') }}", //url
                {qty:qty, rowId:rowId},  //doi tuong: du lieu duoc gui len url
                function(){
                    location.reload();
                }
            );
        }
    </script>

    {{-- <script>
        jQuery(document).ready(function() {
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
    </script> --}}



@endsection
