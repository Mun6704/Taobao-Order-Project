<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page...";
        $viewData["author"] = "Developer by : ho va ten";
        return view('home.about')->with("viewData", $viewData);
    }
}