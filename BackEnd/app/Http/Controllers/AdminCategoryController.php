<?php

namespace App\Http\Controllers;
// Import model của category.
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller
{
    // Method để show toàn bộ danh mục sản phẩm trong trang Admin (Get).
    public function index()
    {
        $category = category::all();
        return view("admin_category.index",['category' => $category]);
    }
    // Method để chuyển đến trang tạo mới một loại sản phẩm mới (Get).
    public function create()
    {
        return view("admin_category.create");
    }
    // Method để lưu 1 Loại sản phẩm mới (POST).
    public function store(Request $request)
    {
        $request->validate(
            [
                'category_name' => 'required',
                'category_thumbnail' => 'image',
            ]
        );
        if ($request->hasFile('category_thumbnail'))
        {
            $image = $request->file('category_thumbnail') ;
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        else
        {
            $imageName = null;
        }
        $data = new category();
        $data->category_name = $request->input("category_name");
        $data->category_thumbnail = $imageName ;
        $data->save();
        return redirect('/trang_quan_ly_danh_muc_san_pham')->with('success', 'Thêm loại sản phẩm mới thành công');
    }
    // Method để chỉnh sửa 1 loại sản phẩm
    public function edit($id)
    {
        $data = category::find($id);
        return view("admin_category.edit", compact('data'));
    }
    // Method để cập nhật lại thông tin của một loại sản phẩm (Put).
    public function update($id, Request $request)
    {
        $category = category::findOrFail($id);
        $data = $request->validate
        (
            [
                'category_name' => 'required',
                'category_thumbnail' => 'image',
            ]
        );
        if ($request->hasFile('category_thumbnail'))
        {
            $image = $request->file('category_thumbnail');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);;
            $data['category_thumbnail'] = $imageName;
        }
        $category->update($data);
        return  redirect('/trang_quan_ly_danh_muc_san_pham')->with('success', 'Cập nhật loại sản phẩm thành công');
    }
    // Method để xóa 1 loại sản phẩm (Delete).
    public function delete($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Loại sản phẩm đã được xóa thành công');
    }
}
