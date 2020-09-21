@include('frontend/master/head')
<style>
    .scrollToTop{
        width: 40px; height:40px; background-color: grey; color:#fff; top:85%; right: 25px; position:fixed; align-items: center;; font-size: 15px; font-weight: bolder;
        padding: 10px 5px
    }
</style>
<body>
    @include('frontend/master/header')

    @yield('content')

    <div class="scrollToTop">TOP</div>

    @include('frontend/master/footer')


	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
    <script src="assets/dest/js/wow.min.js"></script>
    <script src="assets/dest/js/sweetalert.min.js"></script>

	<!--customjs-->
    <script src="assets/dest/js/custom2.js"></script>

	<script>
	$(document).ready(function($) {
        // $('.add-to-cart').click(function(){
        //    //swal("Here's the title!", "...and here's the text!");
        //    var id = $(this).data('id_product');
        //    var cart_product_id = $('.cart_product_id_' + id).val();
        //    var cart_product_name = $('.cart_product_name_' + id).val();
        //    var cart_product_price = $('.cart_product_price_' + id).val();
        //    var cart_product_img = $('.cart_product_img_' + id).val();
        //    var cart_product_qty = $('.cart_product_qty_' + id).val();
        //    var _token = $('input[name="_token"]').val();
        //    //alert(cart_product_qty);
        //    $.ajax({
        //         url: "{{ url('/add-cart-ajax') }}",
        //         method: 'POST',
        //         data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_price:cart_product_price,cart_product_img:cart_product_img,cart_product_qty:cart_product_qty, _token:_token},
        //         success:function(data){
        //             alert(data);
        //         }
        //     });

        // })


		$(window).scroll(function(){

			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
        )


        //back-top
        //b1:an back top btn
        $(".scrollToTop").hide();
        //b2: hien back top khi keo xuong 100px
        $(window).scroll(function () {
            if($(this).scrollTop()>400){
                $(".scrollToTop").fadeIn();
            }
            else{
                $(".scrollToTop").fadeOut();
            }

        });
        //b3:nhay len top khi click
        $(".scrollToTop").click(function (e) {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;

        });


	})
    </script>
</body>
</html>
