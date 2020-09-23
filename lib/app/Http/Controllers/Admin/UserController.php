<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
class UserController extends Controller
{
    public function getUser(){
        $data['userList'] = User::all();
        return view('backend.user', $data);
    }

    public function postUser(AddUserRequest $request){
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        return back();
    }

    public function getEditUser($id){
        $data['user'] = User::find($id);
        return view('backend.edituser', $data);
    }

    public function postEditUser(EditUserRequest $request, $id){
        $user = new User();
        $arr['email'] = $request->email;
        $arr['level'] = $request->level;
        $arr['password'] = bcrypt($request->repassword);
        $user::where('id',$id)->update($arr);
        return redirect('admin/user');
    }

    public function getDeleteUser($id){
        User::destroy($id);
        return back();
    }
}
