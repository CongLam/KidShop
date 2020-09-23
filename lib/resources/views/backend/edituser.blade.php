@extends('backend/master')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Sửa người dùng
                    </div>
                    <div class="panel-body">
                        @include('errors.note')
                        <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
                        <form action="" method="post" id="editUserForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Email..." value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>New Password:</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Nhập password mới nếu muốn thay đổi..." >
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Nhập lại password để xác nhận..." >
                            </div>
                            <div class="form-group">
                                <label>Level:</label>
                                <input type="number" name="level" class="form-control" placeholder="Nhập level" value="{{ $user->level }}">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="editbtn" class="form-control btn btn-primary" value="Sửa">
                            </div>
                            <div class="form-group">
                                <a href="{{ asset('admin/user') }}" class="form-control btn btn-danger" onClick="validatePassword();">Hủy sửa</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div><!--/.row-->

    {{--  <script>
        function checkPasswordMatch() {
            var password = $("#password").val();
            var confirmPassword = $("#repassword").val();
            if (password != confirmPassword)
                $("#CheckPasswordMatch").html("Passwords does not match!");
            else
                $("#CheckPasswordMatch").html("Passwords match.");
        }
        $(document).ready(function () {
           $("#repassword").keyup(checkPasswordMatch);
        });
    </script>  --}}

@endsection
