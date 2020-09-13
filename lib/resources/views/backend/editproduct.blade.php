@extends('backend/master')
@section('title', 'Home')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group" >
                                    <label>Tên sản phẩm</label>
                                    <input required type="text" name="name" class="form-control" value="{{ $productInf->product_name }}">
                                </div>
                                <div class="form-group" >
                                    <label>Giá sản phẩm</label>
                                    <input required type="number" name="price" class="form-control" value={{ $productInf->product_price }}>
                                </div>
                                <div class="form-group" >
                                    <label>Ảnh sản phẩm</label>
                                    <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="300px" src="{{ asset('lib/storage/app/avatar/'.$productInf->product_img) }}">
                                </div>
                                <div class="form-group" >
                                    <label>Phụ kiện</label>
                                    <input required type="text" name="accessories" class="form-control" value="{{ $productInf->product_accessories }}">
                                </div>
                                <div class="form-group" >
                                    <label>Bảo hành</label>
                                    <input required type="text" name="warranty" class="form-control" value="{{ $productInf->product_warranty }}">
                                </div>
                                <div class="form-group" >
                                    <label>Khuyến mãi</label>
                                    <input required type="text" name="promotion" class="form-control" value="{{ $productInf->product_promotion }}">
                                </div>
                                <div class="form-group" >
                                    <label>Tình trạng</label>
                                    <input required type="text" name="condition" class="form-control" value="{{ $productInf->product_condition }}">
                                </div>
                                <div class="form-group" >
                                    <label>Trạng thái</label>
                                    <select required name="status" class="form-control">
                                        <option value="1" @if($productInf->product_status==1) checked @endif>Còn hàng</option>
                                        <option value="0" @if($productInf->product_status==0) checked @endif>Hết hàng</option>
                                    </select>
                                </div>
                                <div class="form-group" >
                                    <label>Miêu tả</label>
                                    <textarea class="ckeditor" name="description" >{{$productInf->product_description }}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('description',{
                                            language:'vi',
                                            filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
                                    </script>
                                </div>
                                <div class="form-group" >
                                    <label>Danh mục</label>
                                    <select required name="cate" class="form-control">
                                        @foreach ($cateList as $cate)
                                            <option value="{{ $cate->cate_id }}"
                                                @if ($productInf->product_cate==$cate->cate_id) {{--  hien thi dung danh muc cua san pham  --}}
                                                    selected
                                                @endif >
                                                {{  $cate->cate_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" >
                                    <label>Sản phẩm nổi bật</label><br>
                                    Có: <input type="radio" name="featured" value="1">
                                    Không: <input type="radio" checked name="featured" value="0">
                                </div>
                                <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                <a href="{{ asset('admin/product') }}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->


@endsection