<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
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
        
}