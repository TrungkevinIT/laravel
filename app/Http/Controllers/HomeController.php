<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    //trang chủ
    public function welcome(){
        $viewData=[];
        $viewData["title"]="Trang Chủ - - Online Store";
        $viewData["subtitle"]="Trang Chủ";
        return view("home.welcome")->with("viewData",$viewData);
    }
    //trang giới thiệu
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Giới Thiệu - Online Store";
        $viewData["subtitle"] = "Giới Thiệu";
        $viewData["description"] = "Đây là trang giới thiệu!";
        $viewData["author"] = "Phát triển bởi: OnlyU";
        return view('home.about')->with("viewData", $viewData);
    }

}
