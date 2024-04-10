<?php

namespace App\Http\Controllers;

// Import model của category.
use App\Models\category;
// Import model của product.
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    // Hiển thị toàn bộ sản phẩm trong trang Admin.
    public function index()
    {
        $query = DB::table('products')
            ->select('products.id', 'product_name', 'product_price', 'product_image', 'category_name')
            ->join('categories', 'categories.id', '=', 'products.category_id');
        $data = $query->get();
        return view('admin_product.index', ['data' => $data]);
    }
    // Method thêm 1 sản phẩm mới.
    public function create()
    {
        $data = category::all();
        return view('admin_product.create', ['data'=> $data]);
    }
    // Method lưu 1 sản phẩm mới.
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
            'updated_at' => 'nullable',
            'created_at' => 'nullable',
            'product_description' => 'nullable'
        ]);
        if($request->hasFile('product_image'))
        {
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images'), $imageName);
        }
        else
        {
            $imageName = null;
        }
        $data = new product();
        $data->product_name = $request->input("product_name");
        $data->product_price = $request->input("product_price");
        $data->product_image = $imageName;
        $data->category_id = $request->input("category_id");
        $data->product_description = $request->input("product_description");
        $data->save();
        return redirect('/trang_quan_ly_san_pham')->with('success', 'Thêm sản phẩm mới thành công');
    }
    // Method chuyển đến trang sửa 1 sản phẩm.
    public function edit($id)
    {
        $data = product::find($id);
        return view('admin_product.edit', compact('data'));
    }
    // Method update  1 sản phẩm. (PUT)
    public function UpdateProduct($id, Request $request)
    {
        $product = product::findOrFail($id);
        $data = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_image' => 'image',
            'category_id' => 'required',
            'updated_at' => 'nullable',
            'created_at' => 'nullable',
            'product_description' => 'nullable'
        ]);
        if($request->hasFile('product_image')) // nếu $request có nhận 1 file hình ảnh thì
        {
            $image = $request->file('product_image'); // $image là file hình ảnh.
            $imageName = time().'.'.$image->getClientOriginalExtension(); // $imageName là tên hình ảnh + tên đuôi file hình.

            $image->move(public_path('images'), $imageName); // file hình ảnh sẽ di chuyển tới dir public/images.
            $data['product_image'] = $imageName; // cập nhật lại product_image trong mảng data.
        }
        $product->update($data); // update lại mảng data.
        return redirect('/trang_quan_ly_san_pham')->with('success', 'Product Updated Succesfully');
    }

    // Method xóa 1 sản phẩm.
    public function DeleteProduct($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        //return redirect('/trang_quan_ly_san_pham')->with('success', 'Product deleted successfully');
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
