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
                    <h3>Thêm người dùng</h3>

                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email:</label>
                            <input required type="email" name="email" class="form-control" placeholder="Email...">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input required type="password" name="password" class="form-control" placeholder="Password...">
                        </div>
                        <div class="form-group">
                            <label>Level:</label>
                            <input required type="number" name="level" class="form-control" placeholder="Level...">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm người dùng">
                    </form>
                </div>
            </div>
        </div>



        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Danh sách người dùng</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                              <thead>
                                <tr class="bg-primary">
                                  <th>Email</th>
                                  <th>Level</th>
                                  <th style="width:30%">Tùy chọn</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($userList as $user)
                                    <tr>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->level }}</td>
                                        <td>
                                            <a href="{{ asset('admin/user/edit/'.$user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                            <a href="{{ asset('admin/user/delete/'.$user->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
