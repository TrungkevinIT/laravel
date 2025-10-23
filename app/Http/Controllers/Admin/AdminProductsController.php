<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class AdminProductsController extends Controller
{
    public function store(Request $request){
        
        $product=new Product();
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $ktin_stock=(int)$request->input("in_stock");
        $product->in_stock=($ktin_stock>0);
        $product->description=$request->input("description");
        $product->discount_percent=$request->input("discount_percent");
        if ($request->hasFile('image')) {
        // Lấy file từ request
        $file = $request->file('image');
        
        // Tạo tên file duy nhất (để tránh bị trùng lặp)
        $fileName = time() . '_' . $file->getClientOriginalName();
        
        // Lưu file vào thư mục 'public/storage/images'
        // Bạn cần chạy lệnh `php artisan storage:link` để thư mục này public
        $path = $file->storeAs('images', $fileName, 'public');
        
        // Lưu đường dẫn vào database
        $product->image = $path; 
    }
    // =================================
        $product->save();
       return redirect()->route('admin.home.productsmanagement')->with("success","them thanh cong!");
    }
}
