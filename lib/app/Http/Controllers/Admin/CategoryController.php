<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function getCategory(){
        $data['cateList'] = Category::all();
        return view('backend/category', $data);
    }

    public function postCategory(AddCateRequest $request){
        $cate = new Category();
        $cate->cate_name = $request->cateName;
        $cate->cate_slug = Str::slug($request->cateName);
        $cate->save();
        return back();
    }

    public function getEditCategory($id){
        $data['cate'] = Category::find($id);
        return view('backend/editcategory', $data);
    }

    public function postEditCategory(EditCateRequest $request ,$id){
        $cate = Category::find($id);
        $cate->cate_name = $request->editName;
        $cate->cate_slug = Str::slug($request->editName);
        $cate->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteCategory($id){
        Category::destroy($id);
        return back();
    }
}
