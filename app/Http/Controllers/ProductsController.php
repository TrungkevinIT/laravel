<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers;
use App\Models\Product;
class ProductsController extends Controller
{
    public function index(){
        $viewData=[];
        $viewData["title"]="Products-Online Store";
        $viewData["subtitle"]="Danh Sách Sản Phẩm";
        $viewData["products"]=Product::all();
       return view('products.index')->with('viewData',$viewData);
    }
    public function Show($id){
        $viewData=[];
        $product=Product::findOrFail($id);
        $viewData["title"]=$product["name"]. " - Online Store";
        $viewData["subtitle"]=$product["name"]. " - Thông tin sản phẩm.";
        $viewData["products"]=$product;
        return view("products.show")->with("viewData",$viewData);
    }
}
