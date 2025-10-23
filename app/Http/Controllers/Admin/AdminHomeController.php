<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use App\Models\Product;
class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Admin - Online Store";
        return view('admin.home.index')->with("viewData", $viewData);
    }
    public function productsmanagement(){
        $viewData = [];
        $viewData["title"] = "productsmanagement - Admin - Online Store";
        $viewData["products"]=Product::all();
        return view('admin.home.productsmanagement')->with("viewData", $viewData);
    }
    public function createproduct(){
        $viewData=[];
        $viewData["title"]="createproduct - Admin - Online Store";
        return view('admin.home.createproduct')->with("viewData",$viewData);
    }
        public function store(Request $request){
        
        $product=new Product();
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->in_stock=$request->input("in_stock");
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
       return redirect()->rotue('admin.home.productsmanagement')->with("success","them thanh cong!");
    }
}