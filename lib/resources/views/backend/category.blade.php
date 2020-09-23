@extends('backend/master')
@section('title', 'Home')
@section('content')



    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Danh mục sản phẩm</h2>
        </div>
    </div><!--/.row-->
    <hr>

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Thêm danh mục</h3>
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input required type="text" name="cateName" class="form-control" placeholder="Tên danh mục...">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm danh mục">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Danh sách danh mục</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                              <thead>
                                <tr class="bg-primary">
                                  <th>Tên danh mục</th>
                                  <th style="width:30%">Tùy chọn</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($cateList as $cate)
                                    <tr>
                                        <td>{{ $cate->cate_name }}</td>
                                        <td>
                                            <a href="{{ asset('admin/category/edit/'.$cate->cate_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                            <a href="{{ asset('admin/category/delete/'.$cate->cate_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                        </td>
                                    </tr>
                                  @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

@endsection
