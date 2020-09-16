@extends('frontend/master/master')

@section('title', 'Thông báo thanh toán')

@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
    </div>

    <div class="container">
		<div id="content">
            <div id="xac-nhan">
                <br>
                <p align="justify">
                    <b>Quý khách đã đặt hàng thành công!</b><br />
                    • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
                    • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
                    <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
                </p>
            </div>

            <div class="btn btn-primary">Tiếp tục mua hàng</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
